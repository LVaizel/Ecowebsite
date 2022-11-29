<?php
include("registration_login_logout/auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <title>About</title>
    <link rel="stylesheet" href="stylelib.css">
    <script src="portscript.js"></script>
</head>

<body>
    <section class="header">
        <a href="ecomhome.php" class="navbarlogo">TS</a>

        <nav class="navbarclass">
            <a href="ecomhome.php">Home</a>
            <a href="booking.php">Booking</a>
            <a href="packages.php">Packages</a>
            <a href="#" class="active">About</a>
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

    <div class="heading" width="100%" style="background:url(picsrc/header-bg-1.png)">
        <h1>About Us</h1>
    </div>

    <!--about section-->
    <section class="about">
        <div class="image">
            <img src="picsrc/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3 class="heading-title">Why choose us?</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla commodi hic, doloribus, debitis aliquid asperiores unde minima doloremque ratione odio, blanditiis facilis tempore temporibus maxime modi in architecto sunt corporis.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, cupiditate tenetur! Maiores, accusamus. Eligendi asperiores, harum eius fugit qui enim voluptatibus adipisci ut, magni tempore, laudantium at aperiam fuga dolore!</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>top destinations</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>affordable</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 guide service</span>
                </div>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- reviews section starts  -->

    <section class="reviews">

        <h1 class="heading-title"> clients reviews </h1>

        <div class="reviewssec">

            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                <h3>john deo</h3>
                <span>traveler</span>
            </div>

            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus repellendus et suscipit optio similique totam aut laborum ullam sequi! In!</p>
                <h3>mason deo</h3>
                <span>traveler</span>
            </div>

            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus enim deserunt, ab at ea iste odio placeat doloribus eum dolores tempore obcaecati, dolore esse aperiam. Excepturi ad quo distinctio, dignissimos voluptate, dolores, saepe animi eum atque sint esse ab exercitationem!</p>
                <h3>stacy deo</h3>
                <span>traveler</span>
            </div>

            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
                <h3>gwen deo</h3>
                <span>traveler</span>
            </div>

            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                <h3>neo</h3>
                <span>the chosen one</span>
            </div>

            <div class="slide">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
                <h3>john dio</h3>
                <span>traveler</span>
            </div>
        </div>

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