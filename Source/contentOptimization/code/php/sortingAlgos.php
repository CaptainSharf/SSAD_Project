<?php

//Insert Sorting
function insertSort(array $arr) {
	$count = count($arr);
	if ($count <= 1) {
		return $arr;
	}

	for ($i = 1; $i < $count; $i++) {
		$cur_val = $arr[$i];
		$j = $i - 1;
		
		while (isset($arr[$j]) && $arr[$j] > $cur_val) {
			$arr[$j + 1] = $arr[$j];
			$arr[$j] = $cur_val;
			$j--;
		}
	}
	
	return $arr;
}

//Merge Sorting
function mergeSort(array $arr) {
	$count = count($arr);
	if ($count <= 1) {
		return $arr;
	}

	$left  = array_slice($arr, 0, (int)($count/2));
	$right = array_slice($arr, (int)($count/2));
	
	$left = mergeSort($left);
	$right = mergeSort($right);

	return merge($left, $right);
}

function merge(array $left, array $right) {
	$ret = array();
	while (count($left) > 0 && count($right) > 0) {
		if ($left[0] < $right[0]) {
			array_push($ret, array_shift($left));
		} else {
			array_push($ret, array_shift($right));
		}
	}
	
	array_splice($ret, count($ret), 0, $left);
	array_splice($ret, count($ret), 0, $right);
	
	return $ret;
}

//Quick Sorting
function quickSort(array $arr) {
	$count= count($arr);  
	if ($count <= 1) {
		return $arr;
	}

	$first_val = $arr[0];
	$left_arr = array();
	$right_arr = array();
	
	for ($i = 1; $i < $count; $i++) {
		if ($arr[$i] <= $first_val) {
			$left_arr[] = $arr[$i];
		} else {
			$right_arr[] = $arr[$i];
		}
	}

	$left_arr = quickSort($left_arr);
	$right_arr = quickSort($right_arr);

	return array_merge($left_arr, array($first_val), $right_arr);
}



// Usage

//echo "<br>", "Insert Sorting - 1, 88, 5, 77, 99, 98, 97, 55, 56, 52, 59, 37", "<br>";
//$arr = array(1, 88, 5, 77, 99, 98, 97, 55, 56, 52, 59, 37);
//$reuslt = insertSort($arr);
//print_r($reuslt);

//echo "<br>", "Merge Sorting - 6, 5, 3, 1, 8, 7, 9, 2, 4", "<br>";
//$arr = array(6, 5, 3, 1, 8, 7, 9, 2, 4);
//$reuslt = mergeSort($arr);
//print_r($reuslt);

//echo "<br>", "Quick Sorting - 1, 99, 87, 2, 5, 9, 1999, 899, 777", "<br>";
//$arr = array(1, 99, 87, 2, 5, 9, 1999, 899, 777); 
//$reuslt = quickSort($arr);
//print_r($reuslt);

?>
