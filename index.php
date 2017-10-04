<?php

/*
   1 2  3  4
  12 13 14 5
  11 16 15 6
  10 9  8  7
*/
/**
 * Creates a 2D array with the given dimensions,
 * whose elements are numbers in increasing order
 * rendered in a 'spiral' pattern.
 */
function createSpiral($w, $h) {
   if ($w <= 0 || $h <= 0) return FALSE;
   
   $ar   = Array();
   $used = Array();
   
   // Establish grid
   for ($j = 0; $j < $h; $j++) {
      $ar[$j] = Array();
      for ($i = 0; $i < $w; $i++)
          $ar[$j][$i]   = '-';
   }
   //print_r($ar);echo "<br>\n";echo "<br>\n";
   
   // Establish 'used' grid that's one bigger in each dimension
   for ($j = -1; $j <= $h; $j++) {
      $used[$j] = Array();
      for ($i = -1; $i <= $w; $i++) {
          if ($i == -1 || $i == $w || $j == -1 || $j == $h)
             $used[$j][$i] = true;
          else
             $used[$j][$i] = false;
      }
   }
   //print_r($used);echo "<br>\n";echo "<br>\n";echo 'end ';echo "<br>\n";echo "<br>\n";
   
   
   // Fill grid with spiral
   $n = 0; //array value to be filled
   $i = 0;
   $j = 0;
   $direction = 0; // 0 - right, 1 - down, 2 - left, 3 - up
   while (true) {
      $ar[$j][$i]   = $n++;
      $used[$j][$i] = true;
      
      // Advance
      switch ($direction) {
         case 0:
            $i++; // go right			
            if ($used[$j][$i]) { // got to RHS
               $i--; $j++; // go back left, then down
               $direction = 1;
            }
			//echo $flag.'-'. $j.'--'.$i;			 echo "<br/>"; echo "<br/>";
            break;
        case 1:
           $j++; // go down
           if ($used[$j][$i]) { // got to bottom
               $j--; $i--; // go back up, then left
               $direction = 2;
            }
            break;
         case 2:
            $i--; // go left
            if ($used[$j][$i]) { // got to LHS
               $i++; $j--; // go back left, then up
               $direction = 3;
            }
            break;
         case 3:
            $j--; // go up
            if ($used[$j][$i]) { // got to top
               $j++; $i++; // go back down, then right
               $direction = 0;
            }
            break;
       }
       
       // if the new position is in use, we're done!
       if ($used[$j][$i])
           return $ar;
   }
}

/**
 * Assumes the input is a 2D array.
 */
function print2DGrid($array) {
   foreach ($array as $row) {
       foreach ($row as $col) {
          print sprintf("% 2d ", $col);		 
		  //print_r ($col);		 
       }
       echo "<br/>";
   }
   echo "<br/>";echo "<br/>";
   print_r($array);
   
}

$width  = 4;
$height = 4;

print2DGrid(createSpiral($width, $height));
echo "<br/>";echo "<br/>";echo "<br/>";

$j=0;
for($i=0;$i<100;$i++){
	$j = $j++;
}
echo $j;
echo "<br/>";


/* right tringle *
for ($i=1; $i<=10; $i++) {  
 for($j=1; $j<=$i; $j++) {  
 echo " * ";  
  } 
echo "<br>\n";
}
echo "<br>\n";echo "<br>\n";
*/


/* simple triangle *
for ($i=9; $i>=1; $i--) {  
	for($j=1; $j<=$i; $j++) {  
		echo '&nbsp;';  
	}
	$j--;
	for ($k=1; $k<=(10-$j); $k++) {  
		echo " # ";   
	}  
echo "<br>\n";
}
echo "<br>\n";echo "<br>\n";
*/

/*   A
	ABA
   ABCBA
  ABCDCBA
*
$arr = array('a','b','c','d');
for($t=0;$t<count($arr);$t++){
	$tarr[] = $arr[$t];
	
	if(count($tarr) > 1){
		$revarr = array_reverse($tarr);
		$shift = array_shift($revarr);
		
		foreach($tarr as $qw => $er)
			echo $er;
		
		foreach($revarr as $reva => $rvarr)
			echo $rvarr;
	}
	else
		echo $arr[$t];
	
	
	echo "<br>\n";
}
echo "<br>\n";echo "<br>\n";
*/

/* fizzbuzz *
for($az=1;$az<50;$az++){
	/*
	echo $az . '--';
	$out = '';
	if($az%3 == 0)
		$out .= 'fizz';	
	if($az%5 == 0)
		$out .= 'buzz';
	
	echo $out;
	echo "<br>\n";
	*
	
	$qw = $az%15 ? $az%5 ? $az%3 ? $az : 'Fizz' : 'Buzz' : 'FizzBuzz';
	echo $qw;

	echo "<br>\n";
}
*/


?>
<html>
<head>
<script>
function submitClick(){
	alert('submitClick');
}
function outerbutton(){
	alert('outerbutton');
}
function outerbutton(){
	alert('outerbutton');
}
function outerbutton(){
	alert('outerbutton');
}
function maindiv(){
	alert('main div');
}
function bodyclk(){
	alert('body click');
}
function insidediv(){
	alert('inside DIV');
}
function insidebutton(){
	alert('inside BUTTOn');
}
</script>
</head>
<body onclick='bodyclk();return false;'>
<div onclick='maindiv();return false;'>
Main DIV.
<div onclick='insidediv();return false;'>inside div <button onclick='insidebutton();return false;'>Inside Button</button></div>
<button onclick='outerbutton();return false;'>Outer Button</button>
<input type='submit' value='submit' onclick='submitClick();return false;' />
</div>
</body>
</html>
