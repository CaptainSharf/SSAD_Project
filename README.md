# README - Release 1
## Datapub

It is a publisher-oriented data management system. With it, a publisher can
analyze traffic and other data for effective content publishing.

### See the basic template

* Go to the *datapub* folder.
* Open *index.html* using a browser.

### To update to real-time data

* Go to *datapub/js/json_processing*.
* Run the following: *python device_processing.py* and *python processing.py*.
* Open *index.html* in the *datapub* folder to see the changes.

### To see changes in *datapub*

* Visit <http://www.digitant.co/blog> to see an increase in __Visits__.
* Visiting the homepage and other pages will lead to an increase in
  __Page hits__ too.
* All the pages visited on the above metioned website will show up on the
  __Live Feed__ on the right side of *datapub*.
* Other fields/metrics will also change accordingly.
* Before viewing, *update to real-time*(see previous section).

### Brief description of various graphs and metrics

__Unique Visits__ : No. of unique visits on a daily basis.

__Page Views/Visit__ : No. of pages visited per visit on a daily basis.

__Avg. Time Spent__ : Average time spent on different pages on a daily basis.

__Page hits__ : No. pages visited on a daily basis.

__Read rate__ : A certain 'read threshold' is set by the publisher. This shows
                the percentage of visitors above that threshold.

__Live Feed__ : Shows the most recently visited pages.

__The FlotChart__ : Shows activity on 24-hour basis.

__Operating System doughnut-chart__ : Shows operating system-families of
					                  visitors on a daily basis.

__Tags radar chart__ : Shows the number of internal and external tags of
					   various articles on the website.

__Location(Continent) doughnut-chart__ : Shows location of visitors on a daily
                                    basis.



__Note__ : The *location* defaults to the language setting of the user, if the
           IP address to location mapping cannot be found in the location
           database.


