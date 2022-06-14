<?php
    $conn = new mysqli('localhost', 'root', '', 'new_database');

    $name = $_GET['name'];

    //LIKE is contain the word of the variable $name in the input
    $result = $conn->query("SELECT name FROM  names WHERE name LIKE '%$name%'");
    while($row = $result->fetch_assoc()){
        echo $row['name'];
    }
?>