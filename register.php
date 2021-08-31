<!DOCTYPE html>
<?php include('connect.php');
 header('Content-type: text/html; charset=utf-8');  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

   
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
    
   <script>

    $(function(){

      $('.dates #user1').datetimepicker({

        'format':'yyy-mm-dd',
        'autoclose':true
      })
    });
     
   </script>


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
        border-radius: 1px;
        border-style: inset;

        
 }

 form input[type=text]
 {
      border-style: inset;
 }
</style>

                       
</head>
<body>
    
<?php include('header.php') ?>


                  <div class="container">
             
            <h2 class="page-header text-primary cap ">
                   <!-- REGISTER -->
                </h2>
                <hr class=" border-buttom">
         
  <!-- <a class="btn btn-success" style="width: 10%;float:right" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a>  -->

           
  
  <div class="card">
  <h5  class="bg-primary text-white card-header">REGISTER</h5>
  <div class="card-body">
   

  <!-- ******************************************************************************************************* -->
 
  <form method="POST"   class="text-primary font-weight-bold  ">

<?php 
    include('php/docase.php');
    
      $register = new docase();
      $register->Rinsert();

?>
    
         <div class="form-row cap ">
          
            
               <div class="form-group  form-control-sm col-md-3 ">
                   <label for="inputAddress">ஆற்றுப்படுத்திய திகதி</label>
                   <input type="date" style="border-style: inset;" class="form-control  rounded-0 border-primary form-control-sm " name="pfdate"  required >
               </div>

               

         </div>


        <div class="form-row  cap ">
                   
        <div class="form-group col-md-2  form-control-sm">
        <label for="inputAddress"> பிணக்கு/தவறு  இல</label>
        <input type="text" style="border-style: inset;" class="form-control form-control-sm  rounded-0 font-weight-bold border-primary" name="disputeno"required >
        </div>
      
           
        <div class="form-group  form-control-sm col-md-5 ff">
        <label for="inputAddress">1ம் கட்சிக்காரர்</label>
        <input type="text"  class="form-control form-control-sm border-primary font-weight-bold ff" name="fclient" required>
        </div>
        
        <div class="form-group  form-control-sm col-md-5 ff">
        <label for="inputAddress">2ம் கட்சிக்காரர்</label>
        <input type="text" class="form-control form-control-sm border-primary font-weight-bold ff" name="sclient" required>
        </div>
    


        
        </div>

       <div class="form-row cap">
            
                    
       <div class="form-group  form-control-sm  col-md-2  ">
              <label for="inputState">பிணக்கு/தவறு </label>
               <select name="desputecode"  style="font-size: 15px" class="form-control  rounded-0 font-weight-bold ff form-control-sm border-primary" required>
              <option  value="" disabled selected>njupT </option> 
              <option class="font-weight-bold">jtW</option>                  
                <option class="font-weight-bold">gpzf;F</option>

                </select>
             </div>

             <div class="form-group  form-control-sm col-md-5 ">
          <label for="inputState"> பிணக்கு/தவறு  தன்மை</label>
          <select name="disputetype"  style="font-size: 15px" class="form-control  rounded-0 font-weight-bold ff form-control-sm border-primary" required>
          <option class="ff"disabled selected value="">njupT</option>
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
       
        
        <div class="form-group  form-control-sm col-md-5 ff">
          <label for="inputState">பிணக்கு வந்த முறை  </label>
          <select name="disputeplace"  style="font-size: 15px" class="form-control  rounded-0 font-weight-bold form-control-sm border-primary ff" id="car"  required>
            <option value="" disabled selected >njupT</option>
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
                   <input type="text" class="form-control form-control-sm  rounded-0 border-primary"  name="cn"  >
                   </div>
                
                   <div class="form-group  form-control-sm col-md-3 ">
                   <label for="inputAddress">நீதிமன்ற மறுதவணை திகதி</label>
                   <input type="date" id="picker" class="form-control  rounded-0 form-control-sm border-primary " name="cnd"  >
                   </div>
                      
                   <div class="form-group  form-control-sm col-md-3 form-control-sm">
                   <label for="inputAddress">பொலிஸ் இலக்கம்</label>
                   <input type="text"  class="form-control border-primary  rounded-0 form-control-sm" name="pn"  >
                   </div>
                   
                   <div class="form-group  form-control-sm col-md-3 ">
                   <label for="inputAddress">பொலிஸ் இலக்கம் திகதி</label>
                   <input type="date" class="form-control  border-primary  rounded-0 form-control-sm " name="pnd"  >
                   </div>
               <br><br>
      
                   
                   </div>


                   <br><br>
        
      <hr class=" border-buttom">
   

      <div class="form  row justify-content-center">
      <button type="submit" class="btn btn-primary btn-lg sbtn " name="save">Submit</button>

      
      </div>
     
    </form>

<!-- ******************************************************************** -->



  </div>
</div>















    
         
 
 
<br><br>

   </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

 
    
 

    <?php include('fooder.php') ?>

</body>
</html>