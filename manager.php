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
            /*<h1>Hello i am <?php echo $_SESSION['name']?> and I am a <?php echo $_SESSION['user_type']?></h1>*/
            include 'connection.php';
            $conn->select_db("user_database");
            //$result = $conn->query("SELECT * FROM users_detail");
            //to combine column to 1 table to another table
            //$result = $conn->query("SELECT * FROM users_detail INNER JOIN groups_table ON users_detail.group_id = groups_table.group_id");

            //display data from the left table from matching values
            //users_detail become left table || if first specify become left
            //will display all data from users_detail because its LEFT JOIn
            //will only display if there's matching value
            $result = $conn->query("SELECT * FROM users_detail INNER JOIN groups_table ON users_detail.group_id = groups_table.group_id");

            while($row = $result->fetch_assoc()){ 
                //echo "<h3 id='id_".$row['id']."' onclick='function_name(".$row['id'].")'>{$row['name']}</h3><br>";
                echo $row['name']."Group name: "."{$row['group_name']}<br>";
            }

            //javascript function
            //each data will function

            //you can add default at group_by at phpmyadmin  example 1 || as defined
        ?>
        <script type="text/javascript">
            function function_name(id){
                //change the color of single row data
                //used tilda so that you can use javascript
                //same as `#id_+id`
                let elem = document.querySelector(`#id_${id}`);
                elem.style.color = 'red';
            }
        </script>
    </body>
</html>