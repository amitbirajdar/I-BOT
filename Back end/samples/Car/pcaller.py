#!D:\Anaconda\envs\tf-gpu\python.exe


import os
import sys

os.system('cmd /k " conda activate tf-gpu & python D:/xampp/htdocs/Mask_RCNN/samples/Car/executor.py --subset={}"'.format(sys.argv[1]))
