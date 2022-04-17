<?php
    require 'secure.php' ;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Ch-Motors/Profile</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">    
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lava.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">

</head>

<body>
   <?php
         $id =  $_GET['id'] ;
         echo $id ;
      
         require 'conn.php' ;
         $sql = "select * from instaform where userID={$id}" ;
         $result = $conection -> query($sql) ;
       
             while($row = $result->fetch_assoc()){

                     
                     $name = $row['vmade'] ;
                     $model = $row['model'] ;
                     $no = $row['regNo'] ;
                     $ownername = $row['Cowner'] ;
                     $balance = $row['monthlyinsta'] ;
                     $date = $row['dues'] ;
                     $total = $row['vTotal'] ;
                   
 
             }
             // Balance == paid amount
          //per  Total amount per month   
        $perinstallment = $total / 48 ;
        // unpaid amount
        $remaining = $total - $balance ;
        // total month amount
        $mtotal = $total / $perinstallment ;
        //total month balance or no of paid
        $mpaid = $balance / $perinstallment ;
        //total month remaining or unpaid
        $munpaid = $remaining / $perinstallment ;
        function amount_round($amount){
            if ($amount <= 0 ){
                return 0 ;
            }else{
                return round($amount) ;
            }

        }

    ?> 

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <h1>Chaudhary <br> <span style="color: #191a20;background-color: #fba70b;">Motors</span></h1>

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
                            Chaudhary Motors
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Satistics</a></li>
                            <!-- <li class="scroll-to-section"><a href="#testimonials" class="menu-item">History</a></li> -->
                            <li class="scroll-to-section"><a href="logout.php" style="color: #191a20 !important;background-color: #fba70b !important; " class="btn btn-warning" role="button" >LogOut</a></li>                            
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

    <!-- ***** Welcome Area End ***** -->
    
    <!-- ***** Features Statistics Start ***** -->
    <section class="section" id="about">
        <div class="welcometypo">
            <h1 style="text-align: center;color:white;font-size:3em;font-family:tw cen mt;padding:20px;border-bottom:1px solid white">Welcome to Installment Dashboard</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2><?php echo $mtotal;?></h2>
                            <img src="assets/images/features-icon-1.png" alt="">
                            <h4>Total<br>Installments</h4>
                            <p><strong>Amount</strong><br>PKR: <?php echo $total ;?>/-</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2><?php echo amount_round($mpaid);?></h2>
                            <img src="assets/images/features-icon-1.png" alt="">
                            <h4>Balance<br>Installments</h4>
                            <p><strong>Amount</strong><br>PKR: <?php echo $balance ;?>/-</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <h2><?php echo amount_round($munpaid);;?></h2>
                            <img src="assets/images/features-icon-1.png" alt="">
                            <h4>Unpaid<br>Installments</h4>
                            <p><strong>Amount</strong><br>PKR: <?php echo $remaining ;?>/-</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- ***** Features Statistics Item End ***** -->

    <div class="left-image-decor"></div>

    <div class="right-image-decor"></div>



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
                            <li><a href="https://augustleo555@gmail.com"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="+92 336 1832730"><i class="fa fa-phone"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2021 Chaudhry Motors

                        | Designed by <a rel="nofollow" href="index.html">Chaudhary Faisal Khalil</a></p>
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