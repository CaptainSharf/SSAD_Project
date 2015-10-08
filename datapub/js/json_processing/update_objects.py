import os
import time

while True:
    os.system("python processing.py")
    os.system("python device_processing.py")
    time.sleep(20)
