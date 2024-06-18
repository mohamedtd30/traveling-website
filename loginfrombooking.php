<?php

session_start();

if(empty($_SESSION['user_name']))
{
    header("Location:logIn_signUp.php");
    exit();
}

?>