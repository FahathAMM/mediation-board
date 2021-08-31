<div class="p-4 pt-5">
 <?php 
  include('../connect.php');

      session_start();

      if(!isset ($_SESSION['id']) || (trim($_SESSION['id']) == '')) //trim mean.....................
          {
  
              header('location:adminlogin.php');
			  
          }
 
 
 ?>
<style>
.head
{
    font-weight:600;
    font-size: 18px;
}
.lgbtn
{
    background-color:#b00000;
    color:white;
}
.lgbtn:hover
{
    background-color:maroon;
    color:white;
}
</style>
              <h1><a href="dashbord.php" class="logo" style="font-size: 35px">DASHBORD</a></h1>
              <?php 
              
              ?>
	        <ul class="list-unstyled components mb-5">
	          
              
	        
	          <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle head">Members</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a  href="addmem.php">Add Members</a>
                </li>
                <li>
                    <a   href="group.php">Mediators Summery</a>
                </li>

                <li>
                    <a   href="grpmem.php">Group Formation</a>
                </li>
                
              </ul>
              </li>


              <li>
              <a href="#log" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle head">Account</a>
              <ul class="collapse list-unstyled" id="log">
                <li>
                    <a  href="adminsignup.php">Admin Acoount </a>
                </li>
                 <li>
                    <a   href="../loginmain/usersignup.php">User Acount</a>
                </li> 
                
              </ul>
              </li>

              <li>
              <a href="#rep" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle head">Report</a>
              <ul class="collapse list-unstyled" id="rep">
                <li>
                <a   href="report.php">Monthly Report</a>
                </li>
                 <li>
                    <a   href="totreport.php">Custmize Report</a>
                </li> 
                
              </ul>
              </li>

                    
	          <!-- <li>
              <a  class="head" href="report.php">REPORT</a>
              </li>
               -->
              
	          <li>
              <a class="head" href="../index.php">HOME</a>
              </li>
        
              <li>
	              <a  class="head" href="backup.php">Backup</a>
	          </li>
	        </ul>

	        <div class="mb-5">
			<?php
			
		
            include('../connect.php');
            $aresult = $db->prepare("SELECT * FROM admin WHERE No = '" .$_SESSION['id']."'");
            $aresult->execute();
            $row = $aresult->fetch();
       
		 
		 
			        
                    ?>
						<h3 class="h6" style="margin-left: 40px">NAME  :     <?php echo strtoupper($row['User']) ?></h3> 
						<form action="alogout.php" class="colorlib-subscribe-form">

	            <div class="form-group d-flex">
 
				  <button type="submit" class="btn lgbtn " style="margin:5px 10px;width:200px;" name="alogout" > Logout </button>
				 
	            </div>
	          </form>
					</div>

					<div class="footer">
	        	<p> 
						<!-- <h6 style="font-size:20px">ZI.ASMEER</h6>  Copyright &copy;<script>document.write(new Date().getFullYear());</script>Copyright ©2020 All rights reserved | Chairman of Mediation Board Sainthamaruthu  <i class="icon-heart" aria-hidden="true"></i> by <a style="color:white" href="" target="_blank">ziasmeer@gmail.com</a> -->
				 Copyright &copy;<script>document.write(new Date().getFullYear());</script> Z.I Asmeer The Chairman of Mediation Board Sainthmaruthu.  <i class="icon-heart" aria-hidden="true"></i>  
                       
                    
                    </p>
                         
	        </div>

          </div>
          