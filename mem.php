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
<style>
 
 @font-face{
   font-family:bamini;
   src: url('fonts/Bamini.ttf')
 }
 .ff
 {
   font-family:bamini;
   /* //font-family:Georgia, 'Times New Roman', Times, serif */
 } 
 .pad
 {
   padding-top: 50px;
 }
 thead 
 {
    background-color:#007bff;
    color: white;
 }
 tr:hover
 {
   background-color: #007bff;
   color: white;
 }
</style>
<?php include('header.php') ?>

 <div class="container">
 
     <div class="text-primary" style="margin-top: 8%;"> 

            <h1> MEMBERS </h1>
             <hr class=" border-buttom">
     </div>
  <div id="g">
     	<table id="table" class="table table-striped table-advance table-sm table-hover">
                <tbody>
			
          
          
               			 <?php

						    include('connect.php');
								$result = $db->prepare("SELECT * FROM members  ");
								$result->execute();						
                
            ?> 
            <thead>
              <tr>
              <th> NO.      </th>
              <th>  ID       </th>
              <th>  NAME     </th>       
              <th>  ADDRESS  </th> 
              <th>  NIC      </th> 
              <th>  MOBILE   </th> 
                    
				    <th> <div style="margin-left:8px "> PHOTO </div>       </th>                               
                                                                 
                  </tr>
          </thead>  
                    <?php 
                    
                    $no=1;
                      for($row=0; $row = $result->fetch(); $row++)
                      {									
                      
                    
                    ?>
                    <tr id="d" style="font-size:15px;font-weight:bold;">
                    <td style="font-weight: bolder"><?php echo $no++; ?></td>
                    <td id="bbb"  ><?php echo $row['MID'] ?></td>
                    <td class="ff"><?php echo $row['Name'] ?></td>
                    <td class="ff"><?php echo $row['Address'] ?></td>
                    <td id="bbb" ><?php echo $row['MNIC'] ?></td>
                    <td class="ff"><?php echo $row['phone'] ?></td>

                    <td><img  src="admin/image/<?php echo $row['Mimg'] ?>" class="rounded-circle" width="70px" height="70px" alt="..."></td>

                    
                
                  </tr>
                  <?php } ?>
 
                </tbody>

        </table> 
        </div>
        <button id="j" class="btn btn-primary btn-lg rounded-0" >Print</button>

			  </div>
 
    </div>
    
 </div>

                <script>

                      $('document').ready(function(){

                        $('#j').click(function(){
 

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

 
 
                          var print = document.getElementById('table');
                     
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




<?php include('fooder.php') ?>
</body>
</html>