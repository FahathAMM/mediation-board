<!DOCTYPE html>
<html lang="en">
<head>
    <?php  error_reporting(0);    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="plugin/chosen/chosen.css"> -->

    <link rel="stylesheet" href="plugin/chosen/chosen.min.css">


    

    <title>Document</title>
</head>


<style>

.bord
		{
			/* box-shadow: 0 0px  5px; */
			padding: 60px;
		
			
			
		}   

        .ff
    {
    font-family:bamini;
    font-size: 15px;
    
    } 

     /* input[type=text]{
        border: 1px solid #000080; */
    


</style>
<body>
    

<?php 

      include('header.php');
      include('connect.php');

?>

    <div class="container" style="margin-top:100px">          

             <form method="POST" action="" enctype="multipart/form-data" >                 
    

            <div class="card">
                <div class=" card-header">
                    Documents
                </div>
                <div class=" card-body">
                    
                <div class="form-group">
                        <label for="inputState">Please Select Dispute Number</label>
                         <select id="inputState" class="form-control hh" name="disputeno" >
                         <option selected disabled value="" >Choose</option>
                             <?php 
                             
                             $geteDisputeNo = $db->prepare("SELECT disputeNo FROM docomplete ORDER BY disputeNo DESC");
                             $geteDisputeNo->execute();

                             while ($row = $geteDisputeNo->fetch()) {
                                 $DisputeNo = $row['disputeNo']; ?>
                          
                            <option><?php echo $DisputeNo ?></option>
                            <?php
                             } ?>
                        </select>
               
                    </div>  

                   
                    
                    <div class="form-group sele" >
                        <input type="submit" class="btn btn-success form-cdontrol" style="float:right" name="sub" id="">
                    </div>
                    <?php 
             
             if (isset($_POST['sub'])) {
                 
            
                 $disputeNo = $_POST["disputeno"];
                 $ShowDisputeNo = $db->Prepare("SELECT * FROM docomplete WHERE disputeNo='$disputeNo'");
                 $ShowDisputeNo->execute();                 
                 $rowshow=$ShowDisputeNo->fetch();


                 }
                
             ?>

             
              <br>
              <br>
              <hr>
              
                <div class="form-group">
                    <label for="formGroupExampleInput">Dispute Number</label>
                    <input type="text" class="form-control  " name="no" value="<?php echo $disputeNo; ?>" readonly>
                </div>
                 
                <div class="form-group">
                    <label for="formGroupExampleInput">First Party</label>
                    <input type="text" class="form-control ff " value="<?php echo $rowshow['Fparty']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Second Party</label>
                    <input type="text" class="form-control ff"  value="<?php echo $rowshow['Sparty']; ?>" readonly>
                </div>
                 <hr>              
                <div class="form-group">
                            <label  class="ff"> </label>
                              <div class="custom-file">
                     
                          <input type="file" name="rlimg" class="custom-file-input"  >
                          <label class="custom-file-label" for="customFile">Request Letter</label>
                        </div>
                      </div>

                      <div class="form-group">
                            <label  class="ff"> </label>
                              <div class="custom-file">
                     
                          <input type="file" name="freport" class="custom-file-input"  >
                          <label class="custom-file-label" for="customFile"> Final Report</label>
                        </div>
                      </div>

                      <div class="form-group">
                            <label  class="ff"> </label>
                              <div class="custom-file">
                     
                          <input type="file" name="more" class="custom-file-input"  >
                          <label class="custom-file-label" for="customFile"> More</label>
                        </div>
                      </div>

                      <div class="text-cdenter"> 
                          <input type="submit" class="btn  btn-success" name="save">

                      </div>
                
                </div>
              </div>

                    <?php 
                    
                    if(isset($_POST['save']))
                    {

                        move_uploaded_file($_FILES["rlimg"]["tmp_name"], "doc/" . $_FILES["rlimg"]["name"]);
                        $rlimg=$_FILES["rlimg"]["name"];

                        move_uploaded_file($_FILES["freport"]["tmp_name"], "doc/" . $_FILES["freport"]["name"]);
                        $freport=$_FILES["freport"]["name"];

                        move_uploaded_file($_FILES["more"]["tmp_name"], "doc/" . $_FILES["more"]["name"]);
                        $more=$_FILES["more"]["name"];


                        $d=$_POST['d'];
                        $no=$_POST['no'];
                       

                         $ImgUpdate = "UPDATE `docomplete` SET requstimg='$rlimg',finalreportimg='$freport',agreover='$more' WHERE disputeNo ='$no'";
  

                        $ImgUpdateexc = $db->prepare($ImgUpdate);
                        $ImgUpdateexc->execute();
 
                         echo "<script> alert ('success ');</script>";
                                

                        ?>
              

            <?php
        }
          
                    
                    ?>



             </form>
 
                    
           


                    <?php 
                    
                    
                    
                    
                    ?>
        





                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>   
                    <script src="plugin/chosen/chosen.jquery.js"></script>   



                    <script>

                            
                  $('document').ready(function(){

                        $('.hh').chosen();
                    })


                    </script>

</body>
</html>