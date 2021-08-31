<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
   
        
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
    </style>

</head>
<body>
    
<?php include('header.php') ?>


                  <div class="container">
             
            <h2 class="page-header text-primary cap ">
                   PROCESS
                </h2>
                <hr class=" border-buttom">
  <a class="btn btn-success" style="width: 10%;float:right" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a> 
         
                
    
      
        <form method="POST" action="" class="text-primary font-weight-bold  ">

        <script>

                // function reset(){
                // alert("javascript called");
                // document.getElementById("police").value="";
                // document.getElementById("mname").value="";
                // document.getElementById("“lname”").value="";
                // document.getElementById("“email”").value="";
                // }

          </script>

      <?php 
          include('connect.php');
          include('php/docase.php');

          
            $model = new docase();
            $regid = $_GET['regid'];
            $row=$model->getreg($regid);

           
            $prorow=$model->proinsert();
           
       
            if(!empty($row))
              {

                  
                           
      ?>
    
        <!-- register -->
            
               <div class="form-row cap">
              
              <?php  
                      
                       
 

              ?>
             
                   <div class="form-group col-md-3 form-control-sm ">
                   <label class="ff">  ஆற்றுப்படுத்திய திகதி</label>
                
                     <input type=date  style="font-size: 15px" value="<?php echo $row['PFdate']  ?>" name="pfdate" class="form-control font-weight-bold border-primary" required readonly>
                   
                   </div>

                    
               </div>


              <div class="form-row cap">
             
              <div class="form-group col-md-2 form-control-sm ">
              <label  >பிணக்கு/தவறு  இல</label>
              <input type="text"  style="font-size: 14px" class="form-control font-weight-bold border-primary" value="<?php echo $row['disputeNo']?>" name="disputeNo" readonly required>
              </div>
                 
              <div class="form-group form-control-sm col-md-5 ff">
              <label >1ம் கட்சிக்காரர்</label>
              <input type="text" style="font-size: 16px" class="form-control font-weight-bold  form-control-sm border-primary" value="<?php  echo $row['Fclient']  ?>" name="fclient" readonly required>
              </div>
              <div class="form-group col-md-5 form-control-sm ff">
              <label >2ம் கட்சிக்காரர்</label>
              <input type="text"  style="font-size: 16px" class="form-control form-control-sm border-primary" value="<?php  echo $row['Sclient']  ?>" name="sclient" readonly required>
              </div>
          
              
              </div>

             <div class="form-row cap">
                  
             <div class="form-group col-md-2 form-control-sm ">
                    <label >பிணக்கு/தவறு  </label>
              <input type="text"  style="font-size: 16px" class="form-control font-weight-bold ff form-control-sm border-primary" value="<?php  echo $row['disputeCode']  ?>" name="desputecode" readonly required>
                     
                   
                   </div>

                   <div class="form-group form-control-sm col-md-5 ff">
                <label for="inputState">பிணக்கு/தவறு  தன்மை</label>
              <input type="text"  style="font-size: 16px" class="form-control form-control-sm border-primary" value="<?php  echo $row['disputeType']  ?>" name="disputetype" readonly required>  
              </div>
 
              <div class="form-group form-control-sm col-md-5 ff">
                <label for="inputState">பிணக்கு/தவறு  வந்த முறை  </label>
              <input type="text"  style="font-size: 16px" class="form-control form-control-sm border-primary" value="<?php  echo $row['disputeRcvMethod']  ?>" name="disputeplace" readonly required>
        
              </div>
              </div>

              <div class="form-row cap ">
                         
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">நீதிமன்ற வழக்கு இலக்கம்</label>
                         <input type="text"  style="font-size: 16px" value="<?php echo $row['Courdno'];?>" class="form-control font-weight-bold form-control-sm border-primary" readonly name="cn"  >
                         </div>
                      
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">நீதிமன்ற மறுதவணை திகதி</label>
                         <input type="date"  style="font-size: 16px" value="<?php echo $row['Courdnodate'];?>" class="form-control font-weight-bold form-control-sm border-primary " name="cnd" readonly  >
                         </div>
                            
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">பொலிஸ் இலக்கம்</label>
                         <input type="text"  style="font-size: 16px" value="<?php echo $row['Policeno'];?>" class="form-control form-control-sm border-primary font-weight-bold" name="pn" readonly  >
                         </div>
                         
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">பொலிஸ் இலக்கம் திகதி</label>
                         <input type="date"  style="font-size: 16px"  value="<?php echo $row['Policenodate'];?>" class="form-control  border-primary form-control-sm font-weight-bold" name="pnd" readonly  >
                         </div>
                     
                         
                         </div>
      <?php  
      
          }
           else
            {
              echo "    no data";
            }
              
              ?>
            <div class="form-row cap" > 

                   <div class="form-group col-md-3 form-control-sm">
                         <label  >சபை நிறுவிய திகதி </label>
                         <input type="date"  style="font-size: 16px" class="form-control form-control-sm border-primary" name="cfd"   >
                         </div>
 
              <div class="form-group col-md-3 ff form-control-sm">
                <label for="inputState">பிரதான மத்தியஸ்தர் </label>
                <select name="mainmediator"  style="font-size: 16px " class="form-control ff font-weight-bold form-control-sm border-primary" >
                <option  disabled selected value="">njupT</option>

                  <?php
                                
                                $sql = $db->prepare("SELECT * FROM members");
                                $sql->execute();
                             

                                while($row = $sql->fetch())
                                {

                              ?>                      
                                
                                <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                <?php } ?>
                </select>
              </div>
              <div class="form-group form-control-sm col-md-3 ff">
                <label for="inputState"> 1ம் மத்தியஸ்தர்</label>
                <select name="fmediator"  style="font-size: 16px" class="form-control font-weight-bold form-control-sm border-primary" >
                <option  disabled selected value="">njupT</option>
                  <?php
                                
                                $sql = $db->prepare("SELECT * FROM members");
                                $sql->execute();
                             

                                while($row = $sql->fetch())
                                {

                              ?>                      
                                
                                <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                <?php } ?>
                </select>
              </div>
              <div class="form-group col-md-3 form-control-sm ff">
                <label for="inputState">  2ம் மத்தியஸ்தர்</label>
                <select name="smediator"  style="font-size: 16px" class="form-control font-weight-bold ff form-control-sm border-primary" >
                <option  disabled selected value="">njupT</option>

                  <?php
                                
                                $sql = $db->prepare("SELECT * FROM members");
                                $sql->execute();
                             

                                while($row = $sql->fetch())
                                {

                              ?>                      
                                
                                <option class="font-weight-bold"><?php echo $row['Name']; ?></option>
                                <?php } ?>
                </select>
              </div>
             
              
         
            </div>
            <div class="form-row cap">
                  
                          
              <div class="form-group form-control-sm col-md-2">
                         <label  >1ம் தவணை திகதி </label>
                         <input   type="date" class="form-control form-control-sm border-primary" name="fterm">
                         </div>

                         <div class="form-group form-control-sm col-md-2">
                         <label  >2ம் தவணை திகதி</label>
                         <input type="date"   class="form-control form-control-sm border-primary" name="sterm">
                         </div>

                         <div class="form-group form-control-sm col-md-2">
                         <label  >3ம் தவணை திகதி </label>
                         <input type="date"    class="form-control form-control-sm border-primary" name="tterm">
                         </div>

                         <div class="form-group form-control-sm col-md-2">
                         <label  >4ம் தவணை திகதி </label>
                         <input type="date"   class="form-control form-control-sm border-primary" name="foterm">
                         </div>
                         
                         <div class="form-group form-control-sm col-md-2">
                         <label  >5ம் தவணை திகதி </label>
                         <input type="date"    class="form-control form-control-sm border-primary" name="fiterm">
                         </div>
                         
                         <div class="form-group form-control-sm col-md-2">
                         <label  >6ம் தவணை திகதி</label>
                         <input type="date"    class="form-control form-control-sm border-primary" name="siterm">
                         </div>                        
 
              </div>

               <div class="form-row cap">

               <div class="form-group col-md-3 ff form-control-sm">
                <label for="inputState">பெறுபேறு </label>
                <select name="re"  style="font-size: 16px " class="form-control  font-weight-bold form-control-sm border-primary"   >
                <option  disabled selected > njupT</option>
                  <option class="font-weight-bold">  6:1   </option>
                  <option class="font-weight-bold">  12:M  </option>
                  <option class="font-weight-bold"> 14:m  </option>
                  <option class="font-weight-bold "> 14:m (jtprhsu;)  </option>
                  <option class="font-weight-bold">  12:M (jtprhsu) </option>
                  <option class="font-weight-bold">tpyfpf;nfhs;sg;gl;lJ</option>
                  <option class="font-weight-bold">epuhfupf;fg;gl;lJ</option>
 
                </select>
              </div>

 

              <div class="form-group col-md-3  form-control-sm form-control-sm">
                         <label  >பெறுபேறு திகதி </label>
                         <input type="date"  style="font-size: 16px" class="form-control form-control-sm border-primary" name="resultdate"  >
               </div>
         
            

              </div>
                  
            <hr class=" border-buttom">
         
       
            <div class="form  row justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg sbtn " name="save">Submit</button>

         

            
            </div>
        
          </form>
 
 
<br><br>

   </div>


<?php include('fooder.php') ?>
                      

</body>
</html>