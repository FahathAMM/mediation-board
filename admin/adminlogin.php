<!DOCTYPE html>
 <?php 
 
 include('../connect.php');
 
 
 ?>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
	<link rel="icon" type="image/png" href="adminlogin/images/icons/favicon.ico"/>
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/bootstrap/css/bootstrap.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/animate/animate.css">
 	
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/css-hamburgers/hamburgers.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/animsition/css/animsition.min.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/select2/select2.min.css">
  	
	<link rel="stylesheet" type="text/css" href="adminlogin/vendor/daterangepicker/daterangepicker.css">
 
	<link rel="stylesheet" type="text/css" href="adminlogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="adminlogin/css/main.css">
 
</head>
<body>
 
 
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form   class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action=""  >
					<?php 
					 


					include('../connect.php');
					try {
						session_start();
	
						if (isset($_POST['sign'])) {
							$user = $_POST['username'];
							$pass = $_POST['pass'];
					
					
							$sql = $db->prepare("SELECT * FROM admin WHERE User ='$user' and Password = '$pass' and status='admin' ");
							$sql->execute();
	
									
							if ($row = $sql->fetch()) {
								$_SESSION['id'] = $row['No']; ?>
	
	
										<script>       
										alert('Success Login')
										window.location = "dashbord.php"; 
										</script>
										
									<?php
							} else {
								echo "<script> alert ('Invalid Username Password')</script>";
								echo "<script> 	window.location = 'adminlogin.php'</script>";
							}
						}
					} catch (PDOException $e) 
					{
						echo $sql."<br>".$e->getMessage();
					}
	
					
					?>
					<span class="login100-form-title">
					Admin Login
					</span>

					<div class="form-row" style="padding: 40px 5px 0px 0px ">

					

					<div   class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div >

					</div>

					<div class="form-row" style="padding: 40px 5px 0px 0px ">

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					</div>
 

					<div style="padding:90px" class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn" name="sign">
							Login
						</button>
					</div>

				  

				</form>
			</div>
		</div>
	</div>
	
	
 
	<script src="adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
 
	<script src="adminlogin/vendor/animsition/js/animsition.min.js"></script>
 
	<script src="adminlogin/vendor/bootstrap/js/popper.js"></script>
	<script src="adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
 
	<script src="adminlogin/vendor/select2/select2.min.js"></script>
 
	<script src="adminlogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="adminlogin/vendor/daterangepicker/daterangepicker.js"></script>
 
	<script src="adminlogin/vendor/countdowntime/countdowntime.js"></script>
 
	<script src="adminlogin/js/main.js"></script>

</body>
</html>