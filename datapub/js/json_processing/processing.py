import urllib2
import json

url = "http://digitant.co/piwik/?module=API&method=Live.getLastVisitsDetails&i\
dSite=3&period=day&date=today&format=JSON&token_auth=fb4a14cb95fa74bc88be3aa\
21b9a0062"

response = urllib2.urlopen(url)
data = json.loads(response.read())

lis = []
for dat in data:
    # print dat, '\n'
    # print dat['visitorId'], dat['visitorType'], dat['referrerTypeName'],
    # print dat['continent']
    # print '\n'
    for pages in dat['actionDetails']:
        try:
            # print pages['pageTitle'], pages
            server_time = pages['serverTimePretty']
            nos = server_time.replace(' ', ':')
            nos = nos.split(':')[3]
            dict = {'visitor': dat['visitorType'], 'source':
                    dat['referrerTypeName'], 'location': dat['continent'],
                    'title': pages['pageTitle'], 'url': pages['url'], 'time':
                    nos}
            # print dict
            lis.append((dict))
        except KeyError:
            pass
j = json.dumps(lis)
j = 'globaldata = ' + j + ";"
f = open('a.js', 'rw+')
f.write(j)
f.close()
