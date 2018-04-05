#! /usr/bin/python
import math
import hashlib
import time
import sys

def tracker(userEmail):
    timeStr = str(time.time())
    uniqStr = userEmail + timeStr
    encodStr = uniqStr.encode('utf-8')
    m = hashlib.md5()
    m.update(encodStr)
    return m.hexdigest()

userEmail = sys.argv[0]
id = tracker (userEmail)
print(id)
