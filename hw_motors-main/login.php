<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script> 
    $(function(){
      $("#navbar").load("navbar.html"); 
    });
    </script> -->
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
   

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div  style="background-color: #191a20 !important;" class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <!-- <h2 class="tm-block-title mb-4">Login</h2> -->
                <h1 class="display-2" class="tm-block-title mb-4" style="color: white;">login</h1>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="" method="post" class="tm-login-form" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input
                      name="username"
                      type="text"
                      style="background-color: #191a20 !important; border : none !important ; border-bottom: 2px solid #f5a623 !important"
                      class="form-control validate"
                      id="username"
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input
                      name="password"
                      type="password"
                      style="background-color: #191a20 !important; border : none !important ; border-bottom: 2px solid #f5a623 !important"
                      class="form-control validate"
                      id="password"
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <button
                      type="submit"
                      name="login"
                      class="btn btn-primary btn-block text-uppercase"
                    >
                      Login
                    </button>
                  </div>
                  <!-- <button class="mt-5 btn btn-primary btn-block text-uppercase">
                    Forgot your password?
                  </button> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      
      if(isset($_POST['login'])){
          $user = $_POST["username"] ; 
          $pwd = $_POST["password"] ;
          require 'conn.php' ;
          $sql="select*from instaform where CownerNIC = '$user' and password = '$pwd'";
          $result = $conection -> query($sql);
          $dbuser="";
          $dbpwd="";
          while($row = $result->fetch_assoc()){
                
                $dbuser=$row['CownerNIC'];
                $dbpwd=$row['password'];
                $id = $row['userID'] ;
          }
              if( $user == $dbuser && $pwd == $dbpwd){
                $_SESSION['user']= $dbuser;
                // header('location:profile.php?id='.$id.'');
                echo "<script>window.location='profile.php?id=".$id."';</script>";
              }
              else if( $user == "admin" && $pwd == "admin123"){
                $_SESSION['admin'] = 'admin123' ;
                echo "<script>window.location='admin.php';</script>";
              }else{
                echo "<script>alert('NO USER FOUND');</script>";
              }
          

      } 
      

    ?>
   
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
