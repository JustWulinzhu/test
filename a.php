<?php
//冒泡排序,从小到大

	function dd($arr){
		echo "<pre>";
			print_r($arr);
		echo "</pre>";
		die;
	}

	$arr = [2, 5, 9, 1, 4];
	$count = count($arr);
	for($i = 1; $i < $count; $i++){
		for($j = 0; $j < $count - $i; $j++){
			if($arr[$j + 1] < $arr[$j]){
				$tmp = $arr[$j + 1];
				$arr[$j + 1] = $arr[$j];
				$arr[$j] = $tmp;
			}
		}
	}

	dd($arr);