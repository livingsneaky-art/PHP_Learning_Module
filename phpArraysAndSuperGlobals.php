<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="css/style.css" rel="stylesheet">-->
    </head>
    <body> 
        <?php 
            //ARRAY (SINGLE ARRAY)

            //array initialization
            //array in php can have a multiple datatypes inside a single a arary
            //-$array = array('Victor', 123);
            //to access the array
            //-echo $array[0];

            //ARRAY (MULTI DIMENSIONAL ARRAY)

            //not limited into 1 data type
            /*-$array = array(
                array('Victor', 'Chiong', 24,123),
                123,
                array('ryan', 'llamido', '24', '16')
            );
            echo $array[0][1]."<br>";
            echo $array[2][0]."<br>";
            echo $array[1];*/

            //Associated array with a index value that you can set
            //example
            //-$array = array('first' => 3, 'second' => 2);
            //-echo $array['first'];

            //Array in Associated array
            //-$array = array('first' => array('ryan'), 'second' => 2);
            //-echo $array['first'][0];
            
            //Associated array within Associated array
            //-$array = array('first' => array('value' => 4 ), 'second' => 2);
            //displaying associated array within associated array and the associated array second with its value
            //with string concatation dot = .
            //-echo $array['first']['value']."<br>".$array['second'];

            //PHP SUPER GLOBAL
            //Super Global of php are variables that can be use through out the multiple pages
            //Some of the super global are:
            //POST, GET, COOKIE, AND SESSION
            
            //usage of post and get is depends on how you get the data
            //post cannot be seen in url while get is can be seen
            //used post if you get sensitive data from the form
            //$_POST[''] - get values from the form, general ideal is to collect information
            //$_GET[''] - also get values in the form but not advisable if you going to get crucial data, like login info

            //$GLOBALS super global where to find a variable within a global scope
            //example
            /*$name = 'Hello im ryan';

            //but you dont want it to put in the parameter () then you will just do this...
            //$GLOBALS['name']; if you dont want to put $name to parameter you can use $GLOBALS you dont need to put $ if you used $GLOBALS['']
            function displayName(){
                echo $GLOBALS['name'];
            }

            displayName();*/

            //used to store information
            //difference between two superglobal where to store the data
            //$_COOKIE 
            //$_SESSION

            //the $_COOKIE is store in the machine
            //example
            //adverstisement, personal information that you want to store it locally, keep me login
            //$_COOKIE store value in client side -> in machine
            //variable name, the value and time, time if you want to set lifetime your cookie
            //if you want to destroy the cookie you need to put time, time() + 300
            //can be found if you echo it anywhere in the website if not destroyed
            //-setcookie('name', 'ryan');
            //inorder to use the cookie $_COOKIE['name']
            //-echo $_COOKIE['name'];
            
            
            //$_SESSIONS store value in server side
            //you need to start session to used the session variable
            session_start();

            //variable name and the value
            //-$_SESSION['name'] = 'xd';

            //being modefied to other page adding +3
            /*-if(isset($_SESSION['number'])){
                echo $_SESSION['number'];
            }else {
                $_SESSION['number'] = 123;
            }*/

            //session_unset(); //remove the value
            //session_destroy(); //remove the session

            //if session is set
            if(isset($_SESSION['number'])){
                //if submit button has been click
                if(isset($_POST['submit'])){
                    //putting variable post data name to variable $name
                    $name = $_POST['name'];
                    //to push data in the array
                    array_push($_SESSION['number'], $name);
                }
                //displaying the data in the array
               foreach($_SESSION['number'] as $value){
                echo $value."<br>";
               }
            }else {
                //array with empty data
                $_SESSION['number'] = array('');
            }
            session_unset(); //remove the value
            session_destroy(); //remove the session

        ?>
        <form action='' method='POST'>
        <input type="text" name="name" value="">
        <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>