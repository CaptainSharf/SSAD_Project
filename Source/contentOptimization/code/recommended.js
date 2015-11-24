    function guid() {
      function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
          .toString(16)
          .substring(1);
      }
      return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
        s4() + '-' + s4() + s4() + s4();
    }
    var FINAL = [];
    if(!Cookies.get('v_id')) {
        var visitorId = guid();
        Cookies.set('v_id', visitorId, {expires: 365});
    }
    console.log(Cookies.get('v_id'));
    var v_id = Cookies.get('v_id');
    document.getElementById('vid1').value = v_id;
    var tag_array = [];
     jQuery("a[rel$='tag']").each(function(){tag_array.push(this.innerHTML)});
    for(var i = 0; i< tag_array.length;i++){
        tag_array[i]  = tag_array[i].toLowerCase();}
    var ggg=tag_array.filter(function(itm,i,tag_array){
        return i==tag_array.indexOf(itm);
    });
    var tag_str = "";
    var max_len = ggg.length
    for(var i=0;i<max_len;i++){
        if(i+1 != max_len){
            tag_str = tag_str + ggg[i] + ", ";}
        else
            tag_str = tag_str + ggg[i];
    }
    console.log(tag_str);
    jQuery.when(jQuery.ajax({
        url: 'http://www.digitant.co/contentOptimization/code/php/post_data_processing.php',
            type: 'POST',
        data: {
            domain_id: location.hostname,
            visitor_id: v_id,
            url: window.location.href,
            tag_string: tag_str,
            pageTitle: document.title,
        },
        success: function(response) {

        },
        failure: function(response) {

        }
      })).done(function(a1){
    //--------//
    jQuery.when(jQuery.ajax({
        url:
    'http://www.digitant.co/contentOptimization/code/php/pageRank.php',
        type:'POST',
        data: {
            tag_string: tag_str,
        },
        success: function(response) {//console.log(response);
    },
        failure: function(response) {console.log(response);
        },
    })).done(function(a2){
        jQuery.ajax({
        url:
    'http://www.digitant.co/contentOptimization/code/php/contentoptimiser.php',
        type:'POST',
        data: {
            visitor_id: v_id,
        },
        success: function(response) {
            //console.log(response);
            //FINAL = response;
            //console.log(response);
                        },
        failure: function(response) {console.log(response);

        },
    });

    });

    jQuery.ajax({
        url:
    'http://www.digitant.co/contentOptimization/code/php/recentlyViewed.php',
        type:'POST',
        data: {
            visitor_id: v_id,
            domain_id: location.hostname,
        },
        success: function(response) {
            //console.log(response);
        },
        failure: function(response) {
            console.log(response);
        },
    });
    //------//
    });