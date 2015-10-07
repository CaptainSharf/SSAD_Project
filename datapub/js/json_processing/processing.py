import urllib2
import json

live_url = "http://digitant.co/piwik/?module=API&method=Live.getLastVisitsDeta\
ils&idSite=3&period=day&date=today&format=JSON&token_auth=fb4a14cb95fa74bc88be\
3aa21b9a0062"

visit_time_url = "http://digitant.co/piwik/?module=API&method=VisitTime.getVisi\
tInformationPerServerTime&idSite=3&period=day&date=today&format=JSON&token_auth\
=fb4a14cb95fa74bc88be3aa21b9a0062"

response = urllib2.urlopen(live_url)
data = json.loads(response.read())

live_lis = []
th_time_lis = []
for dat in data:
    # print dat, '\n'
    # print dat['visitorId'], dat['visitorType'], dat['referrerTypeName'],
    # print dat['continent']
    # print '\n'
    for pages in dat['actionDetails']:
        try:
            # print pages['pageTitle'], pages
            server_time = pages['serverTimePretty']
            th_dict = {'url': pages['url'], 'title': pages['pageTitle'],
                       'time24': server_time}
            th_time_lis.append(th_dict)

            nos = server_time.replace(' ', ':')
            nos = nos.split(':')[3]
            live_dic = {'visitor': dat['visitorType'], 'source':
                        dat['referrerTypeName'], 'location': dat['continent'],
                        'title': pages['pageTitle'], 'url': pages['url'],
                        'time': nos}
            # print live_dic
            live_lis.append((live_dic))
        except KeyError:
            pass

live_j = json.dumps(live_lis)
live_j = 'globaldata = ' + live_j + ";"
live_file = open('a.js', 'w+')
live_file.write(live_j)
live_file.close()

th_j = json.dumps(th_time_lis)
th_j = 'timedata = ' + th_j + ";"
th_file = open('time24.js', 'w+')
th_file.write(th_j)
th_file.close()
