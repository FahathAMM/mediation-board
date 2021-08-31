<!DOCTYPE html>

      
 <!-- ########################################################################################################################## --> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Edite</title>

   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  >
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    
     
  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="js/bootstrap-datepicker.css"  >
    
   


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
 }
 
</style>

                       
</head>
<body>
    
<?php include('header.php') ?>


                  <div class="container">
             
            <h2 class="page-header text-primary cap ">
                   REGISTER EDITE
                </h2>
                <hr class=" border-buttom">
         
  <a class="btn btn-success" style="width: 10%;float:right" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a> 

                <?php 
                include('connect.php');
               

      

          
 
           try {
            include('connect.php');
        
            

            if (isset($_POST['apply'])) {

              
 
                 $dpn = $_POST['disputeno'];
                 $pfdate = $_POST['pfdate'] ;
                 $fparty = $_POST['fclient'];
                 $sparty = $_POST['sclient'];
 
                 $disputetype = $_POST['disputetype'];
 
                 $dosoff = $_POST['dosoff'];
 
                 $disputeplace = $_POST['disputeplace'];
     
                 $courdno = $_POST['cn'];
                 $courdnodate = $_POST['cnd'];
                 $policeno = $_POST['pn'];
                 $policenodate = $_POST['pnd'];

                $sql1 = "UPDATE doregister SET  PFdate='$pfdate',Fclient='$fparty',Sclient='$sparty',disputeCode='$dosoff',disputeType='$disputetype',disputeRcvMethod='$disputeplace',Courdno='$courdno',Courdnodate='$courdnodate',Policeno='$policeno',Policenodate='$policenodate' WHERE disputeNo ='$dpn'";
           
            
                $stm = $db->prepare($sql1);
                $stm->execute();


            
            ?>
          
             <?php  
          
          ?>
          <div class="alert alert-success" role="alert">
           Chairman of Z.I Asmeer Register Edite Success  ...If Click <a href="regview.php" class="alert-link">Here</a>.You can See Process Datas....<br>  
           </div>
       <?php
        
        }
        }
        catch (PDOException $e) {
             echo $sql."<br>".$e->getMessage();
            //echo "<script> alert ('Something Wrong overal Refresh and Again Enter ');</script>";
        }
      

 

                ?>
    
          
        <form method="POST"   class="text-primary font-weight-bold  ">

      <?php 
          
          
          $edid = $_GET['edid'];


                $sql =$db->prepare(" SELECT * FROM doregister WHERE disputeNo = $edid ") ;
                $sql->execute();

                $row = $sql->fetch();
      
      ?>
              <div class="form-row cap">
             
              </div>
               <div class="form-row cap ">
              
               <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress"> ஆற்றுப்படுத்திய திகதி</label>
                         <input type="date"  style="font-size: 16px"  value="<?php echo $row['PFdate'];?>" class="form-control  border-primary form-control-sm font-weight-bold" name="pfdate"    >
                         </div>  

               </div>


              <div class="form-row  cap ">
                         
              <div class="form-group col-md-2  form-control-sm">
              <label for="inputAddress">பிணக்கு இலக்கம்</label>

              <input type="text" value="<?php echo $row['disputeNo'] ?>" class="form-control font-weight-bold form-control-sm border-primary" name="disputeno" required >
              </div>
            
                 
              <div class="form-group  form-control-sm col-md-5 ff">
              <label for="inputAddress">1ம் கட்சிக்காரர்</label>
              <input type="text"  value="<?php echo $row['Fclient'] ?> "class="form-control form-control-sm font-weight-bold border-primary ff" name="fclient" required>
              </div>
              
              <div class="form-group  form-control-sm col-md-5 ff">
              <label for="inputAddress">2ம் கட்சிக்காரர்</label>
              <input type="text"  value="<?php echo $row['Sclient'] ?>" class="form-control form-control-sm font-weight-bold border-primary ff" name="sclient" required>
              </div>
          


              
              </div>

             <div class="form-row cap">
                  
                          
             <div class="form-group  form-control-sm  col-md-2  ">
                    <label for="inputState">பிணக்கு/தவறு </label>
                     <select name="dosoff"  style="font-size: 15px" class="form-control font-weight-bold ff form-control-sm border-primary" required>
                    <option class="ff"  value="<?php echo $row['disputeCode'] ?>" > <?php echo  $row['disputeCode'] ?> </option> 
                    <option class="font-weight-bold">jtW</option>                  
                      <option class="font-weight-bold">gpzf;F</option>

                      </select>
                   </div>

                   <div class="form-group  form-control-sm col-md-6 ff">
                <label for="inputState">பிணக்கின் தன்மை</label>
                <select name="disputetype"  style="font-size: 15px" class="form-control font-weight-bold form-control-sm border-primary" required>
                <option   class="ff" value="<?php echo $row['disputeType'] ?>"> <?php echo $row['disputeType'] ?></option>
                  <option  class="ff">  nghJtplr;rz;il  gpupT 157 </option>                  
                  <option  class="ff">Ntz;Lnkd;W fhak; tpistpj;jy; 	gpupT 314> 315> 325</option>              
                  <option  class="ff">Ntz;Lnkd;W fLq;fhak; tpistpj;jy; 	gpupT 316> 326</option>
                  <option  class="ff"> capUf;F Mgj;ij tpistpf;ff;$ba nranyhd;why; fhak... 	gpupT 323</option>
                  <option  class="ff"> capUf;F my;yJ gpwupd; fhg;Gf;F  gpupT 329</option>
                  <option  class="ff">vtNuDk; Mis KiwNflhfj; jLj;Jitj;jy; my;yJ ... 	gpupT 332> 333</option>
                  <option  class="ff">jhf;Fjy; my;yJ Fw;wKiwahd gyhj;fhuj;ij.... 	gpupT 343> 346> 348> 349</option>
                  <option  class="ff">,og;ghdJ jdpnahUtUf;fhdjhf ,Uf;Fkplj;J Mjdj;ij.. gpupT 386</option>
                  <option  class="ff"> tpistpf;fg;gl;l ,og;G my;yJ Nrjk; jdpnahUtUf;.... gpupT 409> 410</option>
                  <option  class="ff">,og;ghdJ jdpnahUtUf;fhf ,Uf;Fk; tz;zk; gj;J &gh.... gpupT 411</option>
                  <option  class="ff">,og;ghdJ jdpnahUtUf;fhf ,Uf;Fk; tz;zk; fhy;....	gpupT 412</option>
                  <option  class="ff"> Fw;wKiwahd mj;JkPwy;	gpupT 433</option>

                  <option  class="ff">rkhjhdf; Fiyit Vw;gLj;Jk; csf;fUj;Jld; epe;ijnra;jy gpupT 484</option>
                  <option  class="ff">Fw;wKiwahd mr;RWj;jy gpupT 486</option>
                  <option  class="ff">jpUl;L gpupT 367 my;yJ 367M</option>


 
 
                 
                </select>
              </div>
             
              
              <div class="form-group  form-control-sm col-md-4 ff">
                <label for="inputState">பிணக்கு வந்த முறை  </label>
                <select name="disputeplace"  style="font-size: 15px" class="form-control font-weight-bold form-control-sm border-primary " id="car"  required>
                  <option    value="<?php echo $row['disputeRcvMethod'] ?>"> <?php echo $row['disputeRcvMethod'] ?></option>
                  <option  class="ff">ePjpkd;wj;jplk; ,Ue;J</option>
                  <option  class="ff"> nghyp]plk; ,Ue;J</option>
                  <option  class="ff">tq;fp epjp epWtdq;fsplk; ,Ue;J </option>
                  <option  class="ff">Vw;fdNt jPu;T fhzg;gl;ljpypUe;J</option>
                  <option  class="ff">gpzf;Ff;fhuuplk; ,Ue;J</option>

                </select>
              </div>
      
              </div>

              <div class="form-row cap ">
                         
                         <div class="form-group  form-control-sm col-md-3 ">
                         <label for="inputAddress">நீதிமன்ற வழக்கு இலக்கம்</label>
                         <input type="text"  value="<?php echo $row['Courdno'] ?>" class="form-control form-control-sm border-primary"  name="cn"  >
                         </div>
                      
                         <div class="form-group  form-control-sm col-md-3 ">
                         <label for="inputAddress">நீதிமன்ற மறுதவணை திகதி</label>
                         <input type="date"  value="<?php echo $row['Courdnodate'] ?>" id="picker" class="form-control form-control-sm border-primary " name="cnd"  >
                         </div>
                            
                         <div class="form-group  form-control-sm col-md-3 form-control-sm">
                         <label for="inputAddress">பொலிஸ் இலக்கம்</label>
                         <input type="text"   value="<?php echo $row['Policeno'] ?>" class="form-control border-primary form-control-sm" name="pn"  >
                         </div>
                         
                         <div class="form-group  form-control-sm col-md-3 ">
                         <label for="inputAddress">பொலிஸ் இலக்கம் திகதி</label>
                         <input type="date"  value="<?php echo $row['Policenodate'] ?>" class="form-control  border-primary form-control-sm " name="pnd"  >
                         </div>
                     <br><br>
            
                         
                         </div>
 

                         <br><br>
              
            <hr class=" border-buttom">
         
     
            <div class="form  row justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg sbtn " name="apply">Submit</button>

            
            </div>
           
                               


          </form>
 
 
<br><br>

   </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

 
    
 

    <?php include('fooder.php') ?>

</body>
</html>