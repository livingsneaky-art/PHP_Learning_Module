<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        //BASIC CONCEPT OF DATABASES
        //SQL is a language will be used to communicate to the database ,SQL Standard Query Langauge SQL compose of query's
        //vendor for the database will be using is mySQL
        //the database will be using is relational database - form like a table
        
        //QUERYS' instructions that will be send to database
        //example of querys'
        //add data, select data, creation of table 

        //if you want to manually create the database
        //to create database in localhost/phpmyadmin => SQL
        //to QUERY
        //CREATE DATABASE database_name;

        //to create table in the database created
        //to QUERY
        //column_name datatype(size) => to create a column in table database
        /*CREATE TABLE my_table(
            id int(12), //NOT NULL AUTO_INCREMENT
            username varchar(50), //varchar is a string variable
            password varchar(50) //varchar is a string variable
        );*/

        //the first you will learn about mysql and php is the connection
        //there are 2 methods you can used to apply php mysql
        // 1 way OBJECT ORIENTED you can used functions mysql
        //-$connect = new mysqli(); //connection to the database

        //another way/method is PROCEDURAL
        //OOP method and PROCEDURAL is pretty the same but OOP is much more structural and easy to understand
       //-$conn = mysqli_connect("localhost","root","","database_name");
       //-$sql = "INSERT INTO my_table VALUES(2, 'username1', 'password1')";
       //-mysqli_query($conn, $sql);

       //$connect = new mysqli(servername,username,password,databasename);
       ////this will be change if you hosting your server
       //-$conn = new mysqli("localhost","root","","database_name");
       //simple insertion of data
       //syntax of insertion data 
       /*INSERT INTO table_name VALUES(1, 'username', 'password'); //insert a simple row of data in the table*/

       //a query
        //-$sql = "INSERT INTO my_table VALUES(1, 'username', 'password')";
        //to insert the data need to send the query to database
        //will be using a object that used to intanceciate mysqli 
        //to access the object ->

        //-$conn->query($sql); //the same as $conn->query("INSERT INTO my_table VALUES(1, 'username', 'password')");

        //thats how to send data on database
        //first is you form a connection 
        //then you try send a query to database

        //INSERT DATA TO DATABASE
        /*$conn = new mysqli("localhost","root","","database_name");
        
        //to check if submit button has been clicked
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            //send the username and password from the form to database
            //everytime you insert value you need to specify the column to insert if you dont want just leave a '' blank value
            $sql = "INSERT INTO my_table VALUES('','$username','$password')";
            $conn->query($sql);
        }*/

        //RETRIEVING AND DISPLAYING DATA IN DATABSE TO WEBPAGE
        //$conn = new mysqli("localhost","root","","database_name");

        //inorder to collect data on database you need to SELECT columns FROM table_name conditions
        //SELECT * FROM table_name -> * mean select of data on the table
        //$sql = "SELECT * FROM my_table";
        //just sending a query not receving in order to receive you need to put variable $result or any variable name
        //$conn->query($sql);
        //$result = $conn->query($sql);
        
        //to fetch the data it returns an associative array, in order to get the you need to pur a variable example for $row
        //$result->fetch_assoc();
        

        //display data
        //echo "<h1>Username: {$row['username']} Password: {$row['password']}</h1>";
        //use loop to show all data
        //while there still a data it will display until no left data
        /*while($row = $result->fetch_assoc()){
            echo "<h1>Username: {$row['username']} Password: {$row['password']}</h1>";
        }*/
        
        
        
    ?>

    
    <!--empty action for self reference
    <form action='' method='POST'>
        <input type="text" name="username" value="">
        <input type="text" name="password" value="">
        <input type="submit" name="submit" value="Submit">
    </form>-->

    <?php
        

        //1 way
        //session_start();
        //$_SESSION['username'] = $username;
        //$_SESSION['password'] = $password;

        //another way
        //done the collecting the data and saving it to the database
        /*if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = new mysqli("localhost", "root", "", "database_name");
            $sql = "INSERT INTO my_table VALUES ('3', '$username', '$password')";
            $conn->query($sql);
        }*/
       

        //object oriented mysqli that's an object
        //using class for the mysqli and function method to display
        //for clean structure of codes
        class MyDB extends mysqli{
            public $servername;
            public $username;
            public $password;
            public $db_name;

            public function __construct($servername, $username, $password, $db_name){
                parent::__construct($servername, $username, $password, $db_name);
                $this->servername = $servername;
                $this->username = $username;
                $this->password = $password;
                $this->db_name = $db_name;
            }

            public function server_Details(){
                echo "<h1>Server name is: {$this->servername}</h1><br>";
                echo "<h1>Server name is: {$this->username}</h1><br>";
                echo "<h1>Server name is: {$this->password}</h1><br>";
                echo "<h1>Server name is: {$this->db_name}</h1><br>";
            }
            public function displayMyTable(){
                $conn = new MyDB("localhost", "root", "", "database_name");
                $sql = "SELECT * FROM my_table";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                echo "<h1>Username: {$row['username']} Password: {$row['password']}</h1><br>";
                }
            }
        }
        $conn = new MyDB("localhost", "root", "", "database_name");
        
        $conn->displayMyTable();
        //$conn->server_Details();
        //$sql = "INSERT INTO my_table VALUES(1, 'hello', 'ryan')";
        //$conn->query($sql);
        
    ?>
    </body>
</html>