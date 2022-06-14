<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/style.css" rel="stylesheet">-->
    </head>
    <body>

       <!-- <form action='' method='POST'>
            <label for="">Name</label>
            <input type="text" name="name" value="" required>
            <label for="">Destination</label>
            <input type="text" name="destination" value="" required>
            <label for="">Bus Number</label>
            <input type="number" name="bus_no" value="" required>
            <input type="submit" name="submit" value="Book Ticket">
        </form>-->
        <?php
            //pre-mid exam
           /*session_start();

            $_SESSION['display']; //= array(array(), array(), array(), array(), array());
            //set the value first 0 
            $_SESSION['total_sales']; //$_SESSION['total_sales']=0;
            $_SESSION['ticket']; //$_SESSION['ticket']=0;

            $name = $_POST['name'];
            $destination = $_POST['destination'];
            $bus_no = $_POST['bus_no'];

            if(isset($_POST['submit'])){
                $_SESSION['total_sales'] += 50;
                $_SESSION['ticket'] += 1;

                echo "Total Sales: ".$_SESSION['total_sales']."<br>";
                echo "<h1>{$name}</h1><br>";
                echo "<h1>{$destination}</h1><br>";
                echo "<h1>{$_SESSION['ticket']}</h1><br>";
                echo "<h1>Fare: P50</h1><br>";


                array_push($_SESSION['display'][$bus_no-1], $name);
            }

            $bus_display = 1;
            foreach($_SESSION['display'] as $value){
                echo "<br>".$bus_display."<br>";
                foreach($value as $name){
                    echo $name.",";
                }
                $bus_display += 1;
            }*/

            //session_unset();
            //session_destroy();

            //DYNAMIC CREATION OF DATABASES
            //phpmyadmin vendor is mysqli
            //every vendors there are different syntax
            //everytime you store infomation it is being stored as rows


            //FOREIGN KEY reference to other tables or gateway
            //PRIMARY KEY basically combination of NOT NULL and UNIQUE,  NOT NULL meaning there is always a value, UNIQUE means theres no same number on that column
            //PRIMARY KEY is always use for identification
            //FOREIGN KEY always should be refering to primary key

            //to create database name
            //CREATE DATABASE new_database;
            //every command you run in the SQL is a query
            //to create table
            /*CREATE TABLE names (
                id int(2) AUTO_INCREMENT, //always remembers this are constraints = means rules how you put your data  // , separator
                f_name varchar(100) NOT NULL,
                l_name varchar(100) NOT NULL,
                PRIMARY KEY(id) //set id as a primary key, inorder to set primary key, PRIMARY KEY(id)
            );*/ 

            //CREATE table at php file

            //DYNAMIC CREATION OF TABLES
            /*$conn = new mysqli("localhost", "root", "");

            //to check and select the db, basically returning a boolean value
            $select = $conn->select_db('new_database');
            
            //to check the error
            //echo $conn->error;

            if(!$select){
                //to create database
                $conn->query("CREATE DATABASE new_database");

                //to select the database so that we can add a table
                $conn->select_db('new_database');

                //add table to the database created
                $conn->query("CREATE TABLE names(
                    id int(2) AUTO_INCREMENT,
                    name varchar(50),
                    PRIMARY KEY(id)
                );");
            }*/

            //FUNCTION TO PROTECT YOUR WEBPAGE FROM SQL INJECTION ATTACKS
            //like run a query in your inputs if no security might got hack if no security
            //its prepare function

            /*$conn = new mysqli('localhost', 'root', '', 'new_database');
            
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $course = $_POST['course'];

                $prepare = $conn->prepare("INSERT INTO names VALUES('',?,?)");
                //to set the parameter, inorder to know which value is inserted to the ? we need to bind the parameter or set the parameters
                //bind the data to ?
                //s for string, i integer, d double, f float
                //relative of order question marks ?
                $prepare->bind_param('si', $name, $course); //if you input integer to string input outcome will be 0 because the expectation didn't expect the value
                //then execute to run the statement inside the prepare
                $prepare->execute();
            }*/

            //The difference between query and prepare statement, prepare statment set the expectations of what value to be inserted
            //from the bind the parameter it will set expections what to insert

            //TO ADD COLUMN IN TABLE names in SQL phpmyadmin
            //ALTER TABLE names ADD COLUMN course varchar(50)

            //PHP with AJAX -which getting request to a server 
            //example
            //like submitting without reloading the page
            //basically everything done, everything being requested by AJAX is done by Server side
            //example
            //searching


        ?>
        <form action='display.php' method='POST'>
            <input type="text" name="name" value="">
            <p id='result'></p>
        </form>

        <script type="text/javascript">
            //select the input name and put it in the variable text
            let text = document.querySelector("input[name='name']");
            //event listener
            text.addEventListener('keyup', function(){
                //in order to get data without reloading the page we need to you used AJAX
                //XMLHTTPREQUEST is an object will be used to requesting in the server
                //the server is htdocs
                //file system is in the php folder
                let xml = new XMLHttpRequest();
                xml.onreadystatechange = function(){
                    //get the element p id
                    let result = document.querySelector('#result');
                    //to change element content need to used innerHTML
                    result.innerHTML = this.responseText;
                }
                //GET method or AJAX
                xml.open('GET', 'display.php?name='+text.value);
                xml.send();
            });
        </script>
    </body>
</html>