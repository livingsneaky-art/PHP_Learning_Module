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
        //1 way to get data to other page by using session
       /* session_start();
        echo $_SESSION['username']."<br>";
        echo $_SESSION['password'];

        session_unset();
        session_destroy();*/

        //another way to get data from other page by calling the database
        //done the retrieving and displaying of data
        $conn = new mysqli("localhost", "root", "", "database_name");
        $sql = "SELECT * FROM my_table";
        //to query the select 
        $result = $conn->query($sql);

        //to fetch the data
        //$result->fetch_assoc();
        while($row = $result->fetch_assoc()){
            echo "<h1>Username: {$row['username']} Password: {$row['password']}</h1>";
        }
    ?>
    </body>
</html>