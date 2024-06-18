<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link  rel="icon" type="image/jpg" sizes="32x32" href="../Pictures/logo.jpg">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/book.css">
    <link>
    <style>
        
  
</style>
</head>
<body>
    <?php
        include("loginfrombooking.php");
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
            <p style="font-size: 70px;"><i>Booking</i></p>
            <p style="font-size: 40px;"><i>Enjoy Your Vacation With Us</i></p>
        </div>
    </div>
<!-- <h2 class="motivation">Never Stop Exploring!</h2>
<p class="motivation2">It's time to travel</p>
<div class="hint">
    <h4 class="stepOne">Choose A Destination</h4>
    <i class='fas fa-globe'
        style=" box-shadow: 7px 7px 5px gray;font-size:40px; background-color: #843a10; color: white; position: relative;bottom:65px; left:135px;border-radius: 100%; padding: 10px; display: inline-block;"></i>
    <h4 class="stepTwo">Pay Online</h4>

    <i class='fas fa-dollar-sign'
        style=' box-shadow: 7px 7px 5px gray;font-size:40px; background-color: #843a10; color: white; position: relative;bottom:65px;left: 150px; border-radius: 100%; padding:10px; display: inline-block;'></i>
</div> -->
<div class="grid-container" id="GridBokking" style="height: 700px;">

    <div class="item1">
    </div>
    <div class="item2">
        <form action="dbBooking.php" method="post">
            <div class="grid-container2"> 
                <div class="itemOne"> 
                    <label for="creditNo">Credit Card Number:*</label><br><br>
                    <input type="text" id="creditNo" name="cardNo" placeholder="Enter Your Card Number..." minlength="16" maxlength="16"required><br />
                    <div id="creditError" style="display: none; margin-top: 22px;"></div>
            <br></div>
                   <div class="itemTwo">     
                    <label for="ExpireDate" >Expiration Date:*</label><br><br>
                    <input type="month" id="ExpireDate" name="expiry" min="2024-01" required style="padding-left: 7px; padding-right: 0px;"><br />
                    <div id="exError" style="display: none; margin-top: 22px;"></div>
            <br /></div>
            
            <div class="itemThree">    
                <label for="SecureCode" >Security Code:*</label><br><br>
                <input type="text" id="SecureCode" name="security" minlength="3"maxlength="3"required><br />
                <div id="codeError" style="display: none; margin-top: 22px;"></div>
            <br /></div><br>                 <div >  
                <input type="submit" name="paynow" id="next" value="Pay Now">
            </div></div>
  </div>
          

            <br />
        </form>
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
<script>
    window.onscroll = function() {navFunction()};
         let nav = document.getElementById("navScroll");

         function navFunction() {
             if (window.pageYOffset > 0) {
                 nav.classList.add("sticky");
             } else {
                 nav.classList.remove("sticky");
             }
         }
         document.getElementById('check').addEventListener('change', function() {
                if (this.checked) {
                    document.querySelector('.items').style.left = '0';
                } else {
                    document.querySelector('.items').style.left = '-100%';
                }
            });
 </script>
    <script src="js/Booking.js"></script>
</body>
</html>