<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/yourcode.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Option</title>
</head>
<body>
    
<?php include('header.php') ?>

 <div class="container">
 
     <div class="text-primary" style="margin-top: 8%;"> 

            <h1> VIEW OPTION </h1>
             <hr class=" border-buttom">
     </div>

    <div class="row" style="margin:10% 0 10% 0;">

        <div class="col-md-4">

        <div class="card">
        <h5 class="card-header text-white bg-primary"><i class="fa fa-group"></i> FILDER DATA</h5>
            <div class="card-body">
                <h5 class="card-title">Filder Data for Dispute</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="filderdata.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>
          
        </div>

         <div class="col-md-4">

        <div class="card">
            <h5 class="card-header text-white bg-primary"><i class="fa fa-refresh"></i>EXPIRATE ALERT </h5>
            <div class="card-body">
                <h5 class="card-title">Process for Dispute</h5>
                <p class="card-text">With supporting text below as a <br>natural lead-in to additional content.</p>
                <a href="ex.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>

        </div>

         <div class="col-md-4">

        <div class="card">
        <h5 class="card-header text-white bg-primary"><i class=" fa fa-check-square-o "></i> Documents</h5>
            <div class="card-body">
                <h5 class="card-title">Complete for Dispute</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="doc.php" class="btn btn-primary">Click for View</a>
            </div>
            </div>

        </div>



    </div>
  <button style="width: 40%" type="submit" name="search" class="btn btn-lg btn-primary"> <i class="fa fa-search"></i>Search</button>
    

  

 </div>
<?php include('fooder.php') ?>
</body>
</html>