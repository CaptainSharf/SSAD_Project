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
	var len=timespentdata.length;
	for (var i=0;i<len;i++){
		if(Number(timespentdata[i].timespent) >= 5)
			count+=1;
		if(Number(timespentdata[i].timespent) > 0){
			count2+=1;
			totaltime += Number(timespentdata[i].timespent);
			//console.log(totaltime);
			//console.log(timespentdata[i].timespent)
		}
	}
	var read_rate_ans=count*100/len;
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
	scope.sections = [{
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
	}, {
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
	    name: 'direct'
	}, {
	    label: 'Links',
	    name: 'links'
	}, {
	    label: 'Search',
	    name: 'search'
	}]
	}, {
	    title: 'Platform',
	    type: 'platform',
	    items: [{
		label: 'Desktop',
		name: 'desktop'
	    }, {
		label: 'Mobile Web',
		name: 'mobileweb'
	    }, {
		label: 'Mobile App',
		name: 'mobileapp'
	    }, {
		label: 'Tablet',
		name: 'tablet'
	    }]
	}, {
	    title: 'Location',
	    type: 'location',
	    items: [{
		label: 'North America',
		name: 'northamerica'
	    }, {
		label: 'South America',
		name: 'southamerica'
	    }, {
		label: 'Africa',
		name: 'africa'
	    }, {
		label: 'Asia',
		name: 'asia'
	    }, {
		label: 'Europe',
		name: 'europe'
	    }, {
		label: 'Australia',
		name: 'australia'
	    }]
	}];
    }]);

    app.controller('TrendingStoriesController', ['$scope', function(scope) {
	/////////////////////
	scope.popular = [];
	len = globaldata.length;
	for(var i = 0; i < len; i++){
	    var len2 = scope.popular.length;
	    var index = -1;
	    for(var j = 0; j < len2; j++){
		if(scope.popular[j].title == globaldata[i].title){
		    index = j;
		    break;
		}
	    }
	    if(index!=-1){
		scope.popular[j].data += 1;
	    }
	    else{
		scope.popular.push({
		    title: globaldata[i].title,
		    author: "rohan",
		    data: 1
		}
		);
	    }
	}
	scope.popular.sort(function(a,b) { 
		return b.data - a.data 
	});
	//here scpe.poplr
	/////////////////////
    }]);

    app.controller('TopFilterController', ['$scope', function(scope) {

/*	var authors = [];

	$.each(articles, function(i, item) {
	    if (authors.indexOf(item.author) == -1) {
		authors.push(item.author);
	    }
	});

	scope.items = [{
	    label: 'Author',
	name: 'author',
	options: authors
	}, {
	    label: 'Section',
	name: 'section',
	options: ['Section 1', 'Section 2', 'Section 3', 'Section 4', 'Section 5', 'Section 6', 'Section 7']  //get list of sections
	}, {
	    label: 'Category',
	name: 'category',
	// if condition ??
	options: ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5', 'Category 6', 'Category 7'] //get list of categories for each section
	}]
   */ }]);

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

	$.each(globaldata, function(i, item) {
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

	// update real time sections
	// CHANGE THE RANDOM NUMBERS //
	$('.realtimesection-visits').html(filtered.length);
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

	// update flot chart
	$('#flot-dashboard-chart').empty();
	updateMainAreaChart(filtered);
    }

    filter = function() {
	setTimeout(doFilter, 50);
    }

    /* 
     * Comment the hard code below here
     *
     * */
    generate = function() {
	var visitor = ['new', 'returning', 'loyal', 'influencers'];
	var source = ['internal', 'social', 'direct', 'links', 'search'];
	var platform = ['desktop', 'mobileweb', 'mobileapp', 'tablet'];
	var location = ['northamerica', 'southamerica', 'africa', 'asia', 'europe', 'australia'];

	var rows = [];
	var total = 14356;
	var tags = [];

	$.each(articles, function(i, item) {
	    $.each(item.tags, function(i, tag) {
		if (tags.indexOf(tag) == -1) {
		    tags.push(tag);
		}
	    })
	});

	for (var i = 0; i < total; i++) {


	    var article = articles[parseInt(articles.length * Math.random())];

	    if (i < 2000) {
		article = articles[6];
	    }

	    if (i > 2000 && i < 4000) {
		article = articles[7];
	    }
	    var item = {
		visitor: visitor[parseInt(visitor.length * Math.random())],
		source: source[parseInt(source.length * Math.random())],
		platform: platform[parseInt(platform.length * Math.random())],
		location: location[parseInt(location.length * Math.random())],
		articleId: article.id,
		externalTag: tags[parseInt(tags.length * Math.random())],
		internalTag: article.tags[parseInt(article.tags.length * Math.random())],
		time: i < 2000 ? 12 : i < 4000 ? 17 : parseInt(Math.random() * 24)
	    };
	    rows.push(item);
	}
	console.log(JSON.stringify(rows));
    }
})();
