<?php
/*
Find the two numbers with odd occurrences in an unsorted array
e.g.: 
Input: {12, 23, 34, 12, 12, 23, 12, 45}
Output: 34 and 45

Input: {4, 4, 100, 5000, 4, 4, 4, 4, 100, 100}
Output: 100 and 5000

Input: {10, 20}
Output: 10 and 20
*/
$arr = array(12, 23, 34, 12, 12, 23, 12, 45);
$count = 0;
$q=0;


for($i=0;$i<count($arr);$i++){
		for($j=0;$j<count($arr);$j++){
			if($arr[$i] == $arr[$j]){
				$count++;
				$fin[$i][$j] = $arr[$i];
			}
		}
		
		if((count($fin[$i]) % 2) != 0)
			print_r($fin[$i]);
			 
		echo "<br/>";
	}
	
?>