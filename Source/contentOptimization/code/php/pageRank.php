<?php



//echo "<br>", "Merge Sorting - 6, 5, 3, 1, 8, 7, 9, 2, 4", "<br>";
//$arr = array(6, 5, 3, 1, 8, 7, 9, 2, 4);
//$reuslt = mergeSort($arr);
//print_r($reuslt);

//echo "<br>", "Quick Sorting - 1, 99, 87, 2, 5, 9, 1999, 899, 777", "<br>";
//$arr = array(1, 99, 87, 2, 5, 9, 1999, 899, 777); 
//$reuslt = quickSort($arr);
//print_r($reuslt);


//functions for finding base score

function writeMsg() {
    echo "Hello world!";
}

function returnBasePriority($date_added,$page_views){
	
	$current_time=time();
	echo "$current_time";
	$seconds= (float)$current_time-1134028003;
    $seconds/=45000;
	
	$temp=log(max($page_views,1),10);
	
	$ans=round($temp+$seconds,7);
		
	echo "$ans";
	
}
//	$temp=strtotime("2008:08:07 18:11:11");
//echo "$temp";

function makeDictionary(){
	$file_handle = fopen("test.json", "r");
	
	while (!feof($file_handle)) {
	
	$line_of_text = fgets($file_handle);
	$json = json_decode($line_of_text, true);
	
	//	print $json['key']. "<BR>";
	}

fclose($file_handle);

	//return $json;
}

$json = array("Peter"=>"2008:08:07 18:11:11", "Ben"=>"2008:08:07 18:11:12", "Joe"=>"2008:08:07 18:11:13");

function func($arr,$temp){
		foreach($arr as $key)
		{
			if(!strcmp($key,$temp))
				return 1;
		}
		return 0;
}

function makeHashTable(){
	
	$arr=[];
	$x=[["url" => "a","time" => "2008:08:07 18:11:11"],["url" => "b","time" => "2008:08:07 18:11:17"],["url" => "b","time" => "2008:08:07 18:11:13"]];
	foreach($x as $temp)
	{
		if(!func($arr,$temp["url"]))
			array_push($arr,$temp["url"]);
	}
	/*foreach($arr as $temp)
	{
		print $temp;
	}*/
	$retarr=[];
	foreach($arr as $key)
	{
		$i=0;
		foreach($x as $temp1)
		{
			if(!strcmp($temp1["url"],$key))
			{
				if($i==0)
				{
					$temp=$temp1["time"];
					$i++;
				}
				else
				{
					if(strtotime($temp)>strtotime($temp1["time"]))
						$temp= $temp1["time"];
				}
			}
		}
		$t=[$key => $temp];
		array_push($retarr,$t);
		print $t[$key];
	}

	/*$t=[$key => $temp];
	array_push($retarr,$t);
	*/
}

makeHashTable();


?> 	

