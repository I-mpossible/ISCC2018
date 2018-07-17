import base64
import urllib

cipher = base64.b64decode('+8Dk8WEJ9pv+AO671PkHjm1lIjtzOjU6Im1kbWluIjtzOjg6InBhc3N3b3JkIjtzOjU6IjEyMzQ1Ijt9')
iv = base64.b64decode(urllib.unquote('KQOVeWtEbmuYy97d6XDeag%3D%3D'))
newiv = ''
right = 'a:2:{s:8:"userna'
for i in xrange(16):
	newiv += chr(ord(right[i])^ord(iv[i])^ord(cipher[i]))
print urllib.quote(base64.b64encode(newiv))