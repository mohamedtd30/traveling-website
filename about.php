<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/dark-mode.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="Js/script.js" defer></script>
    
    <title>About</title>
</head>
<body class="aboutus-body"> 
<?php
        session_start();
    ?>
    <div class="background">
        <nav id = "navScroll" class = "nav1">
            <div class="logo">
                <img src="Pictures/logo.jpg" alt="The image is not loaded" width="60px" height="60px" style="border-radius: 100%;">
                <p class="webpage_name"><b>Travelers</b></p>
            </div>
            <div class="items">
                    <a href="/try/login/index.php" id="homelink"><b>Home</b></a>
                    <div class="dropdown">
                        <a class="dropbtn"><b>Destenation</b> <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                          <a href="/try/login/inside_tours.php">Inside Tours</a>
                          <a href="/try/login/WorldWide_Tours.php">WorldWide Tours</a>
                        </div>
                    </div>
                    <a href="/try/login/about.php"><b>About</b></a>
                    <?php if (isset($_SESSION['user_name'])) {
                        $user = $_SESSION['user_name'];
                        echo"
                        <a href='/try/Login/Form.php' id='booking' style='color:white;' onclick='bookingClick()'><b>Booking</b></a>
                            <div class='dropdown'>
                                <a class='dropbtn'><i class='fa fa-fw fa-user' style='margin-left: 10px;'> </i>
                                <i class='bi bi-person-circle'></i> Hi, $user
                                </a>
                                <div class='dropdown-content'>
                                    <a href='logout.php'><i class='bi bi-box-arrow-left'></i> Logout</a>
                                </div>
                            </div>
                            ";
                        }
                        else {
                        echo"
                        <a href='/try/Login/logIn_signUp.php' id='booking' style='color:white;' onclick='bookingClick()'><b>Booking</b></a>
                        <a  href='/try/Login/logIn_signUp.php' class='dropbtn'><i class='fa fa-fw fa-user' style='margin-left: 10px;'> </i>
                        <i class='bi bi-box-arrow-in-right'></i> Log in
                        </a>
                        ";
                        }
                    ?>
                </div>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
        </nav>
        <div class="website-name">
            <p style="font-size: 70px;"><i>About Us</i></p>
            <p style="font-size: 40px;"><i>Enjoy Your Vacation With Us</i></p>
        </div>
    </div>

    <div class="content-about-us-body">
        <div class="team">
            <div class="first">
                <i class="fa-solid fa-user fa-2xl" style="color: #0fb5b8;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif; margin-top: 10px;">Youssef Taha Saad Taha</p>
            </div>
            <div class="second">
                <i class="fa-solid fa-user fa-2xl" style="color: tomato;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif;">Mohamed Toukhy Mohamed Ahmed</p>
            </div>
            <div class="third">
                <i class="fa-solid fa-user fa-2xl" style="color: darkslateblue;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif;">Abdelhameed Mohamed Elsayed Alsawey</p>
            </div>
            <div class ="fourth">
                <i class="fa-solid fa-user fa-2xl" style="color: #0d8109;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif; margin-top: 10px;">Hanin Mustafa Muhamed Ata</p>
            </div>
            <div class="fifth">
                <i class="fa-solid fa-user fa-2xl" style="color: #d617a3;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif; margin-top: 10px;">Fatma Mustafa Muhamed Ibrahim</p>
            </div>

        </div>
    </div>

    <footer>
    <div class="footer-logo">
      <img src="media/logo.jpg" alt="The image is not loaded" class="logo-img footer-img" height="130px" width="130px">
      <p class="webpage_name footer-name" style="margin-left: 5px;"><b>Travelers</b></p>
    </div>

    <div class="contact">
        <a href="" class="contactus">Contact us</a> <br>
            <h4 id="phone" class="fa-solid fa-phone">+20 127 937 8672</h4> <br>
            <a href="https://maps.app.goo.gl/2HaAdZYX1pT4JMKC6" target="_blank"><address class="fa-solid fa-location-dot"> Shoubra Faculty of Engineering</address></a>
            <div class="social-media">
                <a href="https://instagram.com/" class="fa-brands fa-instagram" target="_blank" title="instagram"></a>
                <a href="https://discord.com/ "  class="fa-brands fa-discord"   target="_blank" title="discord"></a>
                <a href="https://linkedin.com/"  class="fa-brands fa-linkedin"  target="_blank" title="linkedin"></a>
                <a href="https://www.facebook.com/"  class="fa-brands fa-facebook"  target="_blank" title="facebook"></a>
            </div>
    </div>
    <div class="company">
        <a href="" class="aboutus">Company</a>
        <a href="about.html" class="aboutus">About us</a>
        <a href="" class="aboutus">Contact us</a>
        <a href="" class="aboutus">Terms and Conditions</a>
    </div>
  </footer>
</body>
</html>