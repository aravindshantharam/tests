<?php 
class person {

    public $LastName;
    public $FirstName;
    public $BirthDate;

    protected function write_info(){
		echo 'protected...';
	}
}

final class employee extends person{

    public $EmployeeNumber;
    public $DateHired;

    function write_info(){
        //sql codes here
        echo "Writing ". $this->LastName . "'s info to emloyee dbase table <br>";   
    }
	
}

final class student extends person{

    public $StudentNumber;
    public $CourseName;

    function write_info(){
        //sql codes here
        echo "Writing ". $this->LastName . "'s info to student dbase table <br>";
    }
}

///----------
$personA = new employee;
$personB = new student;

$personA->FirstName="Joe";
$personA->LastName="Sbody";

$personB->FirstName="Ben";
$personB->LastName="Dover";

$personA->write_info();
// Writing Sbody's info to emloyee dbase table
$personB->write_info();
// Writing Dover's info to student dbase table 
?>