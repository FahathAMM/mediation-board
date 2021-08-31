<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediation Home</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   
</head>
<body>

 <?php 
          include('header.php') ;
          include('connect.php');
 
 ?>

 <style>

  .cap
    {
      padding: 15px 0 15px 0;
    }
 </style>
            
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img src="images/c.jpg" width="100%" height="500px" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img  src="images/m.jpg"class="d-block w-100" height="500px" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images/zz.jpg" height="500px" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
  </header>  
 
  
  <div class="container">
             
 
    <div class="row" > 
    
      <div class="col-md-6" style="margin:10% 0 10% 0%">
        
      <img  src="images/asmeer.jpg" class="" alt="Responsive image" width="300px" height="300px">
 
      </div>

      <div class="col-md-6" style="margin:15% 0 15% 0%">
     
        <h3> WELCOME </h3>

        <h1 style="font-weight:900;font-size:80px;color:#007bff">ZI.ASMEER</h1>
        <!-- <img src="d.jpg" class="d-block w-100" height="500px" alt="..."> -->

        <h6>THE CHAIRMAN, <br> MEDIATION BOARD SAINTHAMARUTHU</h6>
     
 
      </div>
    </div>

  </div>    



     
<?php include('fooder.php') ?>
</body>
</html>