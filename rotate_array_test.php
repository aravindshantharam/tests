<?php
/*
'rotate' an array in PHP ?

Like this: 1, 2, 3, 4 -> 2, 3 ,4 ,1
*/

//method 1:
$arr = array('foo' => 'bar', 'baz' => 'qux', 'wibble' => 'wobble');

$keys = array_keys($arr);
$val = $arr[$keys[0]];
unset($arr[$keys[0]]);
$arr[$keys[0]] = $val;

print_r($arr);

//method 2:
// without key preservation
$arr = array('foo' => 'bar', 'baz' => 'qux', 'wibble' => 'wobble');
array_push($arr, array_shift($arr));
print_r($arr);
?>
