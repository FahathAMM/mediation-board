<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>

 <?php 
 
 
 include('connect.php');

 session_start();

 if(!isset ($_SESSION['userid']) || (trim($_SESSION['userid']) == '')) //trim mean.....................
     {

         header('location:loginmain/index.php');
         
     }

 
 
 
 
 ?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script src="https://kit.fontawesome.com/yourcode.js"></script>

   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>  
  
    <style> 
    .bb
    {
        color: white;
        padding: 5px 20px 5px 5px ;
        /* font-weight: bold; */
        font-size:18px;
        
    }
    .logo 
    {
       /* padding: 0 500px 0 0 ; */
       padding-left: 60px;
       font-size: 25px;
      
     
    }
    /* note text box color change method 
		.formborder input[type=text]{
		border: 1px solid red;
		font-size: 17px;
		}
    */
    .sbtn
    {
      width: 200px;
      margin: 20px 0 20px 0;
    }
   .z:hover
    {
         color: white;
         background-color:#007bff;
    }

         
    
       
</style>
</head>
 <body >
 
 
  <header >
       <nav class="navbar navbar-light bg-primary  navbar-expand-lg">

       
                          <a class="logo navbar-brand mb-0 h1 " style="color: white; margin-right:141px" href="index.php"><i  class="fa fa-balance-scale" >MEDIATION BOARD 303</i>
                            
                          </a>
                          


       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                      <ul class="bb nav justify-content-end bg-primary " style="font-size:2px">
                        

 
                              <li class="nav-item ">                
                                  <a class="nav-link active bb " href="index.php"><i class="fa fa-home "></i> Home</a>
                              </li>
                          
                              <li class="nav-item">
                                  <a class="nav-link bb" href="case.php"><i class="	fa fa-database"></i> Data Entry</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link bb" href="viewtables.php"><i class="fa fa-desktop "></i> Data View</a>
                              </li>

 
                              <li class="nav-item">
                                  <a class="nav-link bb" href="optionview.php"><i class="fa fa-ellipsis-v"></i> Option</a>
                              </li> 
 



                              


                              <li class="nav-item ">                
                                  <a class="nav-link active bb " href="mem.php"><i class="fa fa-users "></i> Members</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link bb" href="admin/adminlogin.php"><i class=" fa fa-unlock "></i> Admin</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link bb" href="logout.php"><i class=" fa fa-unlock-alt "></i> Logout</a>
                              </li>
                              
                              
                          
                          </ul>
                          </div>
                        </nav>  

 






                    
                     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>              
</body>
</html>