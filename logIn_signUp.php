<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/formStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="post">
                <h1>Create Account</h1>
                <input type="text" name="username" id="nameInput" placeholder="Name">
                <div id="nameError" style="display: none;"></div>
                <input type="email" name="email" id="emailInput" placeholder="Email">
                <div id="emailError" style="display: none;"></div>
                <input type="password" name="password" id="passwordInput" placeholder="Password">
                <div id="passwordError" style="display: none;"></div>
                <input type="password" name="confirm_password" id="repeatPasswordInput" placeholder="Repeat password">
                <div id="repeatPasswordError" style="display: none;"></div>
                <input class="submit" type="submit" name="register" value="Sign Up" id="login-btn" onclick="finalCheck()">
                <div class="loginError" style="display: none;"></div>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login.php" method="post">
                <h1>Sign In</h1>
                <input type="email" name="logEmail" id="inputLogEmail" placeholder="Email"  value="<?= htmlspecialchars($_POST["logEmail"] ?? "") ?>">
                <div id="logEmailError" style="display: none;"></div>
                <input type="password" name="logPass" id="inputLogPass" placeholder="Password" value="" autocomplete="off">
                <div id="logPassError" style="display: none;"></div>
                <a href="forgetpass.php">Forget Your Password?</a>
                <input class="submit" type="submit" name="signIn" value="Sign In" id="register-btn">
                <div class="singupError" style="display: none;"></div>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                    <?php
                        include("login.php");
                        echo"$msg";
                    ?>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/formScript.js"></script>
</body>

</html>