	<?php
/*
A binary gap within a positive integer N is any maximal sequence of consecutive zeros that is 
surrounded by ones at both ends in the binary representation of N.
For example, number 9 has binary representation 1001 and contains a binary gap of length 2. 
The number 529 has binary representation 1000010001 and contains two binary gaps: one of length 4 and one of length 3.
The number 20 has binary representation 10100 and contains one binary gap of length 1.
The number 15 has binary representation 1111 and has no binary gaps.

Write a function:	int solution(int N);

that, given a positive integer N, returns the length of its longest binary gap.
The function should return 0 if N doesn't contain a binary gap.
*/

$num = 529;//2147483647;	//529
echo $res = solution($num);

function solution($num){
	echo $str = (string) decbin($num);
	echo '<br/>';
		
	$arr = array();
	$p=0;
	for($i=0;$i<strlen($str);$i++){
		if($str[$i] == 1){
			$arr[] = $p;
			$p=0;
		}		
		else
			$p++;
	}

	
	echo '*****';
	print_r($arr);
	echo '####';
	//print_r(max($arr));
	

	if(max($arr) == 0)
		return -1;
	else
		return max($arr);
}


?>
