function httpGetAsync(theUrl, callback)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
            callback(xmlHttp.responseText);
    }
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
}

function abc()
{
	var pqr;
	pqr = httpGetAsync('http://www.digitant.co/piwik/?module=API&method=UserCountry.getContinent&idSite=3&period=day&date=yesterday&format=JSON&token_auth=fb4a14cb95fa74bc88be3aa21b9a0062');
	document.write(pqr);	
}