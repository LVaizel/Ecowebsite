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

        <title>Packages</title>
        <link rel="stylesheet" href="stylelib.css">
        <script src="portscript.js"></script>
    </head>
    <body>
        <section class="header">
            <a href="ecomhome.php" class="navbarlogo">TS</a>
            
            <nav class="navbarclass">
                <a href="ecomhome.php">Home</a>
                <a href="booking.php">Booking</a>
                <a href="#" class="active">Packages</a>
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

        <div class="heading" width="100%" style="background:url(picsrc/header-bg-2.png) no-repeat">
            <h1>Packages</h1>
        </div>

    <!-- packages section starts  -->

    <section class="packages">

        <h1 class="heading-title">top destinations</h1>

        <div class="box-container">

            <div class="box">
            <div class="image">
                <img src="picsrc/img-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-4.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-5.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-6.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-7.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-8.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-9.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-10.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-11.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="picsrc/img-12.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, perspiciatis!</p>
                <a href="booking.php" class="anchor-btn">book now</a>
            </div>
        </div>

        </div>

        <div class="load-more"><span class="anchor-btn" onclick="loadmore(this)">load more</span></div>

    </section>

<!-- packages section ends -->










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