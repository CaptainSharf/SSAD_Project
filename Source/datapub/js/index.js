(function() {
    var app = angular.module('app', []);

    $(document).ready(function() {
	$('.i-checks').iCheck({
	    checkboxClass: 'icheckbox_square-green',
	    radioClass: 'iradio_square-green',
	});

	$('#global-filters').tagEditor({initialTags: ['All Visitors', 'All Sources', 'All Platforms', 'All Locations']});
    });

    app.filter('unsafe', function($sce) {
	return function(val) {
	    return $sce.trustAsHtml(val);
	};
    });


    app.controller('RealTimeSectionsController', ['$scope', function(scope) {
    var count=0;
    var count2=0;
    var totaltime=0;
    var len=globaldata.length;
    for (var i=0;i<len;i++){
	if(Number(globaldata[i].timespent) > 5)
	count+=1;
    if(Number(globaldata[i].timespent) > 0){
	count2+=1;
	totaltime += globaldata[i].timespent;
    }
    }
    var read_rate_ans=(count*100)/len;
    var avgTimeSpent=totaltime/count2;

    var c3=0;
    var actualvisits = 0;
    for(var i=0;i<osfamilydata.length;i++){
	actualvisits += osfamilydata[i].visits;
    }
    var pagetotal = globaldata.length;
    var viewspervisit = pagetotal/actualvisits;

    scope.realtimesections = [{
	label: 'Visits &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
	    name: 'visits',
	    value: actualvisits
    }, {
	label: 'Page Views / Visit',
	    name: 'viewspervisit',
	    value: parseInt(viewspervisit)   // has to be obtained from analytics
    }, {
	label: 'Avg Time Spent',
	    name: 'avgtimespent',
	    value: parseInt(avgTimeSpent) + 's' // has to be obtained from analytics
    }, {
	label: 'Page hits &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
	    name: 'virality',
	    value: parseInt(globaldata.length) // try tracking sharing
    }, {
	label: 'Read rate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;',
	    name: 'readrate',
	    value: parseInt(read_rate_ans) + '%'
    }]
    }]);

    app.controller('SideMenuController', ['$scope', function(scope) {
	scope.sections = [
    {
	title: 'Visitor',
	type: 'visitor',
	items: [{
	    label: 'New',
	name: 'new'
	}, {
	    label: 'Returning',
	name: 'returning'
	}, {
	    label: 'Loyal',
	name: 'loyal'
	}, {
	    label: 'Influencers',
	name: 'influencers'
	}]
    }, 
	{
	    title: 'Sources',
	    type: 'source',
	    items: [{
		label: 'Internal',
		name: 'internal'
	    }, {
		label: 'Social',
		name: 'social'
	    }, {
		label: 'Direct',
		name: 'Direct Entry'
	    }, {
		label: 'Links',
		name: 'links'
	    }, {
		label: 'Search',
		name: 'search'
	    }]
	},
	{
	    title: 'Location',
	    type: 'location',
	    items: [{
		label: 'North America',
		name: 'North America'
	    }, {
		label: 'South America',
		name: 'South America'
	    }, {
		label: 'Africa',
		name: 'Africa'
	    }, {
		label: 'Asia',
		name: 'Asia'
	    }, {
		label: 'Europe',
		name: 'Europe'
	    }, {
		label: 'Australia',
		name: 'Australia'
	    }]
	}];
    }]);

    app.controller('TrendingStoriesController', ['$scope', function(scope) {
	/////////////////////
	var GLOB = globaldata;
    scope.popular = [];
    len = GLOB.length;
    for(var i = 0; i < len; i++){
	var len2 = scope.popular.length;
	var index = -1;
	for(var j = 0; j < len2; j++){
	    if(scope.popular[j].title == GLOB[i].title){
		index = j;
		break;
	    }
	}
	if(index!=-1){
	    scope.popular[j].data += 1;
	}
	else{
	    scope.popular.push({
		title: GLOB[i].title,
		author: "rohan",
		data: 1
	    }
	    );
	}
    }
    scope.popular.sort(function(a,b) { 
	return b.data - a.data 
    });
    }]);

    app.controller('TopFilterController', ['$scope', function(scope) {

    }]);

    function doFilter() {
	var filters = {};

	$('.check-link > i').each(function(i, el) {
	    el = $(el);

	    if (!filters[el.attr('type')]) {
		filters[el.attr('type')] = {};
	    }

	    filters[el.attr('type')][el.attr('name')] = {label: el.attr('label'), value: el.hasClass('fa-check-square')};

	    var allTags = [];
	    $.each(filters, function(type, items) {
		var allEnabled = true;
		var tags = [];
		$.each(items, function(i, item) {
		    allEnabled = allEnabled && item.value;

		    if (item.value) {
			tags.push(item.label);
		    }
		});

		if (allEnabled) {
		    allTags.push('all ' + type + 's');
		}
		else {
		    $.each(tags, function(i, item) {
			allTags.push(item);
		    })
		}
	    });

	    $('#global-filters').tagEditor('destroy');
	    $('#global-filters').tagEditor({initialTags: allTags});
	});

	filtered = [];
	var GLOB = []; 
	if(deadline==0){
	    GLOB =globaldata;
	}
	else{
	    GLOB = getNewGlobalData(globaldata, deadline);
	}

	$.each(GLOB, function(i, item) {
	    var include = true;
	    $.each(filters, function(key, sub) {
		var value = item[key];

		if (sub[value].value == false) {
		    include = false;
		    return false;
		}
	    });

	    if (include) {
		filtered.push(item);
	    }
	});
	var f2 = getNewGlobalData(filtered,deadline,1);
	var lenp = f2.length

	    $('.realtimesection-virality').html(lenp);
	var count = 0;
	var readcount = 0;
	var total = 0;
	for(var i = 0; i<lenp;i++)
	{
	    var x = Number(f2[i].timespent);
	    if(x != 0){
		count++;
		if(x>5)
		    readcount++;
		total = total + x;
	    }
	    console.log(total);
	    console.log(count);
	    console.log(readcount);
	    //var avgt = Math.round(total / count);
	    var avgt = total / count;
	    //var rrate = Math.round((readcount * 100 ) / count);
	    var rrate = (readcount * 100 ) / count;
	    avgt *= 100;
	    rrate *= 100;
	    var q = Math.round(avgt);
	    var w = Math.round(rrate);
	}
	$('.realtimesection-avgtimespent').html(q/100);
	$('.realtimesection-readrate').html(w/100);

	// update real time sections
	// CHANGE THE RANDOM NUMBERS //
	/*
	   $('.realtimesection-viewspervisit').html(parseInt(Math.random() * 100));
	   $('.realtimesection-avgtimespent').html(parseInt(Math.random() * 45) + 'm');
	   $('.realtimesection-virality').html(parseInt(Math.random() * 50));
	   $('.realtimesection-readrate').html(parseInt(Math.random() * 25)) + '%';


	// update doughnut chart
	// CHANGE THE RANDOM NUMBER //
	$.each(doughnutChart.segments, function(i, item) {
	item.value = parseInt(Math.random() * 300); // sentiment
	})

	doughnutChart.update();

	// update radar chart
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

	$.each(filtered, function(i, item) {
	i = labels.indexOf(item.externalTag);
	data1[i]++;
	i = labels.indexOf(item.internalTag);
	data2[i]++;
	});

	$.each(radarChart.datasets[0].points, function(i, item) {
	item.value = data1[i];
	});

	$.each(radarChart.datasets[1].points, function(i, item) {
	item.value = data2[i];
	});

	radarChart.update();
	*/
	$('#old').remove();
	$('#inserthere').prepend($('<div id="old"><canvas id="doughnutChart3" height="140"></canvas></div>'));
	updateDoughnutChart(f2);

	// update flot chart
	$('#flot-dashboard-chart').empty();
	updateFlotChart(f2);
    }

    filter = function() {
	setTimeout(doFilter, 50);
    }
    filterByDate = function(arr){
	$('#old').remove();
	$('#inserthere').prepend($('<div id="old"><canvas id="doughnutChart3" height="140"></canvas></div>'));
	updateDoughnutChart(arr);
	$('#flot-dashboard-chart').empty();
	updateFlotChart(arr);
	$('.realtimesection-virality').html(arr.length);
    }

    function days_between(date1, date2) {
	var ONE_DAY = 1000 * 60 * 60 * 24
	    var date1_ms = date1.getTime()
	    var date2_ms = date2.getTime()
	    var difference_ms = Math.abs(date1_ms - date2_ms)
	    return Math.round(difference_ms/ONE_DAY)

    }


    getNewGlobalData = function(list, dead, flag){
	if(dead != 0){
	    var old = dead;
	    var d  = new Date();
	    var size = list.length;
	    var retarr = [];
	    for(var i=0; i<size; i++){
		var temp=list[i]["serverdate"].split("-");
		var temp3=new Date(temp[0],temp[1] - 1,temp[2]);
		var temp1=Date.parse(temp3);
		var temp2=Date.parse(d);
		var firstDate = new Date(temp1);
		var secondDate = new Date(temp2);
		if(old >= days_between(firstDate, secondDate))
		    retarr.push(list[i]);//push all those elements that satisfy the condition.
	    }
	}
	else{
	    retarr = globaldata;
	}
	if(flag == 0){
	    filterByDate(retarr);
	    filter();
	}
	else
	    return retarr;
    }

})();
