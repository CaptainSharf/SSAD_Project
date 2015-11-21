<script type = "text/javascript">

var tag_array = []; jQuery("a[rel$='tag']").each(function(){tag_array.push(this.innerHTML)});
console.log(tag_array);
var tag_json  = JSON.stringify(tag_array);
console.log(tag_json);

jQuery.ajax({
    url: 'http://www.digitant.co/c_optimizer/get_raw_data.php', // the url I want to post to.
        type: 'POST',
    data: {
        tag_string: tag_json,
        title: document.getElementsByTagName("title")[0].innerHTML,
    },
    success: function(response) {
        console.log(response);
    },
    failure: function(response) {
        console.log(response);
    }
});