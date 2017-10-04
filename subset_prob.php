<?php
/*
if array = {1,2,3,4,5,6} and sum = 10; find all possible subsets which would add to a total = sum.
e.g. subset1={1,2,3,4}, subset2 = {1,4,5} and so on...
*/
$arr = array(1,2,5,4,6,3);
$sum = 10;

//subset_sum([11.96,1,15.04,7.8,20,10,11.13,9,11,1.07,8.04,9], 20);
subset_sum($arr, $sum);


function subset_sum($arr,$sum,$c = array()){
	if($sum<0)
		return;
	if($sum!=0&&count($arr)==0)
		return;
	if($sum!=0){
		
		foreach($arr as $key=>$value){					
			unset($arr[$key]);			
			subset_sum($arr,$sum-$value,array_merge($c,array($value)));
		}
	}
	else{
		print_r($c);echo '<br/>';
	}
}

?>