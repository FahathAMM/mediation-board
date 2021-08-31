<?php 
 include('connect.php');
 include('php/docase.php');

 
   $register = new docase();
   $reid = $_REQUEST['regid'];
   
   if($rows=$register->getreg($reid));
   {
       
       header('location:process.php');
   }


?>