<?php
require 'adminsecure.php' ; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
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

   
   
   
  </head>

  <body id="reportsPage">
        <?php
               if ($_SERVER["REQUEST_METHOD"] == "POST"){
      
                $vehiclename = test_input($_POST["vehiclename"]);
                $vehicleNo = test_input($_POST["vehicleNo"]);
                $Model = test_input($_POST["Model"]);
                $fowner = test_input($_POST["fowner"]);
                $Cowner = test_input($_POST["Cowner"]);
                $Cnic = test_input($_POST["Cnic"]);
                $total = test_input($_POST["total"]);
                $monthlyinstallment = test_input($_POST["monthlyinstallment"]);
                $Dues = test_input($_POST["Dues"]);
                $email = test_input($_POST["email"]);
                $password = test_input($_POST["password"]);
                $phone = test_input($_POST["phone"]);
                
           
                
           
           
                 require "conn.php";
        
                $mysql = "insert into instaform ( vmade , model , regNo , Cowner , CownerNIC , fowner , monthlyinsta , dues , email , password , phone , vTotal )
                    values( '$vehiclename' , '$Model'  , '$vehicleNo' , '$Cowner' , '$Cnic' , '$fowner'  , '$monthlyinstallment' , '$Dues' , '$email' , '$password' , '$phone' , '$total')" ; 
                      if($conection->query($mysql) === true){
                          $lastid = $conection->insert_id;
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



    <div class="" id="home">
      <!--NavBAr start -->
      <section id="navbar">
      <?php  require 'navbar.html'; ?>

      </section>
          
      <!--NavBAr End -->
      <div class="container mt-5">
       
        <!-- row -->
        <div class="row tm-content-row">
         
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Installment Form</h2>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="tm-signup-form row" method="POST">
                <div class="form-group col-lg-6">
                  <label for="Vehicle name">Made</label>
                  <input
                    id="vechiclename"
                    name="vehiclename"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="vehicle No">Registrated No </label>
                  <input
                    id="vehicleNo"
                    name="vehicleNo"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="Model">Model</label>
                  <input
                    id="Model"
                    name="Model"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="First Owner">First Owner Name</label>
                  <input
                    id="fowner"
                    name="fowner"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="Cowner">Current Owner Name</label>
                  <input
                    id="Cowner"
                    name="Cowner"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="nic">Current Owner NIC</label>
                  <input
                    id="Cnic"
                    name="Cnic"
                    type="text"
                    class="form-control validate"
                    placeholder="4240525588143"
                  />
                </div>

                <div class="form-group col-lg-6">
                  <label for="total">Total amount of Vehicle</label>
                  <input
                    id="total"
                    name="total"
                    type="number"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="Monthly Installment">Installment Amount(Monthly)</label>
                  <input
                    id="monthlyinstallment"
                    name="monthlyinstallment"
                    type="number"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="Dues">Set Due Date</label>
                  <input
                    id="Dues"
                    name="Dues"
                    type="date"
                    class="form-control validate"
                  />
                </div>
              
                <div class="form-group col-lg-6">
                  <label for="email">Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                
                <div class="form-group col-lg-6">
                  <label for="phone">Phone</label>
                  <input
                    id="phone"
                    name="phone"
                    type="tel"
                    class="form-control validate"
                  />
                </div>
               <div class="col-12">
                  <button
                    type="submit"
                    name="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Submit 
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
