import urllib2
import json

live_url = "http://digitant.co/piwik/?module=API&method=Live.getLastVisitsDeta\
ils&idSite=3&period=month&date=today&format=JSON&token_auth=fb4a14cb95fa74bc88be\
3aa21b9a0062"

response = urllib2.urlopen(live_url)
data = json.loads(response.read())

live_lis = []
th_time_lis = []
time_sp_lis = []
no_of_times_articles_lis = []
no_of_times_articles_dic = {}
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
            try:
                no_of_times_articles_dic[pages['pageTitle']] += 1
            except KeyError:
                no_of_times_articles_dic[pages['pageTitle']] = 0
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
        time_spent = 0
        try:
            time_spent = pages['timeSpent']
        except KeyError:
            pass
        try:
            time_sp_dic = {'title': pages['pageTitle'], 'timespent':
                           time_spent}
            time_sp_lis.append(time_sp_dic)
        except KeyError:
            pass

# print no_of_times_articles_dic

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

time_sp_j = json.dumps(time_sp_lis)
time_sp_j = 'timespentdata = ' + time_sp_j + ";"
time_sp_file = open('timespent.js', 'w+')
time_sp_file.write(time_sp_j)
time_sp_file.close()

no_of_times_articles_lis.append(no_of_times_articles_dic)
no_of_times_articles_j = json.dumps(no_of_times_articles_lis)
no_of_times_articles_j = 'numtimesdata = ' + no_of_times_articles_j + ";"
no_of_times_articles_file = open('no_of_times_articles.js', 'w+')
no_of_times_articles_file.write(no_of_times_articles_j)
no_of_times_articles_file.close()
