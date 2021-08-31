<!DOCTYPE html>
<?php  
error_reporting(0);

include('connect.php');



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Filder</title>
</head>
<body>
<?php include('header.php') ?>
<!-- <div style="overflow-x:scroll;"> -->
 <style>
 
 @font-face{
   font-family:bamini;
   src: url('fonts/Bamini.ttf')
 } 
 .ff
 {
   font-family:bamini;
 } 
 .pad
 {
   padding-top: 50px;
 }
 .cap
  {
    padding: 40px 0 10px 0;
  }
  input[type='radio']:after {
        width: 30px;
        height: 30px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 20px;
        height: 20px;
        border-radius: 150px;
        top: 4px;
        left: 5px;
        /* position: relative; */
        background-color:#007bff;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
 

 
   

</style>
 

                
<div style="margin:5% 5% 15% 5%">
 
<h2 class="page-header text-primary  " style=" margin:5px 0 50px 20px;font-size:25px">
                
                   COMPLETE FILDER
                </h2>
                <hr>

<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<form action="" method="POST">





<div class="form-row cap  justify-content-center">

       


<div class="form-check form-check-inline cap">
  <input id="reg" class="form-check-input" value="reg" type="radio" name="op" style= "height:30px ; width:30px; color:red" id="inlineRadio1" >
  <label class="form-check-label" for="inlineRadio1">Register</label>
</div>

<div class="form-check form-check-inline cap">
  <input id="pro" class="form-check-input" value="pro" type="radio" name="op" style= "height:30px ; width:30px"  id="inlineRadio2" >
  <label class="form-check-label" for="inlineRadio2">Process</label>
</div>

<div class="form-check form-check-inline cap">
  <input id="com" class="form-check-input" value="com" type="radio" name="op" style= "height:30px ; width:30px"  id="inlineRadio3"  >
  <label class="form-check-label" for="inlineRadio3">Complete</label>
</div>

</div>


  <div class="form-row cap ">

    <div class="form-group col-md-3 form-control-sm">
    <label>  ஆற்றுப்படுத்திய திகதி</label>                
     <input type=date  style="font-size: 12px" name="pfdate" class="form-control font-weight-bold border-primary" >              
    </div>

     



   <div class="form-group  form-control-sm  col-md-2  ">
    <label for="inputState">பிணக்கு/தவறு  </label>
        <select name="do"  style="font-size: 15px" class="form-control font-weight-bold ff form-control-sm border-primary"  >
    <option  selected>njupT </option> 
    <option class="font-weight-bold">jtW</option>                  
        <option class="font-weight-bold">gpzf;F</option>

        </select>
    </div>
 
 
    <div  class="form-group  form-control-sm col-md-4 ff">
                <label for="inputState">பிணக்கு வந்த முறை  </label>
                <select name="disputeplace"  style="font-size: 15px" class="form-control font-weight-bold form-control-sm border-primary ff" id="car"   >
                  <option  disabled selected >njupT</option>
                  <option  class="ff">ePjpkd;wj;jplk; ,Ue;J</option>
                  <option  class="ff"> nghyp]plk; ,Ue;J</option>
                  <option  class="ff">tq;fp epjp epWtdq;fsplk; ,Ue;J </option>
                  <option  class="ff">Vw;fdNt fhzg;gl;ljpypUe;J</option>
                  <option  class="ff">gpzf;Ff;fhuuplk; ,Ue;J</option>

                </select>
              </div>

 
    <div class="form-group col-md-3 form-control-sm">
    <label > பிணக்கு/தவறு இல</label>                
    <input type=text  style="font-size: 12px" name="dono" class="form-control font-weight-bold border-primary" >              
    </div>

  </div>

  <div class="form-row cap y">
  <div class="form-group col-md-3 ff form-control-sm">
                <label for="inputState">பிரதான மத்தியஸ்தர் </label>
                <select name="mainmediator"  style="font-size: 16px " class="form-control ff font-weight-bold form-control-sm border-primary" >
                <option    selected >njupT</option>

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

              <div class="form-group col-md-3 ff form-control-sm">
                <label for="inputState">   1ம் மத்தியஸ்தர் </label>
                <select name="fmediator"  style="font-size: 16px " class="form-control ff font-weight-bold form-control-sm border-primary" >
                <option    selected >njupT</option>

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
              <div class="form-group col-md-3 ff form-control-sm">
                <label for="inputState">  2ம் மத்தியஸ்தர் </label>
                <select name="smediator"  style="font-size: 16px " class="form-control ff font-weight-bold form-control-sm border-primary" >
                <option    selected >njupT</option>

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

        <div class="form-group col-md-3 form-control-sm">
          <label> சபை நிறுவிய திகதி</label>                
        <input type=date  style="font-size: 12px" name="cfd" class="form-control font-weight-bold border-primary" >              
          </div>

  </div>


  <div class="form-row cap ">
 
  
  <div  class="form-group  form-control-sm col-md-6 b">
                <label for="inputState"> பிணக்கு/தவறு  தன்மை</label>
                <select id="dis" name="disputetype"  style="font-size: 15px" class="form-control font-weight-bold ff form-control-sm border-primary"  >
                <option class="ff"disabled selected >njupT</option>
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

     
              <div class="form-group col-md-3 ff form-control-sm n y">
                <label for="inputState">பெறுபேறு </label>
                <select name="re"  style="font-size: 16px " class="form-control ff font-weight-bold form-control-sm border-primary" >
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

   

              
    <div class="form-group col-md-3 form-control-sm y n">
       <label> பெறுபேறு  திகதி </label>                
      <input type=date  style="font-size: 12px" name="red" class="form-control font-weight-bold border-primary" >              
    </div>

    </div>

    <div class="form-row cap ">

           
    <div class="form-group col-md-3 form-control-sm ">
    <label class="ff" > திகதியிலிருந்து   </label>                
     <input type=date  style="font-size: 12px" name="pfds" class="form-control font-weight-bold border-primary" >              
    </div>

    
    <div class="form-group  col-md-3 form-control-sm ">
    <label class="ff">  திகதிவரை</label>                
     <input type=date style="font-size: 12px"  name="pfde" class="form-control font-weight-bold border-primary" >              
    </div>

             
    <div class="form-group col-md-3 form-control-sm n y" >
    <label class="ff" > பெறுபேறு திகதியிலிருந்து   </label>                
     <input type=date  style="font-size: 12px" name="redates" class="form-control font-weight-bold border-primary" >              
    </div>

    
    <div class="form-group  col-md-3 form-control-sm n y" >
    <label class="ff"> பெறுபேறு திகதிவரை</label>                
     <input type=date style="font-size: 12px"  name="redatee" class="form-control font-weight-bold border-primary " >              
    </div>

 
    </div>

 
  <br><br>
  <hr>
  <div class="form  row justify-content-center">
  <button style="width: 40%" type="submit" name="search" class="btn btn-lg btn-primary"> <i class="fa fa-search"></i>Search</button>
</div>


<hr>


</form>



<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<br><br>
<table class="table table-sm table-hover table-responsive table-bordered">
<a class="btn btn-success bn" style="width: 10%" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a> 



<tbody>
  

    <tr class="bg-primary  " style="color:white;font-size:12px;">    
         <th >  தொ இலக்கம் </th>
        <th>  பிணக்கு/தவறு  இலக்கம் </th>
          <th>  ஆற்றுப்படுத்திய திகதி    </th>
          <th>  1ம்.கட்சிக்காரர்  </th>
          <th>  2ம்.கட்சிக்காரர்    </th>                  
          <th>  பிணக்கு/தவறு         </th>         
        <th  >  பிணக்கு/தவறு.தன்மை </th>
          <th>  பிணக்கு./தவறு  வந்த முறை </th>
          <th>நீதிமன்ற வழக்கு இலக்கம்   </th>                  
          <th>  நீதிமன்ற.மறுதவணை திகதி     </th>         
          <th>  பொலிஸ் இலக்கம் </th>
          <th>  பொலிஸ்.இலக்கம் திகதி </th>

          <th >  சபை.நிறுவிய திகதி      </th>         
          <th > பிரதான மத்தியஸ்தர் </th>
          <th > 1ம்.மத்தியஸ்தர் </th>
          <th >2ம்.மத்தியஸ்தர்   </th>                  
          <th > 1ம்.தவணை திகதி     </th>         
          <th > 2ம்.தவணை திகதி </th>
          <th >  3ம்.தவணை திகதி </th>
          <th >  4ம்.தவணை திகதி </th>
          <th >  5ம்.தவணை திகதி </th>
          <th >  6ம்.தவணை திகதி </th>

          <th >  பெறுபேறு </th>
          <th > பெறுபேறு திகதி </th>

 
    </tr>

       <?php 

                if(isset($_POST['search']))
                {
                    
                    $pfds = $_POST['pfds'];
                    $pfde = $_POST['pfde'];

   
                    $aatrudate = $_POST['pfdate'];

                    $dono = $_POST['dono'];
                    $do = $_POST['do'];
                    $disputeplace = $_POST['disputeplace'];

                    $mainmediator = $_POST['mainmediator'];
                    $fmediator = $_POST['fmediator'];
                    $smediator = $_POST['smediator'];
                    $disputetype = $_POST['disputetype'];
                    $red = $_POST['red'];
                    $re = $_POST['re'];


                    $redates = $_POST['redates'];
                    $redatee = $_POST['redatee'];


                    $op = $_POST['op'];

  
                    // if (isset($_POST['op']))
                    // {
                    //     $op =  $_POST['op'];
                    // }
                          
                                if ($op == "com") 
                                {
                                    $sql = $db->prepare("SELECT * FROM docomplete WHERE  disputeCode = '$do' OR disputeNo = '$dono' OR disputeRcvMethod = '$disputeplace' OR mainmediatior = '$mainmediator' OR fmediatior = '$fmediator' OR smediatior ='$smediator' OR PFdate='$aatrudate' OR disputeType = '$disputetype' OR resultdate = '$red' OR PFdate >='$pfds' AND PFdate <='$pfde' OR result='$re' OR  resultdate >='$redates' AND resultdate<='$redatee'");
                                    $sql->execute();
                                }
                                elseif ($op=="pro") 
                                {
                                  $sql = $db->prepare("SELECT * FROM doprocess WHERE  disputeCode = '$do' OR disputeNo = '$dono' OR disputeRcvMethod = '$disputeplace' OR mainmediatior = '$mainmediator' OR fmediatior = '$fmediator' OR smediatior ='$smediator' OR PFdate='$aatrudate' OR disputeType = '$disputetype'  OR PFdate >='$pfds' AND PFdate <='$pfde'");
                                  $sql->execute();
                                }
                                elseif ($op=="reg") 
                                {
                                  $sql = $db->prepare("SELECT * FROM doregister WHERE  disputeCode = '$do' OR disputeNo = '$dono' OR disputeRcvMethod = '$disputeplace' OR PFdate >='$pfds' AND PFdate <='$pfde'");
                                  $sql->execute();
                                }
                         
                         
                             $no=1;
          
                             while ($row = $sql->fetch()) {
                                 ?>


                      
              
                    <tr>
                    <td style="font-weight: bolder;"><?php echo $no++ ?></td>

                          <td style="font-weight: bolder"><?php echo $row['disputeNo'] ?></td>
                          <td class="ff"><?php echo($row['PFdate']) ?></td>
                          <td class="ff"><?php echo($row['Fparty']) ?></td>
                          <td class="ff"><?php echo($row['Sparty']) ?></td>
                          <td class="ff"><?php echo($row['disputeCode'])?></td>
                          <td   class="ff"><?php echo($row['disputeType'])?></td>
                          <td class="ff " ><?php echo($row['disputeRcvMethod'])?></td>
                          
                          <td style="font-size: 14px"><?php echo($row['Courdno'])?></td>
                          <td class="ff"><?php echo($row['Courdnodate'])?></td>
                          <td style="font-size: 14px"><?php echo($row['Policeno'])?></td>
                          <td class="ff"><?php echo($row['Policenodate'])?></td>

                          <td class="ff"><?php echo($row['Counclformdate'])?></td>
                          <td class="ff"><?php echo($row['mainmediatior'])?></td>
                          <td class="ff"><?php echo($row['fmediatior'])?></td>
                          <td class="ff"><?php echo($row['smediatior'])?></td>
                        
                          <td class="ff "><?php echo($row['fterm'])?></td>
                          <td class="ff "><?php echo($row['sterm'])?></td>
                          <td class="ff "><?php echo($row['tterm'])?></td>
                          <td class="ff "><?php echo($row['foterm'])?></td>
                          <td class="ff "><?php echo($row['fiterm'])?></td>
                          <td class="ff "><?php echo($row['siterm'])?></td>

                          <td class="ff " ><?php echo($row['result'])?></td>
                          <td class="ff "><?php echo($row['resultdate'])?></td>

                       <?php
                             }
             
          }
            

             
                     
                  ?>

           
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> 

<!-- 
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
                    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>      -->
        </tr>
        
      </tbody>
    </table> 
    </div>
    </div>
    
                  <script>

                  $('document').ready(function(){

                  

                   $('#reg').click(function(){

                    $('div').show();
                  
                      $('.y').hide();
                      
                   })
                  
                   $('#pro').click(function(){

                     $('div').show();  
                     $('th').show(); 
                         
                  //   $('.p').hide();

                     $('.n').hide();
                 


                    })
                 $('#com').click(function(){

                      $('div').show();
                    

})
                  })



                  </script>



    <?php include('fooder.php') ?>

</body>
</html>