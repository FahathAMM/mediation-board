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
                   PROCESS UPDATE
                </h2>
                <hr class=" border-buttom">
  <a class="btn btn-success" style="width: 10%;float:right" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a> 
         
                
    
      
        <form method="POST" action="" class="text-primary font-weight-bold  ">

        <script>

             

          </script>

      <?php 
          include('connect.php');
          include('php/docase.php');
 
           
          $id = $_GET['id'];

          $sql1 = $db->prepare("SELECT * FROM docomplete WHERE disputeNo = '$id'");
          $sql1->execute();

          $row = $sql1->fetch();

  
 
try {

    if (isset($_POST['save']))
     {

       
        $dpn = $_POST['disputeNo'];
        $pfdate = $_POST['pfdate'];
        $fparty = $_POST['fclient'];
        $sparty = $_POST['sclient'];

   

        $dosoff = $_POST['dosoff'];

        $disputetype = $_POST['disputetype'];
        $disputeplace = $_POST['disputeplace'];

        $courdno = $_POST['cn'];
        $courdnodate = $_POST['cnd'];
        $policeno = $_POST['pn'];

        $policedate = $_POST['policedate'];
            
        $councilfdate = $_POST['cfd'];
        $mainmediator = $_POST['mainmediator'];


        $fmediator = $_POST['fmediator'];
        $smediator = $_POST['smediator'];


        $fterm = $_POST['fterm'];
        $sterm = $_POST['sterm'];
        $tterm = $_POST['tterm'];
        $foterm = $_POST['foterm'];
        $fiterm = $_POST['fiterm'];
        $siterm = $_POST['siterm'];

        $re = $_POST['re'];
        $resultdate = $_POST['resultdate'];

     


      
         
            $sql3 = "UPDATE `docomplete` SET  `disputeNo`='$dpn',`PFdate`='$pfdate',`Fparty`='$fparty',`Sparty`='$sparty',`disputeCode`='$dosoff',`disputeType`='$disputetype',`disputeRcvMethod`='$disputeplace',`Courdno`='$courdno',`Courdnodate`='$courdnodate',`Policeno`='$policeno',`Policenodate`='$policenodate',`Counclformdate`='$councilfdate',`mainmediatior`='$mainmediator',`fmediatior`='$fmediator',`smediatior`='$smediator',`fterm`='$fterm',`sterm`='$sterm',`tterm`='$tterm',`foterm`='$foterm',`fiterm`='$fiterm',`siterm`='$siterm',result='$re',resultdate='$resultdate'   WHERE disputeNo ='$dpn'";
           
            
            $stm = $db->prepare($sql3);
            $stm->execute();
            
            ?>
               <div class="alert alert-success" role="alert">
                Chairman of Z.I Asmeer Process Success  ...If Click <a href="completeview.php" class="alert-link">Here</a>.You can See Process Datas....<br>  
                </div>
            <?php
        }
    
    }
 catch (PDOException $e) {
     echo $sql."<br>".$e->getMessage();
   // echo "<script> alert ('Something Wrong overal Refresh and Again Enter ');</script>";
}

                           
      ?>
    
        <!-- register -->
            
               <div class="form-row cap">
              
              <?php  
                      
                     
 

              ?>
             
               


                    <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress"> ஆற்றுப்படுத்திய திகதி</label>
                         <input type="date"  style="font-size: 16px"  value="<?php echo $row['PFdate'];?>" class="form-control  border-primary form-control-sm font-weight-bold" name="pfdate"    >
                         </div>  

               </div>


              <div class="form-row cap">
             
              <div class="form-group col-md-2 form-control-sm ">
              <label  >பிணக்கு/தவறு  இல</label>
              <input type="text"  style="font-size: 14px" class="form-control font-weight-bold border-primary" value="<?php echo $row['disputeNo']?>" name="disputeNo"   required>
              </div>
                 
              <div class="form-group form-control-sm col-md-5 ff">
              <label >1ம் கட்சிக்காரர்</label>
              <input type="text" style="font-size: 16px" class="form-control font-weight-bold  form-control-sm border-primary" value="<?php  echo $row['Fparty']  ?>" name="fclient"   required>
              </div>
              <div class="form-group col-md-5 form-control-sm ff">
              <label >2ம் கட்சிக்காரர்</label>
              <input type="text"  style="font-size: 16px" class="form-control form-control-sm border-primary" value="<?php  echo $row['Sparty']  ?>" name="sclient"   required>
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
            <option  class="ff">rkhjhdf; Fiyit Vw;gLj;Jk; csf;fUj;Jld; epe;ijnra;jy gpupT 484</option>
            <option  class="ff">Fw;wKiwahd mr;RWj;jy gpupT 486</option>
            <option  class="ff">jpUl;L gpupT 367 my;yJ 367M</option>
            <option  class="ff"> Fw;wKiwahd mj;JkPwy;	gpupT 433</option>
            <option  class="ff"> FLk;g td;Kiw gpzf;F</option>  
            <option  class="ff">epjp njhlu;ghd  gpzf;F</option> 
            <option  class="ff"> fhzp kw;Wk; nrhj;J njhlu;ghd  gpzf;F</option>
            <option  class="ff"> kPWif</option>
 
 
                 
                </select>
              </div>
  
      
              <div class="form-group  form-control-sm col-md-4 ff">
                <label for="inputState">பிணக்கு வந்த முறை  </label>
                <select name="disputeplace"  style="font-size: 15px" class="form-control font-weight-bold form-control-sm border-primary " id="car"  required>
                  <option    value="<?php echo $row['disputeRcvMethod'] ?>"> <?php echo $row['disputeRcvMethod'] ?></option>
                  <option  class="ff"  >ePjpkd;wj;jplk; ,Ue;J</option>
                  <option  class="ff"> nghyp]plk; ,Ue;J</option>
                  <option  class="ff">tq;fp epjp epWtdq;fsplk; ,Ue;J </option>
                  <option  class="ff">Vw;fdNt fhzg;gl;ljpypUe;J</option>
                  <option  class="ff">gpzf;Ff;fhuuplk; ,Ue;J</option>

                </select>
              </div>
              </div>

              <div class="form-row cap ">
                         
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">நீதிமன்ற வழக்கு இலக்கம்</label>
                         <input type="text"  style="font-size: 16px" value="<?php echo $row['Courdno'];?>" class="form-control font-weight-bold form-control-sm border-primary"   name="cn"  >
                         </div>
                      
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">நீதிமன்ற மறுதவணை திகதி</label>
                         <input type="date"  style="font-size: 16px" value="<?php echo $row['Courdnodate'];?>" class="form-control font-weight-bold form-control-sm border-primary " name="cnd"    >
                         </div>
                            
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">பொலிஸ் இலக்கம்</label>
                         <input type="text"  style="font-size: 16px" value="<?php echo $row['Policeno'];?>" class="form-control form-control-sm border-primary font-weight-bold" name="pn"    >
                         </div>
                         
                         <div class="form-group col-md-3 form-control-sm">
                         <label for="inputAddress">பொலிஸ் இலக்கம் திகதி</label>
                         <input type="date"  style="font-size: 16px"  value="<?php echo $row['Policenodate'];?>" class="form-control  border-primary form-control-sm font-weight-bold" name="policedate"    >
                         </div>
                     
                         
                         </div>
       
            <div class="form-row cap" > 

          <div class="form-group col-md-3 form-control-sm">
                <label  >சபை நிறுவிய திகதி </label>
                <input type="date" value="<?php echo $row['Counclformdate'];?>"  style="font-size: 16px" class="form-control  font-weight-bold  form-control-sm border-primary" name="cfd"   >
                </div>
 
                <div class="form-group col-md-3 form-control-sm ff">
                <label for="inputState">  பிரதான மத்தியஸ்தர்</label>
                <select name="mainmediator"  style="font-size: 16px" class="form-control font-weight-bold ff form-control-sm border-primary" >
                <option selected value="<?php echo $row['mainmediatior'];?>"> <?php echo $row['mainmediatior'];?></option>
  
                   <?php
                                
                                $sql = $db->prepare("SELECT * FROM members");
                                $sql->execute();
                             

                                while($row1 = $sql->fetch())
                                {

                              ?>                      
                                
                                <option class="font-weight-bold"><?php echo $row1['Name']; ?></option>
                                <?php } ?> -->
                </select>
              </div>

              <div class="form-group col-md-3 form-control-sm ff">
                <label for="inputState">  1ம் மத்தியஸ்தர்</label>
                <select name="fmediator"  style="font-size: 16px" class="form-control font-weight-bold ff form-control-sm border-primary" >
                <option selected value="<?php echo $row['fmediatior'];?>"><?php echo $row['fmediatior'];?></option>
               
                

                  <?php
                                
                                 $sql = $db->prepare("SELECT * FROM members");
                                 $sql->execute();
                             

                                 while($row1 = $sql->fetch())
                                 {

                              ?>                      
                                
                                <option class="font-weight-bold"><?php echo $row1['Name']; ?></option>
                                <?php } ?>
                </select>
              </div>

              


              <div class="form-group col-md-3 form-control-sm ff">
                <label for="inputState">  2ம் மத்தியஸ்தர்</label>
                <select name="smediator"  style="font-size: 16px" class="form-control font-weight-bold ff form-control-sm border-primary" >
                <option selected value="<?php echo $row['smediatior'];?>"><?php echo $row['smediatior'];?></option>
           
                  
                  <?php
                                
                                $sql = $db->prepare("SELECT * FROM members");
                                $sql->execute();
                             

                                while($row1 = $sql->fetch())
                                {

                              ?>                      
                                
                                <option class="font-weight-bold"><?php echo $row1['Name']; ?></option>
                                <?php } ?>
                </select>
              </div>
              
           
 
            </div>

            <div class="form-row cap">
               
              <div class="form-group form-control-sm col-md-2">
                         <label  >1ம் தவணை திகதி </label>
                         <input   type="date" value="<?php echo $row['fterm'];?>"  class="form-control form-control-sm border-primary" name="fterm">
                         </div>

                         <div class="form-group form-control-sm col-md-2">
                         <label  >2ம் தவணை திகதி</label>
                         <input type="date" value="<?php echo $row['sterm'];?>"    class="form-control form-control-sm border-primary" name="sterm">
                         </div>

                         <div class="form-group form-control-sm col-md-2">
                         <label  >3ம் தவணை திகதி </label>
                         <input type="date"  value="<?php echo $row['tterm'];?>"   class="form-control form-control-sm border-primary" name="tterm">
                         </div>

                         <div class="form-group form-control-sm col-md-2">
                         <label  >4ம் தவணை திகதி </label>
                         <input type="date"  value="<?php echo $row['foterm'];?>"  class="form-control form-control-sm border-primary" name="foterm">
                         </div>
                         
                         <div class="form-group form-control-sm col-md-2">
                         <label  >5ம் தவணை திகதி </label>
                         <input type="date"  value="<?php echo $row['fiterm'];?>"   class="form-control form-control-sm border-primary" name="fiterm">
                         </div>
                         
                         <div class="form-group form-control-sm col-md-2">
                         <label  >6ம் தவணை திகதி</label>
                         <input type="date"  value="<?php echo $row['siterm'];?>"   class="form-control form-control-sm border-primary" name="siterm">
                         </div>    
                         
                        
 
              </div>


                  <div class="form-row cap">

               <div class="form-group col-md-3 ff form-control-sm">
                <label for="inputState">பெறுபேறு </label>
                <select name="re"  style="font-size: 16px " class="form-control ff font-weight-bold form-control-sm border-primary" >
                <option   selected  value="<?php echo $row['result'];?>"><?php echo $row['result'];?> </option>
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
                         <input type="date" value="<?php echo $row['resultdate'];?>"   style="font-size: 16px" class="form-control form-control-sm border-primary" name="resultdate"  >
               </div>
         
            

              </div>

               <div class="form-row cap">
 
              
           

 
         
            

              </div>
                  
            <hr class=" border-buttom">
         
       
            <div class="form  row justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg sbtn " name="save">Submit</button>

         

            
            </div>

            <?php 


 
            ?>
                        





        
          </form>
 
 
<br><br>

   </div>


<?php include('fooder.php') ?>
                 

</body>
</html>