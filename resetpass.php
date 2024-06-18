<?php
ob_start();
session_start();

include "database.php";
$passwordError1 = $passwordError2 = '';

if (!isset($_POST['reset'])) {
    if (!isset($_GET['token'])) {
        die('Please, request to reset your password first.');
    }

    $token = $_GET['token'];
    $sql = "SELECT * FROM user_info WHERE token='$token'";
    $result = mysqli_query($conn, $sql);
    // check the token existance
    if (mysqli_num_rows($result) != 1) {
        die('Token is not found.');
    }

    // check the expiry date
    $user = $result->fetch_assoc();
    $expiry = strtotime($user['expiry']);
    if ($expiry <= time()) {
        die('Token has expired.');
    }
} else {
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];

    // check the expiry date (again)
    $sql = "SELECT * FROM user_info WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
    if ($user && isset($user['expiry'])) {
        $expiry = strtotime($user['expiry']);
        if ($expiry <= time()) {
            die('Token has expired.');
        }
    } 
    else {
        die('Invalid user data.');
    }
    if ($expiry <= time()){
        die('Token has expired.');
    }

    // Check the password strength 
    $uppercase = preg_match('/[A-Z]/', $password1);
    $lowercase = preg_match('/[a-z]/', $password1);
    $number = preg_match('/[0-9]/', $password1);
    if (strlen($password1) < 8 || !$uppercase || !$lowercase || !$number) {
        $passwordError1 = "Invalid Password";
    }

    // match the two passwords 
    if ($password1 != $password2) {
        $passwordError2 = "Password doesn't match.";
    }



    if (empty($passwordError1) && empty($passwordError2)) {
        // update the password in the DB
        $hash = password_hash($password1, PASSWORD_DEFAULT);
        $update_sql = "UPDATE user_info SET password = '$hash', token = NULL, expiry = NULL WHERE email='$email'";
        mysqli_query($conn, $update_sql);

        $_SESSION['email'] = $email;
        // redirect to the main page
        header("Location:logIn_signUp.php");
        exit();
    }
}
ob_end_flush();

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
    <title>Reset password</title>
</head>
<body>


    <div class="container" id="container">
        <div class="formContainer">       
            <div class="forgetpasstext">
                <p> Reset password </p>
            </div>
            <form action="resetpass.php" method="post">
                <input type="email" name="email" id="emailInput" placeholder="Email">
                <input type="password" name="password1" id="passwordInput" placeholder="New Password">
                <p style="color:red;"> <?php  echo $passwordError1; ?> </p>
                <input type="password" name="password2" id="repeatPasswordInput" placeholder="Confirm New Password">
                <p style="color:red;"> <?php  echo $passwordError2; ?> </p>
                <input type="submit" value="Reset password" name="reset" id="register-btn" class="submit">
            </form>
        </div>
    </div>
</body>

</html>