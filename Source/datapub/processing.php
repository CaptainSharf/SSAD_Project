<?php

if ($_POST['dummy'] == '1') {

	function getURL($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_URL, $url);
		$tmp = curl_exec($ch);
		curl_close($ch);
		if ($tmp != false) {
			return $tmp;
		} else {

			return "Hello";
		}
	}

	$live_url = "http://digitant.co/piwik/?module=API&method=Live.getLastVisitsDetails&idSite=3&period=month&date=today&format=json&token_auth=fb4a14cb95fa74bc88be3aa21b9a0062";
	$data     = getURL($live_url);
	//echo $data;
	$data_array = json_decode($data, true);
	//print_r($data_array);

	$live_lis                 = [];
	$th_time_lis              = [];
	$time_sp_lis              = [];
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
			$time_spent = 0;
			if (array_key_exists('timeSpent', $page)) {
				$time_spent = $page['timeSpent'];
			}

			if (array_key_exists('pageTitle', $page)) {
				$server_time = $page['serverTimePretty'];
				$th_dict     = array('url' => $page['url'], 'title' => $page['pageTitle'], 'time24' => $server_time);
				array_push($th_time_lis, $th_dict);

				if (array_key_exists($page['pageTitle'], $no_of_times_articles_dic)) {
					$no_of_times_articles_dic[$page['pageTitle']] += 1;
				} else {

					$no_of_times_articles_dic[$page['pageTitle']] = 0;
				}

				$nos      = str_replace(" ", ":", $server_time);
				$nos      = explode(":", $nos)[3];
				$live_dic = array('serverdate' => $dat['serverDate'], 'visittime' => $server_time, 'timespent' => $time_spent, 'visitor' => $dat['visitorType'], 'source' => $dat['referrerTypeName'], 'location' => $dat['continent'], 'title' => $page['pageTitle'], 'url' => $page['url'], 'time' => $nos);
				array_push($live_lis, $live_dic);
			}

			if (array_key_exists('pageTitle', $page)) {
				$time_sp_dic = array('title' => $page['pageTitle'], 'timespent' => $time_spent);
				array_push($time_sp_lis, $time_sp_dic);
			}

		}

	}

	$live_j = json_encode($live_lis);
	$live_j = 'globaldata = '.$live_j.';';
	//echo $live_j;
	$live_file = fopen("js/json_processing/a.js", 'w+') or die("File didn't open");
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
	echo 'Success';
} else {
	echo 'Failure';
}
?>