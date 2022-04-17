<?php
require 'adminsecure.php' ; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">

    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <!--navbar section-->
    <section id="navbar">
    <?php  require 'navbar.html'; ?>
      
    </section>
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <!-- <th scope="col">&nbsp;</th> -->
                    <th scope="col">PRODUCT ID</th>
                    <th scope="col">VEHICLE NAME</th>
                    <th scope="col">VEHICLE MADE</th>
                    <th scope="col">VEHICLE MODEL</th>
                    <th scope="col" colspan="2">&nbsp;</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <?php
                       require "conn.php";
                       $mysql = "select * from product"; 
                       $result = $conection->query($mysql);

                       if ($result->num_rows>0) {
                           while ($row = $result->fetch_assoc()){
                             
                               echo '
                               
                               <tr>
                               
                               <th scope="row">'.$row['productID']. '</th>
                               <td class="tm-product-name">'.$row['vehiclename']. '</td>
                               <td>'.$row['vehiclemade']. '</td>
                               <td>'.$row['vehiclemodel']. '</td>
                               <td>
                                 <a href="edit-product.php?id='.$row['productID'].'" class="tm-product-delete-link">
                                   <i class="fa fa-edit tm-product-delete-icon"></i>
                                 </a>
                               <td>
                                 <a href="productdelete.php?id='.$row['productID'].' " class="tm-product-delete-link">
                                   <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                 </a>
                               </td>
                             </tr>
                             
                             
                                
                             

                               '; 
                                   
                               
                           
                           }
                       }
                   ?>
                  
                  
                  <!-- Demo Data  
                    <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name">Lorem Ipsum Product 1</td>
                    <td>1,450</td>
                    <td>550</td>
                    
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr> -->

                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="add-product.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
            <!-- <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button> -->
          </div>
        </div>
       
    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <!-- <script>
      $(function() {
        $(".tm-product-name").on("click", function() {
          window.location.href = "edit-product.php?id = 3";
        });
      });
    </script> -->
  </body>
</html>