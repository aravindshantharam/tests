<?php
abstract class Base {
    function __construct() {
        echo 'Base __construct<br/>';
    }
}

class Child extends Base {
    function qwer() {
        echo 'Child __construct here.<br/>';
    }
}

$c = new Child();  
$c->qwer();


class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling static method '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodTest;
$obj->runTest('in object context');

MethodTest::runTest('in static context'); 
echo "\n";echo "\n";echo "\n";


class PropertyTest
{
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        //$this->data[$name] = $value;
    }
}

echo "<br/>";echo "<br/>";
$obj = new PropertyTest;
$obj->a = 'dsfghm';

echo "<br/>";

class Objecta{
	
	public function __set($name,$value){
       
		echo 'qwerty';
    }
}

$Object = new Objecta;
$Object->a  = 'boom';
var_dump($Object); 

?>