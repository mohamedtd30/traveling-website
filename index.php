<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link  rel="icon" type="image/png" sizes="32x32" href="media/logo.jpg">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
        <link href="CSS/style.css" rel="stylesheet">
        <title>Home</title>
    </head>
    <body>
        <?php 
            session_start();
        ?>
        <div class="background">
            <nav id = "navScroll" class = "nav1">
                
                <div class="logo">
                    <img src="media/logo.jpg" alt="The image is not loaded" width="60px" height="60px" style="border-radius: 100%;">
                    <p class="webpage_name"><b>Travelers</b></p>
                </div>
                <div class="items">
                    <div><a href="/try/login/index.php" id="homelink"><b>Home</b></a></div>
                    <div class="dropdown">
                        <a class="dropbtn"><b>Destenation</b> <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                          <a href="/try/login/inside_tours.php">Inside Tours</a>
                          <a href="/try/login/WorldWide_Tours.php">WorldWide Tours</a>
                        </div>
                    </div>
                    <div><a href="/try/login/about.php"><b>About</b></a></div>
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
                <p style="font-size: 70px;"><i>Travelers</i></p>
                <p style="font-size: 40px;"><i>Enjoy Your Vacation With Us</i></p>
                <!-- <div class="search-container">
                    <input type="text" id="search_input" class="search-input" placeholder="Search" onkeyup="searchFunction()">
                    <button class="search-button"><b>Search</b></button>
                    <ul id="Menu" style="display: none;">
                        <li><a href="#">Giza</a></li>
                        <li><a href="#">Paris</a></li>
                        <li><a href="#">Turkey</a></li>
                    </ul>    
                </div> -->
            </div>
        </div>
       
        <section>
            <div class="about_us-section">
                <div class="hello scroll-effect">Hello Travelers</div>
                <div class="aboutus-welcome scroll-effect">
                    We are dedicated to make your travel dreams come true. <br>
                    Our website provides a comprehensive platform for all your travel needs. <br>
                    If you are planning for a weekend inside or outside, we have covered what you need.
                </div>
                <img src="media/tourist.jpg" alt="The image is not loaded"  class="aboutus-img scroll-effect"> 
            </div>
        <div class="design">
            <hr class="first_line">
            <hr class="second_line">
            <div class="word">
                SERVICES
            </div>
        </div>
        </section>
        <h1 style="margin-top: 100px; text-align: center; color: #2C3E50;"><i class="fa-solid fa-hotel fa-sm"></i> Our Services</h1>
        <div class="services_background">
            <div class="services scroll-effect">
                <div onclick="location.href='/try/login/WorldWide_Tours.php';" style="cursor: pointer;">
                    <i class="fa-solid fa-globe fa-2xl" style="color: #85b817;"></i>
                    <br><br>
                    <h4 style="font-family: 'Nunito', sans-serif;">World Wide Tours</h4>
                    <br>
                    <p style="font-family: 'Nunito', sans-serif;">Our website provides some of amazing world wide tours with the best offers.</p>
                </div >
                <div onclick="location.href='/try/login/inside_tours.php';" style="cursor: pointer;">
                    <i class="fa-solid fa-house fa-2xl" style="color: #85b817;"></i>
                    <br><br>
                    <h4 style="font-family: 'Nunito', sans-serif;">Inside Tours</h4>
                    <br>
                    <p style="font-family: 'Nunito', sans-serif;">In addtion to the world wide tours we have a special offers and amazing places inside</p>
                </div>
            </div>
        </div>
        <div class="design">
            <hr class="first_line">
            <hr class="second_line">
            <div class="word">
                PACKAGES
            </div>
        </div>
        <h1 class="text0"><i class="fa-solid fa-plane fa-sm"></i> Collection of Featured travels</h1>
        <div class="featured-travels" id = "special">
            <div class="group1 scroll-effect">
                <div class="travel1" >
                    <a href="/try/login/inside_tours.php"><img class="travel1-img" src="media/giza.jpg" alt ="Giza" width="269px" height="300px"></a>
                    <div class="travel1-des">
                        <div class="des1-icons">
                            <div class="des1-location">
                                <i class="fa-solid fa-location-dot" class="icona"></i> <span style="color: black;"> Giza </span>
                            </div>
                            <div class="des1-duration">
                                <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">1day</span>
                            </div>
                        </div>
                        <div class="des1-price">
                            <i class="fa-solid fa-sterling-sign"></i>
                            <span> 150 </span>
                            <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        
                        </div>
                        <div class="des1-text">
                            Join us with amaing day in the pyramids ,with camels and hourses,seeing ancient egyptian civilization 
                        </div>
                        <?php 
                            if (isset($_SESSION['user_name'])){
                                echo "<a href='/try/Login/Form.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                            else {
                                echo "<a href='/try/Login/logIn_signUp.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                        ?>
                        
                    </div>
                </div>
                <div class="travel2">
                    <a href="/try/login/inside_tours.php"><img  class="travel2-img" src="media/sharm .jpg" alt ="Sharm-Elsheikh" width="269px" height="300px"></a> 
                    <div class="travel2-des">
                        <div class="des2-icons">
                            <div class="des2-location">
                                <i class="fa-solid fa-location-dot" ></i> <span style="color: black;"> Sharm Elsheikh </span>
                            </div>
                            <div class="des2-duration">
                                <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">3 days</span>
                            </div>
                        </div>
                        <div class="des2-price">
                            <i class="fa-solid fa-sterling-sign"></i>
                            <span> 350 </span>
                            <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        
                        </div>
                        <div class="des2-text">
                            Enjoy Sharm-Elsheikh beaches with coral reefs and swimming , travelling with mountains,tourist villlages and playing beach ball
                        </div>
                        
                        <?php 
                            if (isset($_SESSION['user_name'])){
                                echo "<a href='/try/Login/Form.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                            else {
                                echo "<a href='/try/Login/logIn_signUp.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                        ?>
                        
                    </div>
                </div>
                <div class="travel3">
                    <a href="/try/login/WorldWide_Tours.php"><img class="travel3-img" src="media/paris.jpg" alt ="Aswan" width="269px" height="300px"></a>
                    <div class="travel3-des">
                        <div class="des3-icons">
                            <div class="des3-location">
                                <i class="fa-solid fa-location-dot" ></i> <span style="color: black;">Paris </span>
                            </div>
                            <div class="des3-duration">
                                <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">7 days</span>
                            </div>
                        </div>
                        <div class="des3-price">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <span> 700 </span>
                            <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                        <div class="des3-text">
                            Journey to Eiggel Tower enjoying and Louvre Museam and tring french food for every day would be a great idea for a vacation
                            
                        </div>
                        
                        <?php 
                            if (isset($_SESSION['user_name'])){
                                echo "<a href='/try/Login/Form.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                            else {
                                echo "<a href='/try/Login/logIn_signUp.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                        ?>
                    </div>
            </div>
                <div class="travel4">
                    <a href="/try/login/WorldWide_Tours.php"><img class="travel4-img" src="media/turkey.jpg" alt ="Luxor" width="269px" height="300px"></a>
                    <div class="travel4-des">
                        <div class="des4-icons">
                            <div class="des4-location">
                                <i class="fa-solid fa-location-dot" ></i> <span style="color: black;"> Turkey</span>
                            </div>
                            <div class="des4-duration">
                                <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">10 days</span>
                            </div>
                        </div>
                        <div class="des4-price">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <span> 400 </span>
                            <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                        <div class="des4-text">
                            Visiting ancient Istanbool and seeing islamic civilization there would be amazing for those loves ancient antiquities                              
                        </div>
                        
                        <?php 
                            if (isset($_SESSION['user_name'])){
                                echo "<a href='/try/Login/Form.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                            else {
                                echo "<a href='/try/Login/logIn_signUp.php' class='des1-booking'style='text-decoration: none;color: black;'>Book now</a>";
                            }
                        ?>
                    </div>
                </div>
        </div>
    </div>
    <div class="design">
        <hr class="first_line">
        <hr class="second_line">
        <div class="word">
            PROCESS
        </div>
    </div>
        <h1 class="easySteps"><i class="fa-solid fa-wand-magic-sparkles fa-sm"></i> Three Easy Steps</h1>
        <div class="container scroll-effect">
            <div class="destination">
                <div class="first_circle" style="display: flex; justify-content: center; flex-wrap: wrap; align-content: space-around;  box-shadow: 10px 15px 15px 15px rgba(128, 128, 128, 0.195);"><i class="fa fa-globe fa-3x text-white" style="color: white;"></i></i></i></div>
                <h3 style="text-align: center; color: #2C3E50; margin: 50px; margin-bottom: 20px; font-family: 'Nunito', sans-serif;"><b>Choose A Destination</b></h3>
                <div class="first_text" style="font-size: 20px; text-align: center; color: #2C3E50; font-family: 'Nunito', sans-serif;">At the fist step you can choose the best description to which you want to travel</div>
            </div>
            <div class="payOnline">
                <div class="second_circle" style="display: flex; justify-content: center; flex-wrap: wrap; align-content: space-around;  box-shadow: 10px 15px 15px 15px rgba(128, 128, 128, 0.195);"><i class="fa fa-dollar-sign fa-3x text-white" style="color: white;"></i></div>
                <h3 style="text-align: center; color: #2C3E50; margin: 50px; margin-bottom: 20px; font-family: 'Nunito', sans-serif;"><b>Pay Online</b></h3>
                <div class="first_text" style="font-size: 20px; text-align: center; color: #2C3E50; font-family: 'Nunito', sans-serif;">At the second step you can bay easly in different ways with the best price</div>
            </div>
            <div class="flyToday">
                <div class="third_circle" style="display: flex; justify-content: center; flex-wrap: wrap; align-content: space-around;  box-shadow: 10px 15px 15px 15px rgba(128, 128, 128, 0.195);"><i class="fa fa-plane fa-3x text-white" style="color: white;"></i></i></div>
                <h3 style="text-align: center; color: #2C3E50; margin: 50px; margin-bottom: 20px; font-family: 'Nunito', sans-serif;"><b>Fly Today</b></h3>
                <div class="first_text" style="font-size: 20px; text-align: center; color: #2C3E50; font-family: 'Nunito', sans-serif;">At the third and the final method you can enjoy your tour with the all facilities we provide</div>
            </div>
        </div>
        <div class="design">
            <hr class="first_line">
            <hr class="second_line">
            <div class="word">
                OUR TEAM
            </div>
        </div>
        <h1 style="margin-top: 100px; text-align: center; color: #2C3E50;"><i class="fa-solid fa-users fa-sm"></i> Team Members</h1>
        <div class="team scroll-effect">
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
                <i class="fa-solid fa-user fa-2xl" style="color: #055556;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif;">Youssef Taha Saad Taha</p>
            </div>
            <div class="fifth">
                <i class="fa-solid fa-user fa-2xl" style="color: #0d8109;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif;">Hanin Mustafa Muhamed Ata</p>
            </div>
            <div class="sixth">
                <i class="fa-solid fa-user fa-2xl" style="color: #d617a3;"></i>
                <br><br>
                <p style="font-family: 'Nunito', sans-serif;">Fatma Mustafa Muhamed Ibrahim</p>
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
                    <!-- facebook, instagram , x -->
                    </div>
            </div>
            <div class="company">
                <a href="" class="aboutus">Company</a>
                <a href="/try/login/about.php" class="aboutus">About us</a>
                <a href="" class="aboutus">Contact us</a>
                <a href="" class="aboutus">Terms and Conditions</a>
            </div>
    </footer>
        <script>
            document.addEventListener("scroll", function() {
                var sitesElements = document.querySelectorAll('.scroll-effect');
                var scrollPosition = window.scrollY;
                var threshold = 200;
                sitesElements.forEach(function(sitesElement) {
                    var rect = sitesElement.getBoundingClientRect();
                    if (rect.top < window.innerHeight - threshold && rect.bottom >= 0) {
                    sitesElement.classList.add('visible');
                    } else if(rect.top >= window.innerHeight - threshold && rect.bottom < 0){
                    sitesElement.classList.remove('visible');
                    }
                });
            });
            window.onscroll = function() {navFunction()};
            let nav = document.getElementById("navScroll");

            function navFunction() {
                if (window.pageYOffset > 0) {
                    nav.classList.add("sticky");
                } else {
                    nav.classList.remove("sticky");
                }
            }
            // document.getElementById("search_input").addEventListener("input", function(){
            //     ul = document.getElementById("Menu");
            //     ul.style.display = "block";
            // });
            // document.getElementById("search_input").addEventListener("blur", function(){
            //     ul = document.getElementById("Menu");
            //     if (document.getElementById("search_input").value.trim() === "")
            //         ul.style.display = "none";
            // });
            // function searchFunction() {
            //         var input, filter, ul, li, a, i;
            //         input = document.getElementById("search_input");
            //         filter = input.value.toUpperCase();
            //         ul = document.getElementById("Menu");
            //         li = ul.getElementsByTagName("li");

            //         for (i = 0; i < li.length; i++) {
            //             a = li[i].getElementsByTagName("a")[0];
            //             if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            //             li[i].style.display = "";
            //             } else {
            //             li[i].style.display = "none";
            //             }
            //         }
            // }

            document.addEventListener("DOMContentLoaded", function () {

                var pageTitle = document.title;

                var navLinks = document.querySelectorAll("nav a");

                for (var i = 0; i < navLinks.length; i++) {

                    if (navLinks[i].innerText === pageTitle) {
                        navLinks[i].classList.add("active");
                        if(navLinks[i].innerText === "Inside Tours" || navLinks[i].innerText === "WorldWide Tours")
                        {
                            var dest = document.getElementById('dest');
                            dest.classList.add("active");
                        }
                        if(navLinks[i] === "Travelers")
                        {
                            var homelink = document.getElementById("homelink");
                            homelink.classList.add("active");
                        }
                    }
                }
            });
            document.getElementById('check').addEventListener('change', function() {
                if (this.checked) {
                    document.querySelector('.items').style.left = '0';
                } else {
                    document.querySelector('.items').style.left = '-100%';
                }
            });

            // function userLoggedIn() {

            // }

            // window.onload = function() {
            //     if (userLoggedIn()) {
            //         document.getElementById('login').style.display = 'none';
            //         document.getElementById('logout').style.display = 'block';
            //     } else {
            //         document.getElementById('login').style.display = 'block';
            //         document.getElementById('logout').style.display = 'none';
            //     }
            // };
        </script>
    </body>
</html>

