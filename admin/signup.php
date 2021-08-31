<?php 

class signup

{

public function adminpage()
{
    
   include('../connect.php');
    
    try 
    {
            
        if(isset($_POST['save']))
        {
        
        move_uploaded_file($_FILES['img']['tmp_name'],'image' . $_FILES['img']['name']);

            $img = $_FILES['img']['name'];
         
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            $address = $_POST['address'];
                                                 
            $sql = "INSERT INTO admin ( `FName`, `LName`, `Email`, `Address`, `Image`, `User`, `Password`,`status`) VALUES ( '$fname','$lname','$email','$address','$img','$user','$pass','admin')";
            $db->exec($sql);

                               
               echo "<script> alert ('Success Register');</script>";

                }

             }
              catch (PDOException $e)
              {
                 echo $sql."<br>".$e->getMessage();
              }

}


}








?>