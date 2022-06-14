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
        //FILE UPLOADS AND BASIC CRUD OPERATIONS FOR DATABASE
        //CREATE UPDATE DELETE
        //because of the idea php mysql which is send a query and the database sending back to us
        //SELECT query display row of data
        //localhost server found on htdocs//default setup on xampp software inside htdocs is your project folders

        //Inorder to upload a file

        //since we redirect to itself leave the action blank
        //it cause error if the value of the variable is not set
        //super global $_FILES
        //form is trying to submit a associative array
        //('file'=>file) ('file'=>'text', 'email' => 'value')
        

        /*if(isset($_POST['submit'])){
            $files = $_FILES['file']; //accessing files index file 
            //print_r($files); //print_r will print a associative arrays
            //Array ( [name] => bbmsarayouth2.jpg [type] => image/jpeg [tmp_name] => D:\xampp\tmp\phpA4E1.tmp [error] => 0 [size] => 1171620 ) 

            //get the values and try to compare it with if else statement
            //you can use the values for comparison
            $name = $files['name'];
            $type = $files['type'];
            $tmp = $files['tmp_name'];
            $error = $files['error'];
            $size = $files['size'];

            //echo "Size : {$size}";
            //let say that the type of image you trying to get is png files
            //TO LIMIT THE IMAGE TYPE //VALIDATION
            /*if($type === 'image/png'){ //if($type === 'image/png'){
                echo 'You can upload the file';
            }else{
                echo 'You cannot upload the file';
            }*/
            //another way to validation of img
            //basically explode function is to try to separate strings depending on separator you want to specify
            //separator is dot
            //$extension = explode('.',$name); //this will return an array 
            //$extension = explode('.',$name, 1); //add limit in the 3rd parameter in the function upload //to limit the number of array
            //print_r($extension);
            /*if($extension[1] === 'png'){
                echo "It is png";
            }*/

            //TO LIMIT THE SIZE FOR FILE UPLOAD
            /*if($size < 11150000){
                echo "It is allowed";
            }else{
                echo "It should not be allowed";
            }*/

            //FILE UPLOAD IN UPLOADS FOLDER 
            //putting it in variable and adding it database
            /*$conn = new mysqli("localhost", "root", "");
            $select = $conn->select_db("img_database");
            if(!$select){
                $conn->query("CREATE DATABASE img_database");
                $conn->select_db("img_database");

                $conn->query("CREATE TABLE my_img(
                    id int(2) AUTO_INCREMENT,
                    img_des varchar(255),
                    PRIMARY KEY(id)
                )");
            }
            //MOVE THE FILE TO CREATED FOLDER
            //move_uploaded_file(filename, destination);
            //move the $tmp file into destination uploads with its $name
            move_uploaded_file($tmp, 'uploads/'.$name);
            //its not limited to image but it can also upload a .text file
            
            //TO DISPLAY THE IMAGE IN UPLOADS FOLDER
            //echo "<img src='uploads/eee.png' width=500px height=250px>";

            //ADD FILE TO DATABASE

            $location = 'uploads/'.$name;
            $sql = "INSERT INTO my_img VALUES('', '$location')";
            $conn->query($sql);

            $sql = "SELECT * FROM my_img";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            //DISPLAYING FILE AT WEBPAGE FROM DATABASE
            while($row = $result->fetch_assoc()){
                echo "<img src='$row[img_des]' width=500px height=250px>";
            }*/
        //}
    ?>
    <!--form doesn't knew you upload file because its always text inorder the form know you need to specify the type entype=""-->
    <!--if you trying to send plain text enctype="text/plain"-->
    <!--but if you trying to send a file enctype="multipart/form-data"-->
    <!--<form action='' method='POST' enctype="multipart/form-data">
        <input type="file" name="file" value="" required>
    </form>
    <h1></h1>-->
    <!--<input type="submit" name="submit" value="Submit">-->
    
    <!--<script type="text/javascript">
        //PAGE DOESN'T NEED TO RELOAD FOR FILE
        //sending file without submit button
        //trying to add an event at input file
        let input = document.querySelector('input[name="file"]');
        input.addEventListener('change', function(){ //input.addEventListener('click', function(){ inefficient if click event is used //use change so that the event will fire after the file uploaded
            //alert(5);
            //submit img using javascript
            //Vanila AJAX
            let xml = new XMLHttpRequest();
            //index 0 if you have a multiple file uploads
            let file = this.files[0];
            //custom form is created, values used to specify
            let form = new FormData();//formdata is associated array
            //inorder to add a new value into array
            //('key' => 'values')
            form.append('files', file)
            xml.onreadystatechange = function(){
                //function when the data is received
                //send input without having a submit button
                //everytime you print that is value of //this.responseText
                //innerHTML to change the element of html
                document.querySelector('h1').innerHTML = this.responseText;
            }
            xml.open('POST', 'file.php');
            //xml.setRequestHeader('Content-type', 'multipart/form-data');
            xml.send(form);
        });
    </script>-->
<?php
        //BASIC CRUD 
        //CREATE UPDATE DELETE
        //CREATION - INSERTION OF DATA IN SQL in myphpmyadmin
        /*INSERT INTO table_name VALUES(1, 'Victor', 34, 3, 0, '');*/ //'' NULL VALUE

        //IN PHP SCRIPT
        //THAT INSERT DATA
        /*$conn = new mysqli("localhost", "root","");
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
        //FORM
        //enctype="multimedia/form-data"
        //application/x-www-form-urlencoded means you send a special text with ASCII values
        //plain/text ASCII values and special characters not included
    ?>
    <form action='file.php' method='POST'>
        <input type="text" name="name" value="">
        <!--<input type="text" name="another_name" value="">-->
        <input type="submit" name="submit" value="Submit">
    </form>
    </body>
 </html>