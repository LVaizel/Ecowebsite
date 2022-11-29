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

        <title>Booking</title>
        <link rel="stylesheet" href="stylelib.css">
        <script src="portscript.js"></script>
    </head>
    <body>
        <section class="header">
            <a href="ecomhome.php" class="navbarlogo">TS</a>
            
            <nav class="navbarclass">
                <a href="ecomhome.php">Home</a>
                <a href="#" class="active">Booking</a>
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
            <div id="button1" class="menu-btn" onclick="btntransform(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </section>

        <div class="heading" width="100%" style="background:url(picsrc/header-bg-3.png) no-repeat">
            <h1>Book now</h1>
        </div>
<!-- booking section starts  -->

        <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="bookform.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="anchor-btn" name="send">

        </form>

        </section>

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