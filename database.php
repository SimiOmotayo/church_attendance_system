<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "register_db";
   $con=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$con){
      die('Could not Connect My Sql:' .mysqli_error($conn));
   }
?>