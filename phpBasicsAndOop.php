<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/style.css" rel="stylesheet">-->
    </head>
    <body>
<!--JAVASCRIPT HIGH ORDER ARRAYS
-foreach
-filter
-mat
-sum
-every

--> 

<!--**JAVASCRIPT OBJECTS**

<script type="text/javascript">
    //object
    var object = {
        //name is a property
        //it can be float, integer, string, boolean, function
       //-name: 'Victor' 

       //if the property become a function it will become a method
       name: 'Victor',
       //remember method function then a code if you want to used a function inside a object
       //-introduction: function(){
        //`` = tilda  = can used a variable inside string cotations variable = ${this.name}
        //-console.log(`Hello i am ${this.name}`);
       //-}

       //object in another object
       address: {
        city: 'Oroquieta City',
        Street: '18A Enerio'
       }
    }
    //to access property inside object
    //console.log(object.name);

    //to access method function inside object
    //console.log(object.introduction());

    //to access the property object inside object
    //console.log(object.address.city);


</script>--> 

<!--<h1></h1>-->

<!--**JAVASCRIPT FILE**

<script type="text/javascript">

    //simple request file
    //display text to webpage
    //fetch data to txt file
    //basic idea request file in the server


    //function for requesting file from your server
    //XMLHttpRequest() is a class so need to instanciate it with new
   let xml = new XMLHttpRequest();
    
   //request status have 4 kinds
   //not found = 404 and okay status 200

   xml.onreadystatechange = function(){
    //console.log(xml.responseText);
    let h1 = document.querySelector('h1');
    
    //to display in the webpage
    h1.innerHTML = this.responseText;
   }

   //method to opening the file
   //since we only get the data so GET method
   xml.open('GET', 'xad.txt');
   xml.send();

</script>-->


<!---->
<!--if you are using FRAMEWORKS like node.js, BOOTSTRAP most of the time you get and send data through json

<h1></h1>
<script type="text/javascript">

    
   let xml = new XMLHttpRequest();
    

   xml.onreadystatechange = function(){
    let h1 = document.querySelector('h1');
    //json parse
    let data = JSON.parse(this.responseText);
    h1.innerHTML = data.name;
   }

   //everthing in the JSON inclose a string quotation ""
   xml.open('GET', 'sample.json');
   xml.send();

</script>-->

<!---->
<!--PHP is a server side a langauge
while javascript is client side which mean 
is that javascript can be seen in the user view 
while the php is can't be seen in user view-->

<?php
//<?php the same as </script

//to display in webpage
//echo statement
//can't be seen in the user side
//-echo 'Victor Chiong';

//datatypes variables
//implicit = meaning you didn't put datatype before the variable name
//can be string, float, integer, boolean, and array

//array in php is different in the javascript
//-$variable_name = array('Values', 123);

//to access Values value in the array
//-echo $variable_name[0];

//in javascript array
//-var variable = ["hello", 23];


//everytime declare a variable need to have a dollar sign = $

//To echo name
//-$name = 'Victor';
//-echo $name;

//to combine a variable and statement put a dot before and after string quotation marks
//-$name = 'Victor';
//-echo "Hello ".$name." Nice to meet you";

//another way to combile variable and statement
//-$name = 'Victor';
//-echo "Hello I am {$name} Nice to meet you";

//Constants
//by using define

//Looping through an Indexed Array
/*-$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++){
    echo $cars[$x];
    echo "<br>";
}*/

//multi dimentional array, multiple array inside an array
/*-$name = array(
    array('hello', 123), // first index
    array('Hi', 24) // 2nd index
);
echo $name[0][0];*/

//functions
//functions in php is very identical in javascript
/*function functionName(){
    //-echo 'My name';
    return 'Hello';
}
//-functionName();
//another way around
echo functionName();*/

//Loops
/*$x=0;

//keep running the code until it reaches certain condition
while($x < 5){
    //echo 'Hello World';

    //in echo you can write html elements
    //echo is like a innerHTML
    echo '<h5>Hello World</5>';
    $x++;
}*/

//do while loop
/*$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
}while($x <= 5);*/

//for loop
/*for($x=0; $x <=10; $x++){
    echo "The number is: $x <br>";
}*/

//for each loop
/*$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value){
    echo "$value <br>";
}*/


//for each loop is basically accessing a value until the end
//sample

/*$array = array('volvo', 'bmw', 'xd');

foreach($array as $car){
    echo $car."<br>";
}*/

//conditional statements
/*$x = true;
// you can used numbers if 0=false or number higher than 0 = true'
$x = 0; //false
$x = 15; //true

if($x){ //if(!$x)
    echo "I am true";
}else if(conditions){

}else if(another conditions){

}*/

//switch statment
/*$x = 1;

switch($x){
    case 1:
        echo 'yes';
        break;
    case 2:
        echo 'no';
        break;
    default:
        echo 'what';
        break;
}*/


//POST method if you want to send and modify data while GET method is just to diplay the data
//POST method is much more secure than GET method because it can be seen in the URL in ethernet

//to check if the submit is click
//in order to access the array POST you need to put it in bracket for indexing
/*-if(isset($_POST['submit'])){
    //to know if it is click
    //echo 'i am click';

    $name = $_POST['name'];
    //to fecth in POST method
    echo $name;
}*/

//sending data through GET
//?name=hello&course=bsit in the URL
/*-$name = $_GET['name'];
$course = $_GET['course'];

echo $name;
echo $course;*/

//the problem in structural programming is prone to spaghetti code
//like this
/*-$student_name ='student';
$age = 21;
$sideLineJob = 'cashier';*/ 

//object oriented programming
//lets try a simple class
//classes and object

/*class Person{
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

$xd = new Employee('Cashier', 'Victor', 22, 'M');

//echo $xd->job;
echo $xd->introduction();*/

//INCLUDE STATEMENT
//copying file by using include statement
//very useful if you want some of your page repeating the function or design
include 'ForClass/employeeClass.php';
include 'ForClass/htmlForClass.html';

$xd = new Employee('Cashier', 'Victor', 22, 'M');
echo $xd->introduction();
?>
<!--action where you send the data
POST to send data and modify data in the database
name is the important to get data from php and fetching data from php
POST give data is like an array
<form action='' method='POST'>
    <input type="text" name="name" value="">
    <input type="submit" name="submit" value="submit">
</form>-->
    </body>
</html>