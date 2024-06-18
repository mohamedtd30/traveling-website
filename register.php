<?php
    
include("database.php");

if(isset($_POST['register']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $username = $_POST['username'];
        
    $hash = password_hash($password, PASSWORD_DEFAULT);
        
    
    $sql = "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$hash')";

    try{
        mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception){
        echo"That email is taken";
    }
    header("Location: http://localhost/try/login/logIn_signUp.php");
    exit();
}
?>
