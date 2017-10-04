<?php
function solution($x, $y, $d){
	return round((($y-$x) )/$d);
}

$x=10; $y=85; $d=30;
echo $output = solution($x, $y, $d);

/* $h = 10;$n = 3;$m = 2; 
/*$h = 15; $n = 5; $m = 2;*

$i=0;
$count = 0;
while($i<$h){
	echo "<br/>";
	$i = $i + $n;
	echo '$i + $n: '.$i;
	echo "<br/>";
	
	if($i > $h){
		echo 'more...exit...: ';		
		echo $count +=  abs(($h - $i) / $n);
		break;
	}
		
	if($i == $h){
		$count++;
		break;
	}	
		
	$i = $i - $m;
	echo '$i - $m: '.$i;
	echo "<br/>";	
		
	$count++;
	echo 'count: '.$count;
	echo "<br/>";	echo "<br/>";	
}
echo "<br/>";echo "<br/>";
echo 'outside count: '.$count;
*/
?>