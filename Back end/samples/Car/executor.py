
import Car
import argparse
import requests
import json

dataset="D:/xampp/htdocs/I-Bot/uploads"
parser = argparse.ArgumentParser(
        description='Mask R-CNN')
parser.add_argument('--subset', required=True)
args = parser.parse_args()
weight="last"
logs="D:/xampp/htdocs/Mask_RCNN/logs"
results = Car.detect(dataset,args.subset,logs)

result = json.dumps(results, ensure_ascii = "false")
payload={"res":result}
print(result)
r=requests.get('http://localhost:8080/I-Bot/calculator.php',params=payload)
print(r.text)
