<?php
include ("database.php"); 

$msg = '';
if (isset($_POST["send"])){
    $email = $_POST['email'];

    // check the email existance
    $sql = "SELECT * FROM user_info WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0){
        $msg = "This email dosen't exist.";
    }
    else{
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token = substr(str_shuffle($characters), 0, 15);
        $expiry = date("Y-m-d H:i:s", strtotime('+2 hours'));

        // store the token in the DB
        $update_sql = "UPDATE user_info set token = '$token', expiry = '$expiry' WHERE email = '$email'";
        mysqli_query($conn, $update_sql); 

        $msg = "Click <a href='http://localhost/try/login/resetpass.php?token=$token' style = 'text-decoration: underline; color: blue;'> here </a> to reset your password.";
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">  
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/css.gg@2.0.0/icons/css/dark-mode.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="CSS/resetPassword.css">
        <title>Forget password</title>
    </head>
    <body>

                    




        <div class="container" id="container">
            <div class="formContainer">       
                <div class="forgetpasstext">
                    <p> Forget password </p>
                </div>
                    <form action="forgetpass.php" method="post">
                        <input type="email" name="email" id="emailInput" placeholder="Email"><br>
                        <div id="emailError" style="display: none;"></div>
                        <input type="submit" value="Send" name="send" id="register-btn" class="submit"><br>
                        <div class="loginError" style="display: none;"></div>
                        <p> <?php echo $msg ?> </p>
                    </form>
                    <br>
                    <div class="resetAccount">
                        <a href="/try/login/logIn_signUp.php"> Back to Login </a> 
                        <p>Don't have an account?<p> <a href="/try/login/logIn_signUp.php"> Sign up </a> 
                    </div>
            </div>
        </div>
    </body> 
</html>