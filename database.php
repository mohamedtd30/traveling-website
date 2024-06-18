<?php
    $db_server = "localhost";
    $db_user = "root";
    $pass = "";
    $db_name = "users";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $pass, $db_name);   
    }
    catch(mysqli_sql_exception){
        echo"You are not Connected";
    }

?>