<?php

$msg = "";

include('database.php');
if(isset($_POST['signIn']))
{
    $email = $_POST['logEmail'];
    $password = $_POST['logPass'];

    $sql = "SELECT * FROM user_info WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        if($row['email'] === $email && password_verify("$password", $row["password"]))
        {
            session_start();
            $_SESSION["user_name"] = $row["username"];
            header("Location: http://localhost/try/login/index.php");
            exit();
        }
        else {
            header("Location: http://localhost/try/login/logIn_signUp.php");
        }
    }
    else {
        $msg = "This Email does not exist";
    }
    
}
?>