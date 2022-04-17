<?php
require 'adminsecure.php' ; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Product - Dashboard Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">

    
  
  </head>

  <body>
    <?php
         
         $id =  $_GET['id'] ;
      
         require 'conn.php' ;
         $sql = "select * from product where productID={$id}" ;
         $result = $conection -> query($sql);
       
             while($row = $result->fetch_assoc()){

                     
                     $name = $row['vehiclename'] ;
                     $made = $row['vehiclemade'] ;
                     $model = $row['vehiclemodel'] ;
                     $price = $row['price'] ;
                     $imgname = $row['vehicleimage'] ;
                   
 
             }

          
              
          
 
      


     ?>
    <!---Navbar Section -->
    <section id="navbar">
    <?php  require 'navbar.html'; ?>

    </section>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
              <form action="" class="tm-edit-product-form" method="POST" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Vehicle Name
                    </label>
                    <input
                      id="vname"
                      name="vname"
                      value="<?php  echo $name ; ?>"
                      type="text"
                      class="form-control validate"
                      required
                     
                    />
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Made
                    </label>
                    <input
                      id="made"
                      name="made"
                      value="<?php  echo $made ; ?>"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Model No
                    </label>
                    <input
                      id="model"
                      name="model"
                      value="<?php  echo $model ; ?>"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Price</label
                    >
                    <input
                      type="number"
                      class="form-control validate"
                      value="<?php  echo $price ; ?>"
                      name = "price"
                      required
                    ></input>
                  </div>
                 
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="tm-product-img-edit mx-auto">
                      <img src="img/<?php  echo $id ; ?>.jpg" alt="Product image" class="img-fluid d-block mx-auto">
                      <?php  echo $imgname ; ?>
                    </div>
                    <div class="custom-file mt-3 mb-3">
                      <input id="fileInput" type="file" name="image" style="display:none;" />
                      <input
                        type="button"
                        class="btn btn-primary btn-block mx-auto"
                        value="CHANGE IMAGE NOW"
                        onclick="document.getElementById('fileInput').click();"
                      />
                    
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase">Update Now</button>
                  </div>
          </form>

            <?php
                if(isset($_POST['submit'])){
      
              $name = test_input($_POST["vname"]);
              $made = test_input($_POST["made"]);
              $model = test_input($_POST["model"]);
              $price = test_input($_POST["price"]);
              $imgname = $_FILES["image"]["name"] ; 
              $tmploc = $_FILES["image"]["tmp_name"] ; 
         
             
         
         
              
      
              $mysql = "UPDATE `product` SET `vehiclename` = '{$name}' , `vehiclemade` = '{$made}' , `vehiclemodel` = '{$model}' , `price` = '{$price}' , `vehicleimage` = '{$imgname}'  WHERE `product`.`productID` = '{$id}'"; 
                    if($conection->query($mysql) === true){
                      move_uploaded_file($tmploc ,'img/'.$id. '.jpg');     
                        echo "<script type='text/javascript'> alert( 'Record Updated successfully'); </script>" ;
                        
                    } else {
                      echo "Error: " . $mysql . "<br>" . $conection->error;
                    } 
            }
           
                function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                } 
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <!-- <script>
      $(function() {
        $("#expire_date").datepicker({
          defaultDate: "10/22/2020"
        });
      });
    </script> -->
  </body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
