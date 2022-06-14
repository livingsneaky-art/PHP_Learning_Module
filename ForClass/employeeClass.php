<?php
class Person{
    //scope = public - can access by the users or = private - cannot acces by users
    public $name; //property
    private $age; //property
   //-public $age; //property
    public $gender; //property

    //to set value used constractor
    //to use constractor double underscore __
    //if you used constructor there no need to set the variables individually
    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function introduction(){
        return "Hello I am {$this->name} and I am {$this->age} years old";
    }

    //you can use __set if you there's a private property you want to change
    public function __set($variable_name,$value){
        $this->variable_name = $value;
    }

    //to get the private change variable
    public function __get($variable_name){
        return $this->variable_name;
    }
}

//$xd = new Person('Victor', '22', 'M');

//$xd->age = 23;
//$xd->gender = 'F';

// can't access private property
//but theres method can set the private
//by using __set function
//-$xd->age = 23;

//if didn't used constractor
//$xd->name = 'Victor';

//echo $xd->name."<br>";
//echo $xd->age;
//echo $xd->gender;

//inorder to access introduction method
//echo $xd->introduction();

//copy person to employee
//employee has person
//The difference between employee and person is the $job 
//Person class being inherited to class Employee
Class Employee extends Person {
    public $job;

    //construct the class employee 
    public function __construct($job,$name,$age,$gender){
        //construct the class of person
        parent::__construct($name,$age,$gender);
        $this->job = $job;
    }
}

//$xd = new Employee('Cashier', 'Victor', 22, 'M');

//echo $xd->job;
//echo $xd->introduction();
?>