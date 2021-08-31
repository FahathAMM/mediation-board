<!DOCTYPE html>
<?php include('../connect.php') ?>
<html lang="en">


<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>User Signup</title>

    <!-- Icons font CSS-->
    <link href="../admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../admin/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../admin/signup/css/main.css" rel="stylesheet" media="all">
  
</head>

<body >
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color:#866ec7;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">User Registration </h2>
                </div>
                <div class="card-body">
                    <form method="POST" action=""  enctype="multipart/form-data">

                        <?php 
                      
                      
   include('../connect.php');
    
   try 
   {
       if(isset($_POST['save']))
       {
       
           move_uploaded_file($_FILES['img']['tmp_name'],'image/' . $_FILES['img']['name']);
           $img = $_FILES['img']['name'];
        
           $fname = $_POST['fname'];
           $lname = $_POST['lname'];
           $user = $_POST['user'];
           $pass =  $_POST['pass'];
           $email = $_POST['email'];
           $address = $_POST['address'];
                                                
           $sql = "INSERT INTO admin ( `FName`, `LName`, `Email`, `Address`, `Image`, `User`, `Password`,`status`) VALUES ( '$fname','$lname','$email','$address','$img','$user','$pass','user')";
           $db->exec($sql);

                              
              echo "<script> alert ('Success Register');</script>";

               }

            }
             catch (PDOException $e)
             {
                echo $sql."<br>".$e->getMessage();
             }



                        
                        ?>

                    <div class="form-row">

                <?php  
                ?>

                           
                            <div class="value">
                              
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="fname" required>
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lname" required>
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">User Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pass" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Town Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"   type="text" name="address" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Your Photo</div>
                            <div class="value">
                                
                                <div class="input-group">
                                    <input style="border-radius:5px;padding:12px ;background-color:#E5E5E5;font-size: 20px; " type="file" name="img" placeholder="hide">
                                  
                                </div>
                            </div>
                        </div>
                         
                        <div>
                            <button class="btn btn-success btn--radius-2 btn--red"  name="save">Register</button>
                        </div>

                        <?php  
                        
                        
                       
 
                       


                      
                        
                        ?>



                    </form>
                </div>
            </div>
        </div>
    </div>
 
</body> 

</html>
  