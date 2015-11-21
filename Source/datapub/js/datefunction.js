/* this is the limit on the number of days of the filter.you can check the functionality of the code by changing this value */
old=2;


/*this function is to calculate the number of days between any two given dates*/
function days_between(date1, date2) {
    
    var ONE_DAY = 1000 * 60 * 60 * 24
    var date1_ms = date1.getTime()
    var date2_ms = date2.getTime()
    var difference_ms = Math.abs(date1_ms - date2_ms)
    return Math.round(difference_ms/ONE_DAY)

}


/* tempdata is just a list of dictionaries.It contains an index number for checking "a" and the datetime attribute here is "time24".time can be in any format but should contain year and also it should be a datetime string */
tempdata=[{"a":1,"time24":"Saturday 21 November 2015"},{"a":2,"time24":"October 13, 2014 11:13:00"},{"a":3,"time24":"Thursday 19 November 2015"}];


var d = new Date();
var i=0;
var size=tempdata.length;


/*retarr is the required final array*/
var retarr=[];
for(i=0;i<size;i++)
{
    var temp1=Date.parse(tempdata[i]["time24"]);
    var temp2=Date.parse(d);
    var firstDate = new Date(temp1);
	var secondDate = new Date(temp2);
    if(old >= days_between(firstDate, secondDate))
        retarr.push(tempdata[i]);//push all those elements that satisfy the condition.
}



/*This part is just for checking*/
 var k=0;
 var size1=retarr.length;
 for(k=0;k<size1;k++)
 {
     window.alert(retarr[k]["a"]);
 }

