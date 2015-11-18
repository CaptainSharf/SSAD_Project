<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datapub</title>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chosen.css">
    <link rel="stylesheet" href="css/iCheck.custom.css">
    <link rel="stylesheet" href="plugins/tageditor/jquery.tag-editor.css">
    <link rel="stylesheet" href="plugins/morris/morris-0.4.3.min.css">
    <script src="js/json_processing/a.js"></script>
    <script src="js/all_tags.js"></script>
    <script src="js/json_processing/osfamily.js"></script>
    <script src="js/json_processing/time24.js"></script>
    <script src="js/json_processing/timespent.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script type="text/javascript" src="js/jquery.metisMenu.js"></script>
    <script type="text/javascript" src="js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/jquery.peity.min.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.js"></script>
    <script type="text/javascript" src="plugins/tageditor/jquery.caret.min.js"></script>
    <script type="text/javascript" src="plugins/tageditor/jquery.tag-editor.min.js"></script>
    <script src="js/inspinia.js"></script>
    <script src="js/icheck.min.js"></script>
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.tooltip.min.js"></script>
    <script src="js/jquery.flot.spline.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="plugins/morris/morris.js"></script>
    <script src="js/index.js"></script>
    <style type="text/css">
        #logo {
            background-image: url(images/logo.png);
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            height: 75px;
        }
    </style>
</head>
<body>
    <div class="row white-bg">
        <div class="col-md-2" style="border-right: 1px solid #e7eaec;" ng-controller="SideMenuController">
            <div id="logo"></div>
            <div class="ibox-content" ng-repeat="section in sections">
                <h2>{{section.title}}</h2>
                Work under progress
                <ul class="todo-list m-t small-list">
                    <li ng-repeat="item in section.items">
                        <a class="check-link"><i onclick="filter();" class="fa fa-check-square" label="{{item.label}}" type="{{section.type}}" name="{{item.name}}"></i> </a>
                        <span class="m-l-xs">{{item.label}}</span>
                    </li>
                </ul>
            </div>
        </div>

        <!--  center content  -->

        <div class="col-md-8">
            <br>
            <!-- Top filter menu -->
            <div class="row" ng-controller="TopFilterController">
                <div class="col-md-4" ng-repeat="item in items">
                    <div class="input-group">
                    <select name="{{item.name}}" data-placeholder="{{item.label}}" class="chosen-select" multiple style="width: 200px;">
                        <option value="{{option}}" ng-repeat="option in item.options">{{option}}</option>
                    </select>
                    </div>
                </div>
            </div>
            <br>


            <!-- view selected meta data -->

            <div class="row">
                 <input class="col-md-10 form-control" id="global-filters">
            </div>
            
            <!-- All the statistics in numerals  -->

            <div class="row" ng-controller="RealTimeSectionsController">
                <div class="col-md-1"></div>
                <div class="col-md-2" ng-repeat="item in realtimesections">
                    <div class="ibox-title">
                        <span class="label label-info pull-right">Daily</span>
                        <h5 ng-bind-html="item.label | unsafe"></h5>
                    </div>
                    <div class="ibox-content">
                        <h1 class="no-margins realtimesection-{{item.name}}">{{item.value}}</h1>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>

            <!-- The linear graph -->

            <div class="flot-chart dashboard-chart">
                <div class="flot-chart-content" id="flot-dashboard-chart"></div>
            </div>

            <!-- The fifa style stat graph -->

            <div class="row">
                <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tags</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="tagsChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>


            <!-- The pie annulus chart -->
                <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Operating Systems</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

            <!-- The pie annulus chart -->
                <div class="col-md-2"></div>
                <div class="col-md-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Location (Continent)</h5>
                            <div ibox-tools></div>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart2" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>



            <!-- trending articles spline -->
            <div class="row">
                <div class="col-md-12 trending-topics">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Most viewed</h5>
                        </div>
                        <div class="ibox-content no-padding">
                            <ul class="list-group" ng-controller="TrendingStoriesController">
                                <li class="list-group-item" ng-repeat="item in popular">
                                <p><a class="text-info" href="http://www.digitant.co/blog">{{item.title}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--{{item.data}} <em>views since the beginning of tracking</em></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Center content over -->

        <!--  live feed comes here!! -->
        <!-- javascript code to print the latest viewed article -->
            <script type="text/javascript">
            function dosort(){
                timedata.sort(function(a,b) { 
                    return new Date(b.time24).getTime() - new Date(a.time24).getTime() 
                });
            }
            var globalcount=0;

            function return_count(){
                for(var i=0;i<globalcount;i++){
                    if(timedata[globalcount].url.localeCompare(timedata[i].url)==0){
                        globalcount++;
                        i=0;                    
                    }
                }   
                globalcount++;
            }
            function gotourl(){

//              document.write(timedata[globalcount].url);
                window.location=timedata[globalcount].url;
            }
            </script>

            <script>dosort();</script>

        <div class="col-md-2 live-feed" style="border-left: 1px solid #e7eaec;">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Live Feed</h5>
                    <div class="ibox-tools">
                        <!-- <span class="label label-warning-light">10 Messages</span>  -->
                        
                    </div>
                </div>
                    <div class="ibox-content">
                    <div class="feed-activity-list">

                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>
                        
                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>

                        <div class="feed-element">
                            <div>
                            <!--    <small class="pull-right text-navy">1m ago</small> -->
                                <strong>
                                    <script> return_count(); </script>
                                    <div onclick="gotourl()"><a href="#">
                                    <script>document.write(timedata[globalcount].title);</script>
                                    </div>
                                    </a>
                                </strong>
                                <div><script>document.write(timedata[globalcount].time24);</script></div>
                            </div>
                        </div>

                <!-- ADD LIVE FEED HERE -->

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            var doughnutData = [];
            var oslen = osfamilydata.length;
            var colours = ["#a3e1d4","#dedede","#b5b8cf","dedede"];
            var count = 0;
            for(var i = 0; i<oslen; i++){
                var a = {
                    value: osfamilydata[i].visits,
                    color: colours[count],
                    highlight: "#d65555",
                    label: osfamilydata[i].osfamily
                    };
                doughnutData.push(a);
                if(osfamilydata[i].visits > 0)
                count++;
            }


            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
            };
            var ctx = document.getElementById("doughnutChart").getContext("2d");
            doughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var doughnutData2 = [];
            var oslen2 = osfamilydata.length;
            var colours2 = ["#a3e1d4","#dedede","#b5b8cf","dedede"];
            var count2 = 0;
            var continent = [];
            continent.push({
                name: "North America",
                count: 0});
            continent.push({
                name: "Asia",
                count: 0});
            continent.push({
                name: "Europe",
                count: 0});
            continent.push({
                name: "Africa",
                count: 0});
            continent.push({
                name: "Australia",
                count: 0});
            for(var i = 0; i<globaldata.length; i++){
                for(var j=0; j<5;j++){
                if(continent[j].name == globaldata[i].location){
                    continent[j].count++;
                }
                }
            }
            for(var i = 0; i<5; i++){
                var a = {
                    value: continent[i].count,
                    color: colours2[count2],
                    highlight: "#1ab394",
                    label: continent[i].name
                    };
                doughnutData2.push(a);
                if(continent[i].count > 0)
                count2++;
            }


            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
            };
            var ctx = document.getElementById("doughnutChart2").getContext("2d");
            doughnutChart2 = new Chart(ctx).Doughnut(doughnutData2, doughnutOptions);


            var labels = [];
            var data1 = [];
            var data2 = [];

            $.each(articles, function(i, item) {
                $.each(item.tags, function(i, tag) {
                    if (labels.indexOf(tag) == -1) {
                        labels.push(tag);
                        data1.push(0);
                        data2.push(0);
                    }
                })
            });

            $.each(tagdata, function(i, item) {
                i = labels.indexOf(item.externalTag);
                data1[i]++;
                i = labels.indexOf(item.internalTag);
                data2[i]++;
            });
            var tagsData = {
                    labels: labels,
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(51,0,128,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: data2
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(26,179,148,0.2)",
                            strokeColor: "rgba(26,179,148,1)",
                            pointColor: "rgba(26,179,148,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: data1
                        }
                    ]
                };

                var tagsOptions = {
                    scaleShowLine: true,
                    angleShowLineOut: true,
                    scaleShowLabels: false,
                    scaleBeginAtZero: true,
                    angleLineColor: "rgba(0,0,0,.1)",
                    angleLineWidth: 1,
                    pointLabelFontFamily: "'Arial'",
                    pointLabelFontStyle: "normal",
                    pointLabelFontSize: 10,
                    pointLabelFontColor: "#666",
                    pointDot: true,
                    pointDotRadius: 3,
                    pointDotStrokeWidth: 1,
                    pointHitDetectionRadius: 20,
                    datasetStroke: true,
                    datasetStrokeWidth: 2,
                    datasetFill: true,
                    responsive: true,
                }

                var ctx = document.getElementById("tagsChart").getContext("2d");
                radarChart = new Chart(ctx).Radar(tagsData, tagsOptions);
        });

    </script>
    <script type="text/javascript">
        updateFlotChart = function(globaldata) {
            var data = {};
            $.each(globaldata, function(i, item) {
                if (!data[item.articleId]) {
                    data[item.articleId] = {};
                }

                if (!data[item.articleId][item.time]) {
                    data[item.articleId][item.time] = 1;
                }
                else {
                    data[item.articleId][item.time]++;
                }
            });

            var flotData = [];

            $.each(data, function(id, data) {
                var item = [];
                for (var i = 0; i < 24; i++) {
                    item.push([i, data[i] || 0]);
                }
                flotData.push(item);
            });

            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), flotData,
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#330080", "#464f88"],
                        xaxis:{
                            ticks: [[0, '12:00AM'], [1, '1:00AM'], [2, '2:00AM'], [3, '3:00AM'], [4, '4.00AM'], [5, '5:00AM'],[6, '6:00AM'], [12, '12:00PM'],[17, '5:00PM'], [18, '6:00PM'], [23, '11:00PM'], [7, '7:00AM'], [8, '8:00AM'], [9, '9:00AM'], [10, '10:00AM'], [11, '11.00AM'], [13, '1:00PM'],[14, '2:00PM'], [15, '3:00PM'],[16, '4:00PM'], [17, '6:00PM'], [19, '7:00PM'], [20, '8:00PM'], [21, '9:00PM'], [22, '10:00PM']]
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );
        };


        function getArticleTitle(id, k) {
            var title;
            $.each(articles, function(i, item) {
                if (item.id == id) {
                    title = item.title;
                }
            });

            return title;
        }

        updateMainAreaChart = function(globaldata) {
            var map = {};

            $.each(globaldata, function(i, item) {
                if (!map[item.time]) {
                    map[item.time] = {};
                }

                if (!map[item.time][item.articleId]) {
                    map[item.time][item.articleId] = 1;
                }
                else {
                    map[item.time][item.articleId]++;
                }
            });
            var data = [];
            var d = new Date();
            d.setMinutes(0);
            d.setSeconds(0);
            d.setMilliseconds(0);
            for (var i = 0; i < 24; i++) {
                d.setHours(i);
                var item = {
                    time: d.getTime()
                };
                $.each(map[i], function(key, value) {
                    item[key] = value;
                })
                data.push(item);
            }
            var keys = [];
            var titles = [];
            $.each(articles, function(i, item) {
                keys.push(item.id);
                titles.push(item.title);
            })

            Morris.Area({
                element: 'flot-dashboard-chart',
                data: data,
                xkey: 'time',
                ykeys: keys,
                labels: titles,
                pointSize: 2,
                hideHover: 'auto',
                resize: true,
                //lineColors: ['#87d6c6', '#54cdb4','#1ab394'],
                lineWidth:2,
                pointSize:1,
            });
        }

        $(document).ready(function() {
            updateFlotChart(globaldata);
            updateMainAreaChart(globaldata);
        });
    </script>


    <!--  tag Chart -->

    <script type="text/javascript">
        //$(document).ready(function() {
    /*

            $.each(articles, function(i, item) {
                $.each(item.tags, function(i, tag) {
                    if (labels.indexOf(tag) == -1) {
                        labels.push(tag);
                        data1.push(0);
                        data2.push(0);
                    }
                })
            });

            $.each(tagdata, function(i, item) {
                i = labels.indexOf(item.externalTag);
                data1[i]++;
                i = labels.indexOf(item.internalTag);
                data2[i]++;
            });



            var tagsData = {
                    labels: labels,
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: data1
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(26,179,148,0.2)",
                            strokeColor: "rgba(26,179,148,1)",
                            pointColor: "rgba(26,179,148,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: data2
                        }
                    ]
                };

                var tagsOptions = {
                    scaleShowLine: true,
                    angleShowLineOut: true,
                    scaleShowLabels: false,
                    scaleBeginAtZero: true,
                    angleLineColor: "rgba(0,0,0,.1)",
                    angleLineWidth: 1,
                    pointLabelFontFamily: "'Arial'",
                    pointLabelFontStyle: "normal",
                    pointLabelFontSize: 10,
                    pointLabelFontColor: "#666",
                    pointDot: true,
                    pointDotRadius: 3,
                    pointDotStrokeWidth: 1,
                    pointHitDetectionRadius: 20,
                    datasetStroke: true,
                    datasetStrokeWidth: 2,
                    datasetFill: true,
                    responsive: true,
                }

                var ctx = document.getElementById("tagsChart").getContext("2d");
                radarChart = new Chart(ctx).Radar(tagsData, tagsOptions);
        });*/
    </script>


    <script type="text/javascript">

            //$('.trending-sparkline').peity('line', {
            //  width: 200,
            //  fill: '#1ab394',
            //  stroke: '#169c81'
            //});

            //$('.chosen-select').chosen({});
    </script>


    <?php
        function getURL($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $tmp = curl_exec($ch);
        curl_close($ch);
        if ($tmp != false){
            return $tmp;
        }
        else
            return "Hello";
    }

        $live_url = "http://digitant.co/piwik/?module=API&method=Live.getLastVisitsDetails&idSite=3&period=month&date=today&format=json&token_auth=fb4a14cb95fa74bc88be3aa21b9a0062";
        $data = getURL($live_url);   
        //echo $data;
        $data_array = json_decode($data, true);
        //print_r($data_array);

        $live_lis = [];
        $th_time_lis = [];
        $time_sp_lis = [];
        $no_of_times_articles_lis = [];
        $no_of_times_articles_dic = [];


        foreach ($data_array as $dat) {
            //print_r($val);
            //echo '</br> Action </br>';
            $actionD = $dat['actionDetails'];
            foreach ($actionD as $page) {
                //echo '</br> Page </br>';
                //print_r($page);
                //echo $page['timeSpent'];
                    
                if(array_key_exists('pageTitle', $page)){
                    $server_time = $page['serverTimePretty'];
                    $th_dict = array('url' => $page['url'], 'title' => $page['pageTitle'], 'time24' =>  $server_time);
                    array_push($th_time_lis, $th_dict);
                
                
                if(array_key_exists($page['pageTitle'], $no_of_times_articles_dic))
                    $no_of_times_articles_dic[$page['pageTitle']] += 1;
                else
                    $no_of_times_articles_dic[$page['pageTitle']] = 0;
                $nos = str_replace(" ", ":", $server_time);
                $nos = explode(":", $nos)[3];
                $live_dic = array('visitor'=> $dat['visitorType'], 'source'=> $dat['referrerTypeName'], 'location'=> $dat['continent'], 'title'=> $page['pageTitle'], 'url'=> $page['url'], 'time'=> $nos);
                array_push($live_lis, $live_dic);
            }


            $time_spent = 0;
            if(array_key_exists('timeSpent', $page))
                $time_spent = $page['timeSpent'];

            if(array_key_exists('pageTitle', $page)) {
                $time_sp_dic = array('title' => $page['pageTitle'], 'timespent' => $time_spent);
                array_push($time_sp_lis, $time_sp_dic);
            }

        }

    }

        $live_j = json_encode($live_lis);
        $live_j = 'globaldata = '.$live_j.';';
        //echo $live_j;
        $live_file = fopen("js/json_processing/a.js",'w+') or die("File didn't open");
        fwrite($live_file, $live_j);
        fclose($live_file);

        $th_j = json_encode($th_time_lis);
        $th_j = 'timedata = '.$th_j.";";
        //echo $th_j;
        $th_file = fopen('js/json_processing/time24.js', 'w+') or die("File didn't open");
        fwrite($th_file, $th_j);
        fclose($th_file);

        $time_sp_j = json_encode($time_sp_lis);
        $time_sp_j = 'timespentdata = '.$time_sp_j.";";
        //echo $time_sp_j;
        $time_sp_file = fopen('js/json_processing/timespent.js', 'w+') or die("File didn't open");
        fwrite($time_sp_file, $time_sp_j);
        fclose($time_sp_file);
        

        array_push($no_of_times_articles_lis, $no_of_times_articles_dic);
        $no_of_times_articles_j = json_encode($no_of_times_articles_lis);
        $no_of_times_articles_j = 'numtimesdata = '.$no_of_times_articles_j.";";
        //echo $no_of_times_articles_j;
        $no_of_times_articles_file = fopen('js/json_processing/no_of_times_articles.js', 'w+');
        fwrite($no_of_times_articles_file, $no_of_times_articles_j);
        fclose($no_of_times_articles_file);
    ?>
    <?php
        $device_url = "http://www.digitant.co/piwik/?module=API&method=DevicesDetection.getOsFamilies&idSite=3&period=month&date=today&format=JSON&token_auth=fb4a14cb95fa74bc88be3aa21b9a0062";

        $data = getURL($device_url);   
        //echo $data;
        $data_array = json_decode($data, true);

        $lis = [];
        $dic = [];

        foreach ($data_array as $dev) {
            $dic = array('osfamily' => $dev['label'], 'uniqvisitors' => $dev['nb_uniq_visitors'], 'visits' => $dev['nb_visits']);
            array_push($lis, $dic);
        }

        $j = json_encode($lis);
        $j = 'osfamilydata = '.$j.";";
        //echo $j;
        $j_file = fopen('js/json_processing/osfamily.js', 'w+');
        fwrite($j_file, $j);
        fclose($j_file);        

    ?>


</body>
</html>
