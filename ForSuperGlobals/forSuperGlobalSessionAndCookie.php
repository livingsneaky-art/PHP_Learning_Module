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
    //echo $_COOKIE['name'];


    //always put session_start() if you want to used session variable in the other page
    session_start();
    //modifeid
    //(int) is typcasting to integer
    //(int)$_SESSION['number'] += 3;
    //session_unset(); //remove the value
    //session_destroy(); //remove the session

    session_unset(); //remove the value
    session_destroy(); //remove the session
    ?>
    </body>
</html>