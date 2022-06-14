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
        include 'connection.php';
        $select = $conn->select_db("user_database");

        if(!$select){
            $conn->query("CREATE DATABASE user_database");
            $conn->select_db("user_database");

            $conn->query("CREATE TABLE users_detail(
                id int(10) AUTO_INCREMENT,
                username varchar(50) NOT NULL,
                password varchar(50) NOT NULL,
                name varchar(50) NOT NULL,
                group_id ENUM('1', '2'),
                user_type ENUM('Employee', 'Manager'),
                PRIMARY KEY(id)
            )");
        }
    ?>
    <!--<form action='' method='POST'>
        <label for="">USERNAME</label>
        <input type="text" name="username" value="" required>
        <label for="">PASSWORD</label>
        <input type="text" name="password" value="" required>
        <label for="">NAME</label>
        <input type="text" name="name" value="" required>
        <input type="submit" name="submit" value="Submit">
    </form>-->

    
    <?php
        session_start();
        /*if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];

            $conn->select_db("user_database");
            $conn->query("INSERT INTO users_detail VALUES ('','$username', '$password', '$name', '', '')");

            header("location: phpMySqlLoginUserTypesJoin.php");
            exit;
        }*/

        // $result = $conn->query("SELECT name FROM users_detail");
        /*$result = $conn->query("SELECT username,password FROM users_detail");
        while($row = $result->fetch_assoc()){
            echo "<h1>USERNAME: {$row['username']} PASSWORD: {$row['password']}</h1><br>";
        }*/

        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];


            //for login WHERE condition clause and AND clause for login
            $result = $conn->query("SELECT * FROM users_detail WHERE username ='$username'AND password ='$password'");
            if($row = $result->fetch_assoc()){
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                //use user_type for comparison if its admin it can add product if customer it can buy the product
                $_SESSION['user_type'] = $row['user_type'];
            }
        }

        if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
        }


        //you can only used 1 session variable
        if(isset($_SESSION['name'])){
            if($_SESSION['user_type'] === 'Manager'){
                //echo "I am a manager";
                //include 'displayNameOfUsersDetails.php';
                include 'manager.php';
            }else if($_SESSION['user_type'] === 'Employee'){
                //echo "I am a employee";
                include 'employee.php';
            }
            echo "<form action='' method='POST'>
                    <input type='submit' name='logout' value='Logout'>
                 </form>";
        }else{
            //much change to single quotation to work the form
            echo "<form action='' method='POST'>
                    <label for=''>USERNAME</label>
                    <input type='text' name='username' value=''><p></p>
                    <label for=''>PASSWORD</label>
                    <input type='password' name='password' value=''><p></p>
                    <input type='submit' name='login' value='Login'>
                 </form>";
        }

        //can add php at html element
        //example
        /*<h1>Hello i am <?php echo $_SESSION['name']?> and I am a <?php echo $_SESSION['user_type']?></h1>*/
        
    ?>
    
    <!--<a href="displayNameOfUsersDetails.php">Link to other page</a>-->
    <?php
        //echo "<h1>".$_SESSION['name']."</h1>";
        //THREE TYPE OF JOIN
        //INNER JOIN AND LEFT JOIN
        
    ?>
    </body>
</html>