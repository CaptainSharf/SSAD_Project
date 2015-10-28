import urllib2
import json

device_url = "http://www.digitant.co/piwik/?module=API&method=DevicesDetection.\
getOsFamilies&idSite=3&period=day&date=today&format=JSON&token_auth=fb4a14cb95f\
a74bc88be3aa21b9a0062"

response = urllib2.urlopen(device_url)
data = json.loads(response.read())

lis = []
dic = {}
for dev in data:
    dic = {'osfamily': dev['label'], 'uniqvisitors': dev['nb_uniq_visitors'],
           'visits': dev['nb_visits']}
    lis.append(dic)

j = json.dumps(lis)
j = 'osfamilydata = ' + j + ";"
j_file = open('osfamily.js', 'w+')
j_file.write(j)
j_file.close()
