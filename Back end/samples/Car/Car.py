



import os
import sys
import json
import datetime
import numpy as np
import skimage.io
from imgaug import augmenters as iaa

ROOT_DIR = os.path.abspath("D:/xampp/htdocs/Mask_RCNN")

# Import Mask RCNN
sys.path.append(ROOT_DIR)  # To find local version of the library

from mrcnn.config import Config
from mrcnn import utils
from mrcnn import model as modellib
from mrcnn import visualize
globimage_ids=[]
class CarConfig(Config):
    """Configuration for training on the Car segmentation dataset."""
    # Give the configuration a recognizable name
    NAME = "Car"

    # Adjust depending on your GPU memory
    IMAGES_PER_GPU = 1

    # Number of classes (including background)
    NUM_CLASSES = 1 + 2  # Background + Car

    # Number of training and validation steps per epoch
    STEPS_PER_EPOCH = 500

    # Don't exclude based on confidence. Since we have two classes
    # then 0.5 is the minimum anyway as it picks between Car and BG
    DETECTION_MIN_CONFIDENCE = 0.90

    # Backbone network architecture
    # Supported values are: resnet50, resnet101
    BACKBONE = "resnet50"

    # Input image resizing
    # Random crops of size 512x512
    IMAGE_RESIZE_MODE = "crop"
    IMAGE_MIN_DIM = 512
    IMAGE_MAX_DIM = 512
    IMAGE_MIN_SCALE = 2.0

    # Length of square anchor side in pixels
    RPN_ANCHOR_SCALES = (8, 16, 32, 64, 128)

    # ROIs kept after non-maximum supression (training and inference)
    POST_NMS_ROIS_TRAINING = 1000
    POST_NMS_ROIS_INFERENCE = 2000

    # Non-max suppression threshold to filter RPN proposals.
    # You can increase this during training to generate more propsals.
    RPN_NMS_THRESHOLD = 0.9

    # How many anchors per image to use for RPN training
    RPN_TRAIN_ANCHORS_PER_IMAGE = 64

    # Image mean (RGB)
    MEAN_PIXEL = np.array([43.53, 39.56, 48.22])

    # If enabled, resizes instance masks to a smaller size to reduce
    # memory load. Recommended when using high-resolution images.
    USE_MINI_MASK = True
    MINI_MASK_SHAPE = (56, 56)  # (height, width) of the mini-mask

    # Number of ROIs per image to feed to classifier/mask heads
    # The Mask RCNN paper uses 512 but often the RPN doesn't generate
    # enough positive proposals to fill this and keep a positive:negative
    # ratio of 1:3. You can increase the number of proposals by adjusting
    # the RPN NMS threshold.
    TRAIN_ROIS_PER_IMAGE = 128

    # Maximum number of ground truth instances to use in one image
    MAX_GT_INSTANCES = 200

    # Max number of final detections per image
    DETECTION_MAX_INSTANCES = 6


class CarInferenceConfig(CarConfig):
    # Set batch size to 1 to run one image at a time
    GPU_COUNT = 1
    IMAGES_PER_GPU = 1
    # Don't resize imager for inferencing
    IMAGE_RESIZE_MODE = "pad64"
    # Non-max suppression threshold to filter RPN proposals.
    # You can increase this during training to generate more propsals.
    RPN_NMS_THRESHOLD = 0.9


############################################################
#  Dataset
############################################################

class CarDataset(utils.Dataset):
    globimage_ids=[]
    def getimgid(self):

        return self.globimage_ids

    def load_Car(self, dataset_dir, subset):

        # Add classes. We have one class.
        # Naming the dataset Car, and the class Car

        self.add_class("Car",1,"Damage")

        # Which subset?
        # "val": use hard-coded list above
        # "train": use data from stage1_train minus the hard-coded list above
        # else: use the data from the specified sub-directory
        subset_dir =  subset
        datasets_dir = os.path.join(dataset_dir, subset_dir)

            # Get image ids from directory names

            # Get image ids from directory names
        image_ids = next(os.walk(datasets_dir))[2]
        self.globimage_ids = image_ids



        for image_id in image_ids:
            image_path = os.path.join(datasets_dir, image_id)
            image = skimage.io.imread(image_path)
            height, width = image.shape[:2]

            self.add_image(
                "Car",
                image_id=image_id,  # use file name as a unique image id
                path=image_path,
                width=width, height=height)



    def load_mask(self, image_id):

        # If not a balloon dataset image, delegate to parent class.
        image_info = self.image_info[image_id]
        if image_info["source"] != "Car":
            return super(self.__class__, self).load_mask(image_id)

        # Convert polygons to a bitmap mask of shape
        # [height, width, instance_count]
        info = self.image_info[image_id]
        mask = np.zeros([info["height"], info["width"], len(info["polygons"])],
                        dtype=np.uint8)
        for i, p in enumerate(info["polygons"]):
            # Get indexes of pixels inside the polygon and set them to 1
            rr, cc = skimage.draw.polygon(p['all_points_y'], p['all_points_x'])
            mask[rr, cc, i] = 1

        # Return mask, and array of class IDs of each instance. Since we have
        # one class ID only, we return an array of 1s
        return mask.astype(np.bool), np.ones([mask.shape[-1]], dtype=np.int32)

    def image_reference(self, image_id):
        """Return the path of the image."""
        info = self.image_info[image_id]
        if info["source"] == "Car":
            return info["path"]
        else:
            super(self.__class__, self).image_reference(image_id)



def detect(dataset_dir, subset,logs):
    import matplotlib
        # Agg backend runs without a display

    import matplotlib.pyplot as plt

    import os
    import sys
    import json
    import datetime
    import numpy as np
    import skimage.io
    from imgaug import augmenters as iaa

    # Root directory of the project
    ROOT_DIR = os.path.abspath("../../")
    path = os.path.join(dataset_dir,subset)
    # Import Mask RCNN
    sys.path.append(ROOT_DIR)  # To find local version of the library
    from mrcnn.config import Config
    from mrcnn import utils
    from mrcnn import model as modellib
    from mrcnn import visualize

    # Path to trained weights file
    COCO_WEIGHTS_PATH = os.path.join(ROOT_DIR, "mask_rcnn_coco.h5")

    # Directory to save logs and model checkpoints, if not provided
    # through the command line argument --logs
    DEFAULT_LOGS_DIR = os.path.join(ROOT_DIR, "logs")

    # Results directory
    # Save submission files here
    RESULTS_DIR = os.path.join(ROOT_DIR, "results/Car/")
    config = CarInferenceConfig()
    config.display()
    model = modellib.MaskRCNN(mode="inference", config=config,
                                      model_dir=logs)
    weights_path = "D:/HARSH/Documents/GitHub/Mask_RCNN/logs/car20191015T1253/mask_rcnn_car_0033.h5"
    model.load_weights(weights_path, by_name=True)

    """Run detection on images in the given directory."""
    print("Running on {}".format(dataset_dir))

    # Create directory
    if not os.path.exists(RESULTS_DIR):
        os.makedirs(RESULTS_DIR)
    submit_dir = "submit_{:%Y%m%dT%H%M%S}".format(datetime.datetime.now())
    submit_dir = os.path.join(RESULTS_DIR, submit_dir)
    os.makedirs(submit_dir)

    # Read dataset
    dataset = CarDataset()
    dataset.load_Car(dataset_dir, subset)
    dataset.prepare()
    # Load over images


    result={}
    globimage_ids = dataset.getimgid();


    result['claim_id']=subset
    for image_id in dataset.image_ids:
        # Load image and run detection
        image = dataset.load_image(image_id)
        # Detect objects
        r = model.detect([image], verbose=0)[0]
        # Encode image to RLE. Returns a string of multiple lines


        area = np.reshape(r['masks'], (-1, r['masks'].shape[-1])).astype(np.float32).sum()
        print( "Area of Damage detected :",area)
        h,w,c = image.shape
        perarea = (area*100)/(h*w)
        print("Percent : ",perarea)
        name = globimage_ids[image_id].replace(".jpg","")
        result[name]=f"{perarea:.2f}"

        # Save image with masks
        visualize.display_instances(
            image ,name,path, r['rois'], r['masks'], r['class_ids'],
            dataset.class_names, r['scores'],
            show_bbox=True, show_mask=True,
            title="Predictions")
    print(result)
    return result
    # Save to csv file
