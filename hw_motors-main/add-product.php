<?php
require 'adminsecure.php' ; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
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
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
  <?php
     
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
      
        $name = test_input($_POST["vname"]);
        $made = test_input($_POST["made"]);
        $model = test_input($_POST["model"]);
        $price = test_input($_POST["price"]);
        $imgname = $_FILES["image"]["name"] ; 
        $tmploc = $_FILES["image"]["tmp_name"] ; 
   
      
   
   
         require "conn.php";

        $mysql = "insert into product ( vehiclename , vehiclemade , vehiclemodel , price , vehicleimage )  values( '$name' , '$made'  , '$model' , '$price' , '$imgname' )" ; 
              if($conection->query($mysql) === true){
                  $lastid = $conection->insert_id;
                  move_uploaded_file($tmploc ,'img/'.$lastid.'.jpg');      
                  echo "<script type='text/javascript'> alert( 'Record created successfully.Last ID is $lastid'); </script>" ;
                  
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

      <section id="navbar">
        <?php  require 'navbar.html'; ?>

      </section>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                 
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="tm-edit-product-form" method="POST" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Vehicle Name
                    </label>
                    <input
                      id="vname"
                      name="vname"
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
                      name = "price"
                      required
                    ></input>
                  </div>
                  
                  <!-- <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="expire_date"
                            >Expire Date
                          </label>
                          <input
                            id="expire_date"
                            name="expire_date"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                         -->
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" style="display:none;"  name = 'image' />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
              </div>
            </form>
          
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
        $("#expire_date").datepicker();
      });
    </script> -->
  </body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


