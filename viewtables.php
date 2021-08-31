<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/yourcode.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>VIew</title>
</head>
<body>
    
<?php include('header.php') ?>

 <div class="container">
 
     <div class="text-primary" style="margin-top: 8%;"> 

            <h1> VIEW TABLES </h1>
             <hr class=" border-buttom">
     </div>

    <div class="row" style="margin:10% 0 10% 0;">

        <div class="col-md-4">

        <div class="card">
        <h5 class="card-header text-white bg-primary"><i class="fa fa-group"></i> REGISTER</h5>
            <div class="card-body">
                <h5 class="card-title">Register for Dispute</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="regview.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>
          
        </div>

         <div class="col-md-4">

        <div class="card">
            <h5 class="card-header text-white bg-primary"><i class="fa fa-refresh"></i> PROCESS</h5>
            <div class="card-body">
                <h5 class="card-title">Process for Dispute</h5>
                <p class="card-text">With supporting text below as a <br>natural lead-in to additional content.</p>
                <a href="proview.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>

        </div>

         <div class="col-md-4">

        <div class="card">
        <h5 class="card-header text-white bg-primary"><i class=" fa fa-check-square-o "></i> COMPLETE</h5>
            <div class="card-body">
                <h5 class="card-title">Complete for Dispute</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="completeview.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>

        </div>



    </div>
    
 </div>
<?php include('fooder.php') ?>
</body>
</html>