<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispute</title>
</head>
<body>
    <?php include('header.php') ?>


    <div class="container">
 
 <div class="text-primary" style="margin-top: 5%;"> 

        <h1> DISPUTES TABLE </h1>
         <hr class=" border-buttom">
 </div>
 
    <div class="row" style="margin:10% 0 10% 0;">

        <div class="col-md-4">

        <div class="card">
        <h5 class="card-header text-white bg-primary"><i class="fa fa-group"></i> REGISTER</h5>
            <div class="card-body">
                <h5 class="card-title">Register for Dispute</h5>
                <p class="card-text">You Must Fill New Register and.. Click submit Button....You Can View,Select Registers</p>
                <a href="register.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>
          
        </div>

         <div class="col-md-4">

        <div class="card">
            <h5 class="card-header text-white bg-primary"><i class="fa fa-refresh"></i> PROCESS</h5>
            <div class="card-body">
                <h5 class="card-title">Process for Dispute</h5>
                <p class="card-text">You Must Select One By One Dispute.. Click One Dispute Number and Select Process</p>
                <a href="proview.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>

        </div>

         <div class="col-md-4">

        <div class="card">
        <h5 class="card-header text-white bg-primary"><i class=" fa fa-check-square-o "></i> COMPLETE</h5>
            <div class="card-body">
                <h5 class="card-title">Complete for Dispute</h5>
                <p class="card-text">You Must Select One By One Dispute.. Click One Dispute Number and Select Process</p>
                <a href="completeview.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>

        </div>



    </div>

</div>

<?php include('fooder.php') ?>
</body>
</html>