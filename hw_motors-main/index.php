<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>HELLO-world-Motors/Home</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">    
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lava.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="card_style.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <h1>hello-world <br> <span style="color: #191a20;background-color: #fba70b;">Motors</span></h1>

            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo"style="color:#FBA70B;font-size:1.5em">
                            hello-world Motors
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Services</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">About Us</a>
                            </li>
                            <li class="scroll-to-section"><a href="login.php" style="color: #191a20 !important; " class="btn btn-warning" role="button" >Login Profile</a></li>
                            
                            <!-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="" class="menu-item">About Us</a></li>
                                    <li><a href="" class="menu-item">Features</a></li>
                                    <li><a href="" class="menu-item">FAQ's</a></li>
                                    <li><a href="" class="menu-item">Blog</a></li>
                                </ul>
                            </li> -->
                            <li class="scroll-to-section"><a href="#map" class="menu-item">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>One step ahead to<em> your Dream Car</em></h1>
                        <p>hello-world motors is now providing you your dream car easy
                            installments, starting with PKR: 10,000/- monthly.
                            Now you can preview your check and balance online over here once you are liscensed
                            by <a href="index.html" style="color: #fba70b;">Chaudhry Motors</a>.
                         
                        </p> 
                        <a href="#about" class="main-button-slider">Get  Started</a>.
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>01</h2>
                            <img src="assets/images/features-icon-1.png" alt="">
                            <h4>Quality Products</h4>
                            <p>We are known as town's best car showroom just because of the
                                 quality we provide.</p>
                            <a href="#testimonials" class="main-button">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>02</h2>
                            <img src="assets/images/features-icon-2.png" alt="">
                            <h4>Prime Location</h4>
<p>As we are located in the centre of the city, we are easily accessable from the city.</p>
                            <a href="#testimonials" class="main-button">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2>03</h2>
                            <img src="assets/images/features-icon-3.png" alt="">
                            <h4>Online Platform</h4>
<p>We are providing our customers a dashboard to preview their transiction records and notify them before the due date of their monthly installment.</p>
                            <a href="#testimonials" class="main-button">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- products -->

    <div class="container prodmain">
    <h1 style="color: white;text-align: center;font-size:4em ;font-family: tw cen mt;padding-bottom: 20px;border-bottom: 1px solid white;">Our Automobiles</h1>
        <div class="container-fluid">
            <div class="row">
            <?php
             require "conn.php";
             $mysql = "select * from product"; 
             $result = $conection->query($mysql);

             if ($result->num_rows>0) {
                 while ($row = $result->fetch_assoc()){
                    echo '
                    <div class="col-md-4">
                        <div class="card">
                            <div class="image"> ' ; echo "
                            <img src=img/".$row['productID'].".jpg  /> "; echo '
                            </div>
                            <div class="details">
                                <div class="center">
                                    <h1>Description</h1>
                                    <ul>
                                    <li>Name :'.$row['vehiclename'].'</li>
                                    <li>Made :'.$row['vehiclemade'].'</li>
                                    <li>Model : '.$row['vehiclemodel'].'</li>
                                    <li>Estimated Price : <br> PKR: '.$row['price']. '/-</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    '; 
                 }
            }
             ?>
               <!---Dammy data-->
                <!-- <div class="col-md-4">
                    <div class="card">
                        <div class="image">
                      <img src="assets/images/chmotors.jpg" alt=""> 
                       </div>
                        <div class="details">
                          <div class="center">
                            <h1>Description</h1>
                            <ul>
                              <li>Name :</li>
                              <li>Made :</li>
                              <li>Model :</li>
                              <li>Estimated Price :</li>
                            </ul>
                            
                          </div>
                        </div>
                      </div>
                </div> -->
            </div>
        </div>
    </div>    
   <!-- ***** About US Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2><em>About Us</em></h2>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item service-item">
                            <div class="author">
                                <!-- <i><img src="assets/images/testimonial-author-1.png" alt="Author One"></i> -->
                            </div>
                            <div class="testimonial-content">
                                
                                <h4>Our Vision</h4>
                                <p>
                                There are no costs or hidden fees for selling your car to us. And you will always deal directly with us.

All you have to do is complete the form above and we will contact you to make arrangements.
                                </p>
                                <span>Team Chaudhry Motors</span>
                            </div>
                        </div>
                        <div class="item service-item">
                            <div class="author">
                                <!-- <i><img src="assets/images/testimonial-author-1.png" alt="Second Author"></i> -->
                            </div>
                            <div class="testimonial-content">
                               
                                <h4>Our Mission</h4>
                                <p>Providing our clients Comfort variety and premiuim automobiles in the less
                                    comparable prices so that everyone could acheive their dreams
                                </p>
                                <span>Team Chaudhry Motors</span>
                            </div>
                        </div>

                 </div>
                </div>
            </div>
            <!-- for mobile size -->
            <div id="mobabout">
                <div class="item service-item">
                    <div class="author">
                        <!-- <i><img src="assets/images/testimonial-author-1.png" alt="Second Author"></i> -->
                    </div>
                    <div class="testimonial-content">
                       
                        <h4>Our Mission & Vision</h4>
                        <p>hello-world Motors is on your side, we ensure that everyone is able to buy a used & Brand new car without the hassle.</p>
                        <span> Team hello-world Motors</span>
                    </div>
                </div>
               </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->


    <!-- ***** Footer Start ***** -->
    <footer id="map">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** map Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=540&amp;height=407.23&amp;hl=en&amp;q=Satellite Town Mirpurkhas&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.embedmymap.com/">Embed My Map</a></div><style>.mapouter{position:relative;text-align:right;width:540px;height:407.23px;}.gmap_canvas {overflow:hidden;background:none!important;width:540px;height:407.23px;}.gmap_iframe {width:540px!important;height:407.23px!important;}</style></div>
                    </div>
                    <!-- ***** map End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>It would be pleasure <em>Contact & Meeting US</em></h2>
                        <p>
                            Feel free to contact us anytime any of the suitable way, we recommend meeting
                            us at Chaudhry Motors to experience best of your next car.
                        </p>
                        <ul class="social">
                        <li><a href="https://wa.me/03361832730"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a href="mailto:augustleo555@gmail.com"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="tel: +92 336 1832730"><i class="fa fa-phone"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2022 hello-world Motors

                        | Designed by <a rel="nofollow" href="index.html">SAQIB HASSAN</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>
</html>