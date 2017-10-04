<?php
/*
Write a function:

function solution($A, $K);
that, given a zero-indexed array A consisting of N integers and an integer K, returns the array A rotated K times.

For example, given array A = [3, 8, 9, 7, 6] and K = 2, the function should return [9, 7, 6, 3, 8].
*/

$arr = array(3,8,9,7,6); 
print_r($arr);
echo '<br/>';echo '<br/>';
$k = 2;
$res = solution($arr, $k);
echo '<br/>';echo '<br/>';
print_r($res);

function solution($arr, $k){
	for($i=0;$i<$k;$i++){
		array_push($arr, array_shift($arr));
		print_r($arr);
		echo '<br/>';
	}
	return $arr;
}

?>
