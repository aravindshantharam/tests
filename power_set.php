<?php
/*
Objective: Given a set of numbers, print all the posssible sub­sets of it including empty set.
e.g.:
 S ={1,2,3}

PS(S): {{ᵩ}, {1}, {2}, {3}, {1, 2}, {1, 3}, {2, 3}, {1, 2, 3}}.
*/

$arr = array(64,27,37);
$subset = array();
$subset[] = array();
$subset[] = $arr;

for($i=0;$i<count($arr);$i++){
	$subset[] = array($arr[$i]);
	
	for($j=$i+1;$j<count($arr);$j++){
		$subset[] = array($arr[$i],$arr[$j]);
	}
}
print_r($subset);
?>