<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Academy - Education Course Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                        <div class="academy-logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <div class="login-content">
                            <a href="#">Register / Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="academyNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                     <!-- Nav Start -->
                            <div class="classynav">
                            <ul>
                                <li><a href="/news">News</a></li>
                                <li><a href="/admission">Admission</a></li>
                                <li><a href="/academics">Academics</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Education</a></li>
                                        <li><a href="admission.html">Commerce</a></li>
                                        <li><a href="about-us.html">IT</a></li>
                                        <li><a href="course.html">Senior High</a></li>
                                        <li><a href="blog.html">Junior High</a></li>
                                        <li><a href="contact.html">Grade School</a></li>
                                    </ul>
                                </li>
                                <li><a href="/about">About</a></li>
                            </ul>
                        </div>
                            <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>(+65) 456 332 5568 889</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>About Us</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

@yield('vission')

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Usefull Links</h6>
                        </div>
                        <nav>
                            <ul class="useful-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Services &amp; Features</a></li>
                                <li><a href="#">Accordions and tabs</a></li>
                                <li><a href="#">Menu ideas</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>Contact</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p>Natalio B. Bacalso S National Hwy, Minglanilla, Cebu, Phillipines</p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>Main: (+63) 9xx xxx xxx <br>Office: 203-808-093</p>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>office@yourbusiness.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>