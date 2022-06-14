<?php
        //$file = $_FILES['files'];
        //print_r($file);

        //if you want to manipulate or move filename same process in phpMySqlFileUploadsAndBasicSql document
        //the difference is just used a javascript to display the file without clicking the button //AJAX
    ?>
        <?php
        //BASIC CRUD 
        //CREATE UPDATE DELETE
        //CREATION - INSERTION OF DATA IN SQL in myphpmyadmin
        /*INSERT INTO table_name VALUES(1, 'Victor', 34, 3, 0, '');*/ //'' NULL VALUE

        //IN PHP SCRIPT
        //THAT INSERT DATA
       /* $conn = new mysqli("localhost", "root","");
        $select = $conn->select_db("score_database");

        if(!$select){
            $sql = "CREATE DATABASE score_database";
            $conn->query($sql);
            $conn->select_db("score_database");

            $conn->query("CREATE TABLE sample_table(
                id int(2) AUTO_INCREMENT,
                name varchar(255),
                score varchar(255),
                PRIMARY KEY(id)
            )");
        }

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $score = $_POST['score'];

            $sql = "INSERT INTO sample_table VALUES('', '$name','$score')";
            $conn->query($sql);

            $display = "SELECT * FROM sample_table";
            $result = $conn->query($display);
            while( $row = $result->fetch_assoc()){
                echo "<h1>Name: {$row['name']} Score: {$row['score']}</h1><br>";
            }
        }*/
        /*if(isset($_POST['submit'])){
            $name = $_POST['name'];
            //$another_name = $_POST['another_name'];

            $conn = new mysqli("localhost", "root", "", "score_database");
            //$conn->query("INSERT INTO sample_table VALUES('', '$name', '$score')");
            //to specify the column you want to insert
            //if you didn't specify column you want to insert it will used all the column into the table
            //$conn->query("INSERT INTO sample_table (name, score) VALUES('$name', '$score')");

            //DELETE STATEMENT
            //putting condition WHERE clause
            //$conn->query("DELETE FROM sample_table WHERE name = '$name' "); //input at name = ryan //DELETED

            //UPDATE STATEMENT
            //upadate/edit
            //SET clause and condition clause WHERE
            //$conn->query("UPDATE sample_table SET name = '$another_name' WHERE name='$name'"); 

            //SELECT STATEMENT
            //display rows of data
            //* is the column * means all
            //$result = $conn->query("SELECT name FROM sample_table"); //any display
            //$result = $conn->query("SELECT name,score FROM sample_table"); 
            $result = $conn->query("SELECT name FROM sample_table WHERE name = '$name'"); 
            //$row = $result->fetch_assoc();

            while($row = $result->fetch_assoc()){
                echo $row['name']."<br>";
            }
            
        }*/
        
        //SQL INJECTION //105' or" =' it display all the data if no security just using this 105' or" ='
        //using form to give a query into database
        //for security
        //preg_match to filter the characters/strings

    ?>