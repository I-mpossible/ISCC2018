import base64
import urllib
cipher = base64.b64decode(urllib.unquote('xRkIRJE%2BmfBoTOvrsM2FPIEOYGcxmKbFvCpYX%2FIpf3ogI%2FM2%2BJAU1HoClvk8cZLOcjtjx94wQ3hwZOvfjafcxg%3D%3D'))
x = cipher[0:9]+chr(ord(cipher[9])^ord('m')^ord('a'))+cipher[10:]
x = urllib.quote(base64.b64encode(x))
print x