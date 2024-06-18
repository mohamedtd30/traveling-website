<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/dark-mode.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link  rel="icon" type="image/png" sizes="32x32" href="media/logo2.png">
    <script src="js/script.js" defer></script>
    <title>WorldWide Tours</title>
  </head>
  <body>
    <?php
        session_start();
    ?>
    <header class="about-header">
    <div class="background">
            <nav id = "navScroll" class = "nav1">
                <div class="logo">
                    <img src="media/logo.jpg" alt="The image is not loaded" width="60px" height="60px" style="border-radius: 100%;">
                    <p class="webpage_name"><b>Travelers</b></p>
                </div>
                <div class="items">
                    <a href="/try/login/index.php"><b>Home</b></a>
                    <div class="dropdown">
                        <a class="dropbtn" id="dest"><b>Destenation</b> <i class="fa fa-caret-down"></i></a>
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
                <p style="font-size: 70px;"><i>Tour</i></p>
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
      
    </header>


    <section class="about-Body">
      <div class="section-body">

        <img class="image"src="media/pexels-porapak-apichodilok-346885.jpg" height="450px" width="450px"sty>

        <div class="section-text-body">
          <p class="header-section">Welcome to Travelers Your Journey to Blissful Destinations</p>
          <p>At Travelers,
            we believe that travel is not just about reaching a destination;
            it's about experiencing a profound sense of rejuvenation along the way. 
            Our passion for exploration is matched only by our commitment to your well-being,
            and that's why we've seamlessly woven the art of massage into the fabric of your travel experience.</p>
          <p class="header-section">Our Signature Blend of Travel and Wellness :</p>
          <p>At Travelers, 
            we recognize that true relaxation is a holistic concept.
            That's why we've curated a collection of destinations and accommodations that go beyond the ordinary.
            From spa resorts nestled in lush landscapes to wellness retreats overlooking breathtaking vistas,
            each experience is a harmonious blend of travel and rejuvenation.</p>
        </div>
      </div>
      
      <span class="tours-kind header-txt scroll-effect">WorldWide Tours</span>
      <div class="sites-container">
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/Norway/norway.jpg" alt="Norway" id="i1">
            <p class="show-more-less" data-target = "detailsNorway" for="i1">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsNorway">
            
              <div class="des-icons">
                 
                <div class="des-price">
                  <span class="del-price">
                    <i class="fa-solid fa-dollar-sign pound-sign"></i>
                    <span class="disc">2000</span>
                  </span>
                    <span class="dis"></span>
                  </div> 
                    <div class="des-duration">
                      <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">7day</span>
                  </div>
              </div>
                  <div class="stars">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
              </div>
              <div class="des-text">
                Join an amazing travel to nature and mountians and snow. 
              </div>
              
              <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
              <i class="fa-solid fa-caret-up show-less"></i>
          </div>
        
        </div>
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/Switzerland/switzerland.jpg" alt="Switzerland" id="i2">
            <p class="show-more-less" data-target = "detailsSwitzerland" for="i2">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsSwitzerland">
            <div class="des-icons">
             
              <div class="des-price">
                <span class="del-price">
                  <i class="fa-solid fa-dollar-sign pound-sign"></i>
                  <span class="disc">2100</span>
                </span>
                  <span class="dis"></span>
                </div> 
                <div class="des-duration">
                  <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">6day</span>
              </div>
          </div>
         
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star laststar"></i>
            </div>
            
            <div class="des-text">
              Switzerland, where nature's elegance meets cultural refinement,
              invites you to savor a journey of enduring beauty and cherished memories. 
            </div>
            
            <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
            <i class="fa-solid fa-caret-up show-less"></i>
          </div>
        </div>
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/France/france1.jpg" alt="France" id="i3">
            <p class="show-more-less" data-target = "detailsFrance" for="i3">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsFrance">
            <div class="des-icons">
            
              <div class="des-price">
                <span class="del-price">
                  <i class="fa-solid fa-dollar-sign pound-sign"></i>
                  <span class="disc">4000</span>
                </span>
                  <span class="dis"></span>
                </div> 
                <div class="des-duration">
                  <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">8day</span>
              </div>
          </div>
            
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
          
          </div>
          <div class="des-text">
            Journey to Eiffel Tower enjoying and Louvre Museam and
            tring french food for every day would be a great idea for a vacation. 
          </div>
          
          <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
          <i class="fa-solid fa-caret-up show-less"></i>
          </div>
        </div>
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/Italy/italy2.jpg" alt="Italy" id="i4">
            <p class="show-more-less" data-target = "detailsItaly" for="i4">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsItaly">
            <div class="des-icons">
              <div class="des-price">
                <span class="del-price">
                  <i class="fa-solid fa-dollar-sign pound-sign"></i>
                  <span class="disc">3200</span>
                </span>
                  <span class="dis"></span>
                </div> 
              <div class="des-duration">
                  <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">5day</span>
              </div>
          </div>
          
              <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star laststar"></i>
          
          
          </div>
          <div class="des-text">
            Italy, a masterpiece of ancient wonders,
            Renaissance art, and culinary delight,
             invites you to savor la dolce vita in a timeless embrace. 
          </div>
          
          <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
          <i class="fa-solid fa-caret-up show-less"></i>
          </div>
        </div>
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/China/china2.jpg" alt="China" id="i5">
            <p class="show-more-less" data-target = "detailsChina" for="i5">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsChina">
            <div class="des-icons">
              <div class="des-price">
                <span class="del-price">
                  <i class="fa-solid fa-dollar-sign pound-sign"></i>
                  <span class="disc">1900</span>
                </span>
                  <span class="dis"></span>
                </div> 
              <div class="des-duration">
                  <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">7day</span>
              </div>
          </div>
          
              <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star laststar"></i>
          </div>
          
          <div class="des-text">
            The Great Wall of China is an interprising site with ancient chinese civilization
            and delecious chinese food.
          </div>
          
          <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
          <i class="fa-solid fa-caret-up show-less"></i>
          </div>
        </div>
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/UAE/UAE.jpg" alt="Emarates" id="i6">
            <p class="show-more-less" data-target = "detailsEmarates" for="i6">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsEmarates">
            <div class="des-icons">
              <div class="des-price">
                <span class="del-price">
                  <i class="fa-solid fa-dollar-sign pound-sign"></i>
                  <span class="disc">2120</span>
                </span>
                  <span class="dis"></span>
                </div> 
              <div class="des-duration">
                  <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">6day</span>
              </div>
          </div>
          <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
          </div>
          <div class="des-text">
            Emarates, a dazzling metropolis in the heart of the desert,
            where futuristic skyscrapers meet Arabian hospitality,
             creating a realm of opulence and innovation.
          </div>
          
          <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
          <i class="fa-solid fa-caret-up show-less"></i>
          </div>
        </div>
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/maldives/maldives2.jpg" alt="Moldive islands" id="i7">
            <p class="show-more-less" data-target = "detailsMoldive" for="i7">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsMoldive">
            <div class="des-icons">
              <div class="des-price">
                <span class="del-price">
                  <i class="fa-solid fa-dollar-sign pound-sign"></i>
                  <span class="disc">1000</span>
                </span>
                  <span class="dis"></span>
                </div> 
              <div class="des-duration">
                  <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">6day</span>
              </div>
          </div>
        
             
              <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
          
          
          </div>
          <div class="des-text">
            The Maldives, a tropical paradise of azure waters and pristine atolls,
            where luxury overwater bungalows offer a serene escape into breathtaking beauty.
          </div>
          
          <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
          <i class="fa-solid fa-caret-up show-less"></i>
          </div>
          </div>
        <div class="sites scroll-effect">
          <div class="sites-img">
            <img src="media/Turkey/Turkey.jpg" alt="Turkay" id="i8">
            <p class="show-more-less" data-target = "detailsTurkay">Show More!</p>
          </div>
          <div class="hidden-sites" id="detailsTurkay">
            <div class="des-icons">
              <div class="des-price">
                <span class="del-price">
                  <i class="fa-solid fa-dollar-sign pound-sign"></i>
                  <span class="disc">1100</span>
                </span>
                  <span class="dis"></span>
                </div>  
              <div class="des-duration">
                  <i class="fa-solid fa-calendar-days"> </i>   <span style="color: black;">7day</span>
              </div>
          </div>
          
              <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
          
          
          </div>
          <div class="des-text">
            Visiting ancient Istanbool and seeing islamic civilization there would
            be amazing for those loves ancient antiquities.
          </div>
          
          <?php 
                   if (isset($_SESSION['user_name'])){
                      echo " <a href='/try/Login/Form.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
                    else {
                      echo "<a href='/try/Login/logIn_signUp.php' class='des-booking'style='text-decoration: none;color: black;'>Book now</a>";
                    }
              ?>
          <i class="fa-solid fa-caret-up show-less"></i>
          </div>
        </div>
      </div>
      </div>
    </section>
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
                <a href="about.html" class="aboutus">About us</a>
                <a href="" class="aboutus">Contact us</a>
                <a href="" class="aboutus">Terms and Conditions</a>
            </div>
    </footer>


    <script>
      var discounts = [0.2, 0.13, 0.15, 0.15, 0.15, 0.05, 0.05, 0.1];
      var discs = document.querySelectorAll(".disc");
      var dis = document.querySelectorAll('.dis');
      console.log(discs);
      console.log(dis);
      for(var i=0;i<discs.length;i++)
      {
        var discount= parseInt(discs[i].textContent);
        var price =(1-discounts[i])*discount*100;
        Math.round(price);
        price/=100;
        dis[i].innerHTML= `<i class="fa-solid fa-dollar-sign disc"></i>` + String (price);
        dis[i].style.paddingLeft = '5px';
      }
      document.getElementById('check').addEventListener('change', function() {
                if (this.checked) {
                    document.querySelector('.items').style.left = '0';
                } else {
                    document.querySelector('.items').style.left = '-100%';
                }
            });
    </script>
  </body>
</html>
