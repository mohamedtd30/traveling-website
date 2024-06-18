<?php
    session_start();
    include('database.php');

    if(isset($_POST['paynow']))
    {
        $cardNumber = $_POST["cardNo"];
                    
        $email = $_SESSION['email'];

        $hash = password_hash($cardNumber, PASSWORD_DEFAULT);

        $sql = "UPDATE user_info SET creditcard = '$hash' WHERE email = '$email'";

        mysqli_query($conn, $sql);

        header("Location: http://localhost/try/login/finish.php");
        exit();
    }
?>