<?php
include("registration_login_logout/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        <title>Home</title>
        <link rel="stylesheet" href="stylelib.css">
        <script src="portscript.js"></script>
    </head>
    <body>
        
        <!--header section-->
        <section class="header">
            <a href="ecomhome.php" class="navbarlogo">TS</a>
            
            <nav class="navbarclass">
                <a href="#" class="active">Home</a>
                <a href="booking.php">Booking</a>
                <a href="packages.php">Packages</a>
                <a href="about.php">About</a>
                <div class="dropdown">
                    <a id="accinfo" class="dropbtn"><?php echo $_SESSION['username']; ?>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="registration_login_logout\cpassword.php">Change Password</a>
                        <a href="registration_login_logout\logout.php">Logout</a>
                    </div>
                </div>
            </nav>
            <div id="mbutton1" class="menu-btn" onclick="btntransform(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </section>
        <!--header section end-->

        <!--Home Package section-->
        <section class="home-packagest">
            <div class="home-slider">
                <div class="mySlides" style="background: url(picsrc/adventure.jpg) no-repeat; z-index:0;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Travel around the world</h3>
                        <a href="packages.php" class="anchor-btn">Discover more</a>
                    </div>
                </div>

                <div class="mySlides" style="background: url(picsrc/home-slide-2.jpg) no-repeat;z-index:0">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>See the world anew</h3>
                        <a href="packages.php" class="anchor-btn">Discover more</a>
                    </div>
                </div>

                <div class="mySlides" style="background: url(picsrc/home-slide-1.jpg) no-repeat;z-index:0">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Make the memories of a lifetime</h3>
                        <a href="packages.php" class="anchor-btn">Discover more</a>
                    </div>
                </div>

                <div class="mySlides" style="background: url(picsrc/guided-tours.jpg);z-index:0">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Tour places of your dreams</h3>
                        <a href="packages.php" class="anchor-btn">Discover more</a>
                    </div>
                </div>
            </div>
        </section>
        <script>carousel()</script>
        <!--Home Package section end-->

        <!--Home services section-->
        <section class="services">
        <h1 class="heading-title">Our Services</h1>
            <div class="box-container servicons">
                <div class="box">
                    <img class="servicon" src="picsrc/icon-1.png" alt="">
                    <p>Adventure</p>
                </div>
                <div class="box">
                    <img class="servicon" src="picsrc/icon-2.png" alt="">
                    <p>Guided Tours</p>
                </div>
                <div class="box">
                    <img class="servicon" src="picsrc/icon-4.png" alt="">
                    <p>Camping</p>
                </div>
                <div class="box">
                    <img class="servicon" src="picsrc/icon-3.png" alt="">
                    <p>Trekking</p>
                </div>
                <div class="box">
                    <img class="servicon" src="picsrc/icon-5.png" alt="">
                    <p>Off Road</p>
                </div>
            </div>
        </section>
        <!--Home services section end-->
        
        <!--Home about section-->
        <section class="aboutushome">
            <div class="image">
                <img src="picsrc/manpeak.jpg" alt="">
            </div>
            <div class="content">
                <h3 class="heading-title">About us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde odit tempora repellendus eum labore voluptatum, itaque corrupti eius minus maxime quibusdam numquam! Maiores ipsum, impedit nam voluptates nesciunt eos odio.</p>
                <a href="about.php" class="anchor-btn">read more</a>
            </div>
        </section>
        <!--Home about section end-->

        <!--Home packages button-->
        <section class="home-packages">
            <h1 class="heading-title"> our packages </h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="picsrc/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                        <a href="booking.php" class="anchor-btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="picsrc/img-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                        <a href="booking.php" class="anchor-btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="picsrc/img-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
                        <a href="booking.php" class="anchor-btn">book now</a>
                    </div>
                </div>
            </div>

            <div class="packages-btn">
                <a href="packages.php" class="anchor-btn">Explore our packages</a>
            </div>
        </section>
        <!--Home packages button-->
        
        <section class="footer">
            <div class="footer-container">
                <div class="box">
                    <h3>Quick Access</h3>
                    <a href="ecomhome.php"><i class="fas fa-angle-right"></i>Home</a><br>
                    <a href="booking.php"><i class="fas fa-angle-right"></i>Booking</a><br>
                    <a href="packages.php"><i class="fas fa-angle-right"></i>Packages</a><br>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a><br>
                </div>
            
                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>Ask us</a><br>
                    <a href="#"><i class="fas fa-angle-right"></i>FAQ</a><br>
                    <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a><br>
                    <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a><br>
                </div>
            
                <div class="box">
                    <h3>Contact Info</h3>
                    <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a><br>
                    <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a><br>
                    <a href="#"><i class="fas fa-envelope"></i>travelsenseguides@gmail.com</a><br>
                </div>

                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"><i class="fab fa-facebook"></i>Facebook</a><br>
                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a><br>
                    <a href="#"><i class="fab fa-instagram"></i>Instagram</a><br>
                    <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a><br>
                </div>
            </div>
            
            <div class="credit">Created by <span>Gurvansh Singh Makkar and Karamjot Kaur</span>| Thanks for visiting!</div>
        </section>
    </body>
</html>