<!doctype html>
 <?php 
 
 include('../connect.php');

error_reporting(0);
 
 ?>
<html lang="en">
  <head>
  	<title>Members</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->

		

 <style>

 

 @font-face{
   font-family:bamini;
   src: url('fonts/Bamini.ttf')
 }
 .ff
 {
   font-family:bamini;
   font-size: 15px;
   /* font-weight: bolder; */
 } 
 .ff input[type=text] {
        font-size: 12px;
 }
 
  
		.bd-feedback
		{
			box-shadow: 0 0px  5px;
			padding: 60px;
		
			
			
		}     

		 
		/* note text box color change method */
		.bd-feedback input[type=text] {
		border: 1px solid #b9b9b9;
		font-size: 17px;
		}
    .modall
    {
      padding-left: 15px;
    }


    .modall input[type=text] {
		border: 1px solid #b9b9b9;
		font-size: 17px;
		}
			

   </style>
  </head>
  <body style= "background-color:#ffffff" >
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
		<?php include('side.php') ?>	
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" >
	  <div>

            <h2  style="  margin:0px 0 5px 0;" >Group Formation</h2>             
            <hr style="color: #808080; margin:0px 0 50px 0;">  

            </div>
        <!-- <div class="row" style="margin-left:1px;margin-right:1px" > -->
           
	 
		 
                <form action=""  method="POST" enctype="multipart/form-data" style="color:#2C2562; font-weight: bold;font-size:17px">
                 
                <div class="form-row ">
                <div class="form-group text-center col-md-2">
                <label for="">A</label>
                </div>
                <div class="form-group text-center col-md-2">
                <label for="">B</label>
                </div>
                <div class="form-group text-center col-md-2">
                <label for="">C</label>
                </div>
                <div class="form-group text-center col-md-2">
                <label for="">D</label>
                </div>
                <div class="form-group text-center col-md-2">
                <label for="">E</label>
                </div>
                <div class="form-group text-center col-md-2">
                <label for="">F</label>
                </div>
                </div>

                


                <div class="form-row">


                    <div class="form-group col-md-2">
                      
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="a1" class="form-control ff form-control-lg " required>
                    <option  value=""> njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="b1" class="form-control ff form-control-lg " required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class=" form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="c1" class="form-control ff form-control-lg" required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="d1" class="form-control ff form-control-lg" required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class=" form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="e1" class="form-control ff form-control-lg" required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="f1" class="form-control ff form-control-lg" required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >        

        </div>

        <div class="form-row">


                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="a2" class="form-control ff form-control-lg" required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="b2" class="form-control ff form-control-lg " required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="c2" class="form-control ff form-control-lg " required>
                    <option   value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="d2" class="form-control ff form-control-lg " required>
                    <option   value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="e2" class="form-control ff form-control-lg " required>
                    <option   value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2"> 
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="f2" class="form-control ff form-control-lg " required>
                    <option   value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >
        
</div>
 <div class="form-row">


                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="a3" class="form-control ff form-control-lg " required>
                    <option   value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="b3" class="form-control ff form-control-lg " required>
                    <option   value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="c3" class="form-control ff form-control-lg " required>
                    <option  value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="d3" class="form-control ff form-control-lg " required>
                    <option   value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2">
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="e3" class="form-control ff form-control-lg " required>
                    <option    value="" > njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >

                    <div class="form-group col-md-2"> 
                    <select style="border: 1px solid #b9b9b9; font-size:15px" name="f3" class="form-control ff form-control-lg " required>
                    <option  value="" >njupT</option>
                    <?php
                                    
                                    $sql = $db->prepare("SELECT * FROM members");
                                    $sql->execute();
                                

                                    while($row = $sql->fetch())
                                    {

                                  ?>                      
                                    
                                    <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                    <?php } ?>
                        </select>

                    </div >
        
</div>

 
 
 

<div class="text-center">
<br>         
<button type="submit" class="btn btn-success rounded-0   btn-lg w-50" name="add">Create Group</button>
</div>


<div class="text-center">
<br>         
<a href="<?php $_SERVER['PHP_SELF'];?>" type="submit" class="btn btn-danger  rounded-0  btn-lg w-50" >Refresh</a>
</div>



<div class="form-check form-check-inline cap">
  <input id="reg" class="form-check-input" value="reg" type="radio" name="op" style= "height:30px ; width:30px; color:red" id="inlineRadio1" >
  <label class="form-check-label" for="inlineRadio1">Register</label>
</div>

<div class="form-check form-check-inline cap">
  <input id="pro" class="form-check-input" value="pro" type="radio" name="op" style= "height:30px ; width:30px"  id="inlineRadio2" >
  <label class="form-check-label" for="inlineRadio2">Process</label>
</div>


<?php 
                
                try {
                
                    if(isset($_POST['add']) )
                    {
    
                        $a1 = $_POST['a1'];
                        $b1 = $_POST['b1'];
                        $c1 = $_POST['c1'];
                        $d1 = $_POST['d1'];
                        $e1 = $_POST['e1'];
                        $f1 = $_POST['f1'];

                        $a2 = $_POST['a2'];
                        $b2 = $_POST['b2'];
                        $c2 = $_POST['c2'];
                        $d2 = $_POST['d2'];
                        $e2 = $_POST['e2'];
                        $f2 = $_POST['f2'];
 
    
                        $a3 = $_POST['a3'];
                        $b3 = $_POST['b3'];
                        $c3 = $_POST['c3'];
                        $d3 = $_POST['d3'];
                        $e3 = $_POST['e3'];
                        $f3 = $_POST['f3'];
    
    
                 
                  $now = date('Y-m-d');          
                  $sql = "INSERT INTO `members_group`(`a`, `b`, `c`, `d`, `e`, `f`, `date`)VALUES('$a3','$b3','$c3','$d3','$e3','$f3','$now' ),('$a2','$b2','$c2','$d2','$e2','$f2','$now' ),('$a1','$b1','$c1','$d1','$e1','$f1','$now')";
                  $db->exec($sql);
                  echo "<script> alert ('success group ');</script>";
                   
    
                }
            }
                catch (PDOException $e) {
                    echo $sql."<br>".$e->getMessage();
                 //  echo "<script> alert ('Something Wrong overal Refresh and Again Enter ');</script>";
               }
 
                
                ?>
 
<br>

<table id="x" class="table table-lg table-hover table-bordered   ">
      <thead class=" text-center table-secondary">
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
            <th>F</th>
            <th>date</th>
            
            
        </tr>
      </thead>
         <tbody>
            <?php 
            
                $sqlview = $db->prepare("SELECT * FROM members_group ORDER BY `no` DESC ");


                $sqlview->execute();

                while( $row = $sqlview->fetch()) {
                  $a[]=$row['a'];
                  $b[]=$row['b'];
                  $c[]=$row['c'];
                  $d[]=$row['d'];
                  $e[]=$row['e'];
                  $f[]=$row['f'];


                  $date[]=$row['date'];
                  
              }
            
                for($i=0;$i<=2;$i++)
                {
 
 
                    ?>

          <tr>
             <td class="ff"><?php echo $a[$i] ?></td>
             <td class="ff"><?php echo $b[$i] ?></td>
             <td class="ff"><?php echo $c[$i] ?></td>
             <td class="ff"><?php echo $d[$i] ?></td>
             <td class="ff"><?php echo $e[$i] ?></td>
             <td class="ff"><?php echo $f[$i] ?></td>           
             <td class="ff"><?php echo $date[$i]?></td>     
             
             
          </tr>          
          <?php
           } ?>
        </tbody>

    </table>

    <button id="j" class="btn btn-primary btn-lg rounded-0" name="save" >Print</button>

</div>
</form>
  

</div>
 
		</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
   



    <script>

$('document').ready(function(){

  $('#j').click(function(){
    $('#datee').show();
 


    var print = document.getElementById('x');

    var htmlToPrint = 'Group Formation' +  // doublequation is display text in prinview
    
      '  <style type="text/css">'+
        '  table {'+
          ' border-collapse: collapse;'+
        '    width: 100%;'+
        '  }'+
            'th,td{ border: 1px solid #ddd; padding: 25px 15px 25px 15px;}'+
            'th.ff{font-weight:boder;font-size:18px;font-family:bamini;text-align:left}'+         
        '   td.ff {'+
        '  padding: 25px 1px 25px 1px;'+
          '  text-align: left;'+
          'font-family:bamini;'+
           
          '}'+
          
        ' </style>';
        

      

        

  htmlToPrint += print.outerHTML;

    var pri = window.open('','','width=900,height=500');
      pri.document.write(htmlToPrint);
      pri.document.close();
      pri.focus();
      pri.print();
  //   pri.close();

    
  })


})


</script>






  </body>
</html>