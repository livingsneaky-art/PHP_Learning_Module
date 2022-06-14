<?php
//include 'connection.php';
//session_start();

//for example
/*$conn->select_db("user_database");
$result = $conn->query("SELECT name FROM users_detail");
while($row = $result->fetch_assoc()){
    echo "<h1>NAME: {$row['name']}</h1><br>";
}*/
//echo "<h1>".$_SESSION['user_type//']."</h1>";
?>
<!--<a href="phpMySqlLoginUserTypesJoin.php">Link to other page</a>-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Hello i am <?php echo $_SESSION['name']?> and I am a <?php echo $_SESSION['user_type']?></h1>
    </body>
</html>