<?php
require 'adminsecure.php' ; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">

    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">

                        <?php
                         function status($installment){
                             if ($installment<=0) {
                                 return '
                                 <div class="tm-status-circle cancelled">
                                 </div>Unpaid
                                 ';
                             } else {
                                 return '
                                 <div class="tm-status-circle moving">
                                 </div>Paid
                                 ' ;
                             }
                             
                         }
                         
                         ?>
    <div class="" id="home">
       <section id="navbar">
       <?php  require 'navbar.html'; ?>

       </section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row">
               
               
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-overflow">
                        <h2 class="tm-block-title">User List</h2>
                        <div class="media tm-notification-item">
                            <div class="media-body">
                               <p class="mb-2"><b>User Name</b> | <b>Vehicle Name</b></p>
                               <span class="tm-small tm-text-color-secondary">Model</span>
                           </div>
                       </div>
                        <div class="tm-notification-items">
                        <?php
                              require "conn.php";
                              $mysql = "select * from instaform"; 
                              $result = $conection->query($mysql);
       
                              if ($result->num_rows>0) {
                                  while ($row = $result->fetch_assoc()){
                                    
                                      echo '
                                      <div class="media tm-notification-item">
                                      <div class="media-body">
                                         <p class="mb-2"><b>'.$row['Cowner'].'</b> | <b> '.$row['vmade'].'</b></p>
                                         <span class="tm-small tm-text-color-secondary">'.$row['model'].'</span>
                                     </div>
                                 </div>

                                      '; 
                                    }
                                }
                         ?>
                        
                           
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Customer Details</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">OWNER'S NAME</th>
                                    <th scope="col">OWNER'S NIC</th>
                                    <th scope="col">VEHICLES MADE</th>
                                    <th scope="col">MODELS</th>
                                    <th scope="col">VEHICLES NO</th>
                                    <th scope="col">INSTALLMENTS BALANCE</th>
                                    <th scope="col">TOTAL AMOUNT</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                  require "conn.php";
                                  $mysql = "select * from instaform"; 
                                  $result = $conection->query($mysql);
           
                                  if ($result->num_rows>0) {
                                      while ($row = $result->fetch_assoc()){
                                          echo '
                                          <tr>
                                                <th scope="row"><b>'.$row['userID'].'</b></th>
                                                <td>
                                                    <div class="tm-status-circle moving">
                                                    </div>Moving
                                                </td>
                                                <td><b>'.$row['Cowner'].'</b></td>
                                                <td><b>'.$row['CownerNIC'].'</b></td>
                                                <td><b>'.$row['vmade'].'</b></td>
                                                <td>'.$row['model'].'</td>
                                                <td>'.$row['regNo'].'</td>
                                                <td>'.$row['monthlyinsta'].'</td>
                                                <td>'.$row['vTotal'].'</td>
                                        </tr>

                                          ';
                                      }
                                    }

                            ?>
                                
                                <!-- <tr>
                                    <th scope="row"><b>#122348</b></th>
                                    <td>
                                        <div class="tm-status-circle pending">
                                        </div>Pending
                                    </td>
                                    <td><b>Jacob Miller</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>360 km</b></td>
                                    <td>11:00, 10 NOV 2018</td>
                                    <td>04:00, 14 NOV 2018</td>
                                    <td>1000000 Rs</td>
                                    <td>1000000 Rs</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122347</b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled">
                                        </div>Cancelled
                                    </td>
                                    <td><b>George Wilson</b></td>
                                    <td><b>London, UK</b></td>
                                    <td><b>340 km</b></td>
                                    <td>12:00, 22 NOV 2018</td>
                                    <td>06:00, 28 NOV 2018</td>
                                    <td>1000000 Rs</td>
                                    <td>1000000 Rs</td>
                                </tr> -->
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>