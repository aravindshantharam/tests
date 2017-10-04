<?php
$A = array(0, 1, 3, -2, 0, 1, 0, -3, 2, 3);
$depth = 0;
$P = 0; $Q = -1; $R = -1;

for ($i = 1; $i < count($A); $i++){
	if ($Q < 0 && $A[$i] >= $A[$i-1]) 
		$Q = $i-1;

	if (($Q >= 0 && $R < 0) && ($A[$i] <= $A[$i-1] || $i + 1 == count($A)))	{
		if ($A[$i] <= $A[$i-1])
			$R = $i - 1;
		else
			$R = $i;
		
		echo $P."  ".$Q."  ".$R;
		echo '<br/>	';
		
		$depth = max($depth, min($A[$P]-$A[$Q], $A[$R]-$A[$Q]));
		$P = $i - 1; 
		$Q = $R = -1;
	}
}
if ($depth == 0) 
	$depth = -1;

echo "Depth: ".$depth;

?>