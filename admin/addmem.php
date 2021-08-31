<!doctype html>
 <?php 
 
 include('../connect.php');
 
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
   font-size:2 10px;
   /* font-weight: bolder; */
 } 
 .ff input[type=text] {
        font-size: 15px;
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

            <h2  style="  margin:0px 0 5px 0;" >NEW MEMBERS</h2>             
            <hr style="color: #808080; margin:0px 0 50px 0;">  

            </div>
        <div class="row" style="margin-left:1px;margin-right:1px" >
           
            <div class="col-lg-12 bd-feedback" >  
		 
		 
                <form action=""  method="post" enctype="multipart/form-data" style="color:#2C2562; font-weight: bold;font-size:17px">
                   
                   
						
							 
								<?php 
								include('member.php');
								$distric = new member();
								$distric->insertdis();
						 
                                 
							 ?>
						
                        
				
          <div class="row">	 
					<div class="row  col-lg-12"> 
                        <div class="form-group   col-lg-12">
							<label  class="ff">  cWg;gpzu; ,y.</label>
                            <input  style="font-size: 13px" type="text" class="form-control  " name="Mid"    required>
							</div>
						 
							<div class="form-group ff col-lg-12">
                            <label  class="ff" >   cWg;gpzu; ngau;    </label>
                            <input type="text" class="form-control" name="mname" >
                            </div>

							<div class="form-group ff col-lg-12">
                            <label for="validationTooltip01">  cWg;gpzu; tpyhrk;    </label>
                            <input type="text" class="form-control" name="madd"    required>
							</div>
							
            
							<div class="form-group  col-lg-12">
                            <label class="ff"> njhlu;G ,yf;fk;    </label>
                            <input type="text" class="form-control" name="phone"    required>
                            </div>

                            <div class="form-group  col-lg-12">
                            <label class="ff">  cWg;gpzu; milahs ml;il ,y.    </label>
                            <input type="text" class="form-control" name="nic"    required>
                            </div>
						
							<div class="form-group  col-lg-12">
                            <label  class="ff"> cWg;gpzu; Gifg;glk;</label>
                              <div class="custom-file">
                     
                          <input type="file" name="img" class="custom-file-input"  >
                          <label class="custom-file-label" for="customFile">Choose Photo</label>
                        </div>
                      </div>
                      </div>	
                         <div class="form-group col-md-12">
                            <button type="submit" name="save" class="btn btn-success"  style="height: 60px;width: 120px;font-size: 25px;">SAVE</button>
						 </div>
							</div>
  
						 </form>
   
		</div>
    
    <!-- Edite -->

                                                    
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
          Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade modall" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Members</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


              <form action="update.php"  method="POST" enctype="multipart/form-data" style="color:#2C2562; font-weight: bold;font-size:17px">
                   
                           
           
             <div class="row modall">	 
             <div class="row  col-lg-12"> 
                           <div class="form-group   col-lg-12">
                 <label  class="ff">  cWg;gpzu; ,y.</label>
                               <input  style="font-size: 13px" type="text" class="form-control  " name="Mid"  id="mid"  required>
                 </div>
                
                       <div class="form-group ff col-lg-12">
                               <label  class="ff" >   cWg;gpzu; ngau;    </label>
                               <input type="text" class="form-control" name="mname" id="mname"   required>
                               </div>
   
                 <div class="form-group ff col-lg-12">
                               <label for="validationTooltip01">  cWg;gpzu; tpyhrk;    </label>
                               <input type="text" class="form-control" name="madd"  id="madd"     required>
                 </div>
                 
               
                 <div class="form-group  col-lg-12">
                               <label class="ff"> njhlu;G ,yf;fk;    </label>
                               <input type="text" class="form-control" name="phone"   id="phone"   required>
                               </div>
   
                               <div class="form-group  col-lg-12">
                               <label class="ff">  cWg;gpzu; milahs ml;il ,y.    </label>
                               <input type="text" class="form-control" name="nic"  id="nic"    required>
                               </div>
               
                 <div class="form-group  col-lg-12">
                               <label  class="ff"> cWg;gpzu; Gifg;glk;</label>
                                 <div class="custom-file">
                        
                             <input type="file" name="img"  id="img"  class="custom-file-input"  >
                             <label class="custom-file-label" for="customFile">Choose Photo</label>
                           </div>
                         </div>
                         </div>	
                     
                 </div>
     
               
 
              </div>
              <div class="modal-footer">
                <button type="submit"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-primary">Update</button>
              </div>
              </form>
            </div>
          </div>
        </div>








		<div style="background-color:#866ec7;margin:40px 0px 0px 0px;width:130%;  ">
	  <div style="text-align:center;font-weight:bolder;color:white;font-size: 30px;margin-bottom:0px;">LIST OF MEMBERS</div> 
	</div>	<table class="table table-sm" style="font-size: 15px">
               
			
          
          
               			 <?php

						    include('../connect.php');
								$result = $db->prepare("SELECT * FROM members  ");
								$result->execute();						
            ?> 
      <thead>         
            
          <tr>
				  <th>  No       </th>
          <th>  ID       </th>
					<th>  Name     </th>       
          <th>  Address  </th> 
          <th>  Mobile   </th> 
					<th>  Nic      </th>           
					<th>  Photo   </th>        
          <th>  Edit   </th>          
          <th >  Delete   </th>          
				                     
                                       
         
                                                                 
       </tr>
         </thead>   
                 
                    <?php 
                    
                    $no=1;
                      for($row=0; $row = $result->fetch(); $row++)
                      {									
                      
                    
                    ?>

                <tbody>
                  <tr>
                      <td style="font-weight: bolder"><?php echo $no++?></td>
                      <td style="font-weight: bolder"><?php echo $row['MID'] ?></td>
                      <td style="font-weight: bolder" class="ff"><?php echo $row['Name'] ?></td>
                      <td style="font-weight: bolder" class="ff"><?php echo $row['Address'] ?></td>
                      <td style="font-weight: bolder" class="ff"><?php echo $row['phone'] ?></td>
                      <td style="font-weight: bolder;font-size:12px"><?php echo $row['MNIC'] ?></td>		          		 
                      <td ><img  src="image/<?php echo $row['Mimg'] ?>" class="rounded-circle" width="70px" height="70px" alt="..."></td>
          
                     
                      <!-- <div class="btn-group"> -->
                      <td> <button type="button" class="btn btn-info   editbtn"  ><i class="fa fa-edit "></i> </button>   </td>  

                      <td>  <a class="btn btn-danger "  href="delete.php?mid=<?php echo  $row['MID'];?>"> <i class="fa fa-trash"></i> </a>   </td>
                        <!-- </div> -->
                     
                    
                  </tr>
                  <?php } ?>
 
                </tbody>
			  </table> 
			 
        </div>

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
  

            
    <script>

        $('document').ready( function(){

        $('.editbtn').on('click',function(){

          $('#edit').modal('show');

          $tr = $(this).closest('tr');


            var data =  $tr.children("td").map(function(){
              return $(this).text()//$(this).image();              
            }).get();

            console.log(data);
            $('#mid').val(data[1]);
            $('#mname').val(data[2]);
            $('#madd').val(data[3]);
            $('#phone').val(data[4]);
            $('#nic').val(data[5]);
             $('#img').val(data[6]);


        });


        



        } );



    </script>




  </body>
</html>