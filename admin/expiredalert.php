<!DOCTYPE html>
<html lang="en">
<head>
      
    <?php   include('../connect.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<style>

.cap
  {
    padding: 40px 0 8px 0;
  }
 

 @font-face{
   font-family:bamini;
   src: url('fonts/Bamini.ttf')
 }
 .ff
 {
   font-family:bamini;
   font-size:2 10px;
   font-weight: bolder;
 } 
 .ff input[type=text] {
        font-size: 15px;
        border-radius: 1px;
        border-style: inset;

        
 }

 form input[type=text]
 {
      border-style: inset;
 }
</style>

                       
</head>
<body>
    
<?php include('../header.php') ?>



<?php 




$proSql = "SELECT * FROM doregister ";
$proQuery = $connect->query($proSql);
 $countpro = $proQuery->num_rows;

echo $countpro;
$exp = "";
while ($proResult = $proQuery->fetch_assoc()) {

	$date1 = $proResult['PFdate'];
	//echo $date1;
	$date2 = date('m/d/Y');
	//echo "<br>";
	//echo $date2;
	$diff = abs(strtotime($date2) - strtotime($date1));
	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
	
	//echo "<br>";
	//echo $years;
	//echo $months."<br>";
	//echo $days;
	if($months<1 && $years==0)
	{
		$exp+=1;
	}
	
}
 
?>

<div class="col-md-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="ex.php" style="text-decoration:none;color:black;">
					Expiry Date Alert
					<span class="badge pull pull-right"><?php if ($exp=="")
					{
						echo 0;
					}
					else
					{
						echo $exp;
					}		?></span>	
				</a>
				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div>





</body>
</html>