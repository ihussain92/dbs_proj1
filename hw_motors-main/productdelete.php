<?php
       $id =  $_GET['id'] ;
      
       require 'conn.php' ;
       $mysql = "DELETE from product where productID ='{$id}'";
       if($conection->query($mysql) === true){    
                header('location:products.php') ;
                    
                } else {
                  echo "Error: " . $mysql . "<br>" . $conection->error;
                }
      
      
       
       
 ?>