<?php
class StaticClass
{
    public static $staticValue = 'foo';

    public static function staticValue() {
        //return self::$my_static;
		echo 'function call';
    }
}
echo StaticClass::$staticValue;
echo "<br/>";echo "<br/>";

class TestClass{
    public $public='PublicVal';
    protected $protected='ProtectedVal';
    private $private='PrivateVal';
    
    function myfunc() {
        return 'func';
    }
    
    function iterateVisible(){
		print_r($this);
		/*
        foreach($this as $key => $value) {
           print "$key => $value\n";
       }
	   */
    }
}

$obj=new TestClass();
$obj->iterateVisible(); 
echo "<br/>";echo "<br/>";


class BaseClass{
    function getReturnType() {
        return 'BaseClass';
    }
}
trait traitSample {
    function getReturnType() {
        echo "TraitSample:";
        echo parent::getReturnType();
    }    
}

class Class1 extends BaseClass {
    use traitSample;   
}

$obj1 = new Class1();
$obj1->getReturnType();//TraitSample:BaseClass
echo "<br/>";echo "<br/>";

class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
	
	public function hell() {
        echo '....hell!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld{
		SayWorld::sayHello as talk;
		SayWorld::hell as qaz;
	}
	
	function qwe(){
		$this->hell();
	}
	
}

$o = new MyHelloWorld();
$o->sayHello();
$o->qwe();
echo "<br/>";echo "<br/>";

trait A {
    function calc($v) {
        return $v+1;
    }
}

class MyClass {
    use A{ 
		calc as ddd;
	}

    function calc($v) {
        $v++;
        return $this->ddd($v);
    }
}

print (new MyClass())->calc(2); // should print 4
echo "<br/>";echo "<br/>";


$a = '1';
$b = &$a;
$b = "2$b";
echo $a;//.", ".$b;

echo "<br/>";echo "<br/>";
echo $i = 012;
echo $i / 4;
echo "<br/>";echo "<br/>";

function doSomething( &$arg )
{
    $return = $arg;
    $arg += 1;
    return $return;
}

$a = 3;
$b = doSomething( $a );
echo $a;
echo "----";
echo $b;
echo "<br/>";echo "<br/>";

$text = 'Mike';
$text[4] = 'A';
$text[5] = 'L';
$text[10] = 'Sam';
var_dump($text);
echo "<br/>";echo "<br/>";

$x = 5;
echo $x;
echo "&lt;br /&gt;";
echo $x+++$x++;
echo "&lt;br /&gt;";
echo $x;

echo "&lt;br /&gt;";
echo $x---$x--;
echo "&lt;br /&gt;";

echo $x;
echo "<br/>";echo "<br/>";

class OtherClass
{
    public static $my_static = 1;

    public static function doubleColon() {       
        return self::$my_static *5;
    }
}

$classname = 'OtherClass';
echo $classname::doubleColon(); // As of PHP 5.3.0
echo "<br/>";echo "<br/>";

class SomeClass{
	protected static $_someMember = 1;

	

	public static function getSomethingStatic(){
		return self::$_someMember * 5; // here’s the catch
		
	}
}
echo SomeClass::getSomethingStatic();
echo "<br/>";echo "<br/>";

var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123);

?>