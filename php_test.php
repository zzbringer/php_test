<?php
	$arr = array(1,3,4,5,6,8);
	$k = 6;
	
	if ($k % count($arr) == 0){
	  print_r($arr);
	}
	else{
	while ($k > 0){
	  $temp = array_shift($arr);
	  array_push($arr,$temp);
	  $k--;
	}
	print_r($arr);
	}
?>