<?php
    include('database.php');
    session_start();

    if(isset($_POST['nextstep']))
    {
        $dest = $_POST["destination_name"];
        $_SESSION["dest"] = $dest;
        $email = $_POST["email"]; 
        $_SESSION['email'] = $email;  
        $numofticket = $_POST['tickNum'];
        $_SESSION['numofticket'] = $numofticket;    
        $sql = "UPDATE user_info SET destination = '$dest' WHERE email = '$email'";

        mysqli_query($conn, $sql);
        
        header("Location: http://localhost/try/login/Booking.php");
        exit();
    }
?>