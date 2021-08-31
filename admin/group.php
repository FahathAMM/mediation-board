<!doctype html> 
<html lang="en">
<?php include('../connect.php') ;
 error_reporting(0);


?>

  <head>
  	<title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
  
        
           
    <style>

    .cap
    {
        padding: 60px 0 10px 0;
    }
    

    @font-face{
    font-family:bamini;
    src: url('fonts/Bamini.ttf')
    }
    .ff
    {
    font-family:bamini;
    
    } 

    .ff input[type=text] {
        font-size: 20px;
        font-weight: bolder;
        
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
  <body>
		
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
      <div id="content" class="p-4 p-md-5 pt-5">



      <div class="text-center font-weight-bold" style="font-weight:900px;font-size:30px;color:black">


      <div>Mediation Board Sainthamaruthu</div>
         <div>Mediators Summery</div>
         


      </div>
 
       
<br>
      
              </form>  
 
              <div id="x">   
                        <?php echo  date('M-yy') ?>  
                        <br><br>
                       <table id ="table" class="table table-sm table-striped tb">

                        
                        <thead>
                        <tr>
                          <th>  No       </th>
                          <th>  Name       </th>
                          <th>   Chief Mediator </th>  
                          <th>   Mediator    </th>       
                          <th>   Settlement </th> 
                          <th> Non Settlement   </th> 
                          
                      </tr>
                        </thead>
                        <tbody>

                        <?php 

                           $no = 1;
                           $sql = $db->prepare("SELECT * FROM members ");
                           $sql->execute();

                           $totame =0;
                           $mtotl = 0;
                           $settot = 0;
                           $nonsetl =0;
                           while ($rowmem = $sql->fetch()) {
                          $nname =  $rowmem['Name'];
                          $sql2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE mainmediatior = '$nname'");
                          $sql2->execute();
                          $rowresult = $sql2->fetch(); 
                          $main = $rowresult[0];


                          $sql3 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE fmediatior = '$nname'");
                          $sql3->execute();
                          $rowresult = $sql3->fetch(); 
                          $fmediatior = $rowresult[0];


                          $sql4 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE smediatior = '$nname'");
                          $sql4->execute();
                          $rowresult = $sql4->fetch(); 
                          $smediatior = $rowresult[0];

                          $total = $fmediatior+$smediatior;

                          $sql5 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE result = '6:1' && mainmediatior = '$nname' ");
                          $sql5->execute();
                          $rowresult = $sql5->fetch(); 
                          $result = $rowresult[0];

 
 

                          $sqlnon1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE result = '14:m'&& mainmediatior = '$nname'  ");
                          $sqlnon1->execute();
                           $rownon1 = $sqlnon1->fetch(); 
                           $resultnon1 = $rownon1[0];
                  
                           
                          $sqlnon2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE result = '12:M'&& mainmediatior = '$nname'");
                          $sqlnon2->execute();
                           $rownon2 = $sqlnon2->fetch(); 
                           $resultnon2 = $rownon2[0];
                  
                           
                           $sqlnon3 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE result = '14:m (jtprhsu;)'&& mainmediatior = '$nname'");
                           $sqlnon3->execute();
                           $rownon3 = $sqlnon3->fetch(); 
                           $resultnon3 = $rownon3[0];
                  
                           
                          $sqlnon4 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE result = '12:M (jtprhsu)'&& mainmediatior = '$nname'");
                          $sqlnon4->execute();
                           $rownon4 = $sqlnon4->fetch(); 
                           $resultnon4 = $rownon4[0];
                  
                   
                         
                               $totnon = $resultnon1+$resultnon2+$resultnon3+$resultnon4;
                 
                               $totnon;


                             
                               $totm = $totm+$main;
                               $mtotl = $mtotl+$total;


                               $settot = $settot+$result;

                               $nonsetl+=$totnon;
 
                          
                         ?>

 

                          <tr>
                            <td style="font-weight: bolder"><?php echo $no++?></td>
                            <td style="font-weight: bolder" class="ff"><?php echo $nname ?></td>
                           

                            <td style="font-weight: bolder" class="ff"><?php echo $main ?></td>
                            <td style="font-weight: bolder" class="ff"><?php echo $total ?></td>
                            <td style="font-weight: bolder" class="ff"><?php echo $result ?></td>
                            <td style="font-weight: bolder" class="ff"><?php echo $totnon ?></td>

                            <!-- <td style="font-weight: bolder;font-size:12px"><//?php echo $row['MNIC'] ?></td>		          		  -->
                            <!-- <td ><img  src="image/<//?php echo $row['Mimg'] ?>" class="rounded-circle" width="70px" height="70px" alt="..."></td> -->
                          </tr>

                           <?php } ?>

                           
                          <tr id="tot">
                            <td style="font-weight: bolder"><?php echo "#"?></td>
                            <td style="font-weight: bolder" ><?php   echo "Total" ?></td>
                           

                            <td style="font-weight: bolder" class="ff"><?php  echo $totm   ?></td>
                            <td style="font-weight: bolder" class="ff"><?php  echo $mtotl  ?></td>
                            <td style="font-weight: bolder" class="ff"><?php echo $settot ?></td>
                            <td style="font-weight: bolder" class="ff"><?php echo $nonsetl ?></td>

                            <!-- <td style="font-weight: bolder;font-size:12px"><//?php echo $row['MNIC'] ?></td>		          		  -->
                            <!-- <td ><img  src="image/<//?php echo $row['Mimg'] ?>" class="rounded-circle" width="70px" height="70px" alt="..."></td> -->
                          </tr>
                      
                        </tbody>
                      </table>
                      </div>
 


  <!-- <button onclick="window.print()">Print this page</button> -->
  <button id="j" class="btn btn-primary btn-lg rounded-0" name="save" >Print</button>


                            <form action="" method="POST">


                              <?php 
                              
                              if(isset($_POST['save']))
                              {

                              }
                              
                              
                              ?>




                            </form>




        
		</div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


    <script>

    $('document').ready(function(){

      $('#tot').css('color','red');
      $('.tb').css('font-size','17px');



    })
    </script>

                      <script>

                  $('document').ready(function(){

                    $('#j').click(function(){
                      $('#datee').show();

                  // var divToPrint = document.getElementById('table');
                  //     var htmlToPrint = '' +
                  //         '<style type="text/css">' +
                  //         'table th, table td {' +
                  //         'border:1px solid #000;' +
                  //         'padding:0.5em;' +
                  //         '}' +
                  //         '</style>';
                  //     htmlToPrint += divToPrint.outerHTML;
                  //     newWin = window.open("");
                  //     newWin.document.write(htmlToPrint);
                  //     newWin.print();
                  //     newWin.close();


                      var print = document.getElementById('x');

                      var htmlToPrint = '' +  // doublequation is display text in prinview
                      
                        '  <style type="text/css">'+
                          '  table {'+
                            ' border-collapse: collapse;'+
                          '    width: 100%;'+
                          '  }'+
                              'td{ border-bottom: 1px solid #ddd; padding: 25px 15px 25px 15px;}'+
                          '   td.ff {'+
                          '  padding: 25px 1px 25px 1px;' +
                            '  text-align: left;'+
                            'font-family:bamini;'+
                          
                            '}'+
                          ' </style>';
                          

                        
                  
                          

                    htmlToPrint += print.outerHTML;

                      var pri = window.open('','','width=900,height=1000');
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