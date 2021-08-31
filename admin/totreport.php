<!doctype html> 
<html lang="en">
  <?php  
error_reporting(0);
?>
  <head>
  	<title>Customize Report</title>
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
    font-size: 15px;
    
    } 

    .ff input[type=text] {
        font-size: 12px;
       
    }

      
table, th, td
      {
        border: 1px solid black;
      

        
      }

    


    .modall input[type=text] {
		border: 1px solid #b9b9b9;
		font-size: 17px;
		}

    .ver
    {
      writing-mode: vertical-lr;
      display:inline-table;
      top: 50%;
      transform: rotate(180deg);
      word-spacing: 1px;
      letter-spacing: 1px;
      
    }
    
    
</style>

  </head>
  <body class="bg-white">
		
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

      
             

             <h1 class="page-header text-primary" style="margin:1% 0 5% 0">
                    DISPUTES OF RECORD SUMMERY
                 </h1>
                 <hr class=" border-buttom">

                
                
 <form  method="POST">

                 <div class="row" style="margin-top:5%">
                
              
        <div class="form-group  form-control-sm col-md-3 ">
          <select name="month"  style="font-size: 15px;border: 1px solid #b9b9b9;" class="form-control  rounded-0 font-weight-bold ff form-control-sm" required>
          <option class="ff " value="" selected disabled>njupT</option> 
           <?php 
            
            $rdate    = date('yy-m-d');
            $rdate    = explode('-',$rdate);
            $year     = $rdate[0];
            $month    = $rdate[1];
 
            $i = 1;
            while ($i<=12) {
           
                
                ?>
            <option> <?php echo $i++; ?> </option>                  
          <?php
            } ?>
          </select>
        </div>

        <div class="form-group  form-control-sm col-md-3 ">
        
          <select name="year"  style="font-size: 15px;border: 1px solid #b9b9b9;" class="form-control  rounded-0 font-weight-bold ff form-control-sm" required>
          <option class="ff" value="" selected disabled>njupT</option> 
          <?php 
            $i=2019;
            while ($i<=2025) {
           
                
                ?>
         
            <option > <?php echo $i++; ?> </option>                  
          <?php
            } ?>
          </select>
        </div>

        <div class="form-group  form-control-sm col-md-2 ">
        <button type="submit" class="btn btn-success bg-success form-control text-white btn-sm rounded-0 " name="find"><i class="fa fa-search"></i> Search</button>     

        </div>

        <div class="form-group  form-control-sm col-md-2 ">
         <a class="btn btn-info bg-danger form-control text-white btn-sm rounded-0 "  href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link" ><i class="fa fa-refresh mt-2" ></i> Refresh </a> 

          
         </div>
                
         </div>
       
        </form>

        <?php 
        

        if (isset($_POST['find'])) {
            $pmonth = $_POST['month'];
            $year = $_POST['year'];
   

            echo $year.'-'.$pmonth;

            $rdate    = date('yy-m-d');
            $rdate    = explode('-', $rdate);
            //  $year     = $rdate[0];
            //echo $month    = $rdate[1]; ?>

<br><br>

              
 
          <div id="x">
         
                  <?php
                  

                  //monthly report data
                  //   $pmonth = date('m',strtotime("last month")) ;
                  //   $pyear = date('Y',strtotime("last year")) ;
                  //   $year = date('Y');
                  //  $lasttwopmonth = date('m',strtotime("last month")) ;


                  // //previus
                  
               //    $previusdate = date('m',strtotime("last month"));
                  // $previusdate1 = date('m',strtotime("-4 month"));
                   
       
                //     echo   $previusdatef = date('d',strtotime("last day "));


                  // $rdate    = date('Y-m-d');
                  // $rdate    = explode('-',$rdate);
                  // $year     = $rdate[0];
                  // $pmonth   = $rdate[1];
       
                //  echo $lastmonth = date('m',strtotime('last month'));

                //   $lastmonth = $pmonth-1;
                   
                  ?>
 
<?php
        $ppmonth = $pmonth-1;
        // previoues ongoing,discuess

            if ($pmonth==1) {
                $piyear = $year-1;
                $sqlpreviusongoing1 = $db->prepare("SELECT * FROM recvie WHERE  MONTH(date)='12' AND YEAR(date)='$piyear'");
                $sqlpreviusongoing1->execute();
                while ($rowp = $sqlpreviusongoing1->fetch()) {
                    $aaaaa[]=$rowp['ongoing'];
                    $bbbbb[] = $rowp['discuess'];
                }
            } else {
                $sqlpreviusongoing1 = $db->prepare("SELECT * FROM recvie WHERE  MONTH(date)='$ppmonth' AND YEAR(date)='$year'");
                $sqlpreviusongoing1->execute();
                while ($rowp = $sqlpreviusongoing1->fetch()) {
                    $aaaaa[]=$rowp['ongoing'];
                    $bbbbb[] = $rowp['discuess'];
                }
            } 
            
            //nodisscuess and ongoing

            if ($pmonth==1) {
              $piyear = $year-1;
              $sqlpreviusongoing1 = $db->prepare("SELECT * FROM recvie WHERE  MONTH(date)='12' AND YEAR(date)='$piyear'");
              $sqlpreviusongoing1->execute();
              while ($rowp = $sqlpreviusongoing1->fetch()) {
                  $ongo[]=$rowp['ongoing'];
                  $disc[] = $rowp['discuess'];
              }
          } else {
              $sqlpreviusongoing1 = $db->prepare("SELECT * FROM recvie WHERE  MONTH(date)='$pmonth' AND YEAR(date)='$year'");
              $sqlpreviusongoing1->execute();
              while ($rowp = $sqlpreviusongoing1->fetch()) {
                  $ongo[]=$rowp['ongoing'];
                  $disc[] = $rowp['discuess'];
              }
          } 
            
            
            
            
            
            ?>
  <?php

        // previoues ongoing,discuess

          if ($pmonth==01) {
              $sqlpreviusongoing11 = $db->prepare("SELECT * FROM type WHERE MONTH(date)='12' AND YEAR(date)='$piyear'");
              $sqlpreviusongoing11->execute();
              while ($rowp2 = $sqlpreviusongoing11->fetch()) {
                  $cc[]=$rowp2['ongoing'];
                  $dd[] = $rowp2['disscuess'];
              }
          } else {
              $sqlpreviusongoing11 = $db->prepare("SELECT * FROM type WHERE  MONTH(date)='$ppmonth' AND YEAR(date)='$year'");
              $sqlpreviusongoing11->execute();
              while ($rowp2 = $sqlpreviusongoing11->fetch()) {
                  $cc[]=$rowp2['ongoing'];
                  $dd[] = $rowp2['disscuess'];
              }
          }
          
          //nodisscuess and ongoing
          
          if ($pmonth==01) {
            $sqlpreviusongoing11 = $db->prepare("SELECT * FROM type WHERE MONTH(date)='12' AND YEAR(date)='$piyear'");
            $sqlpreviusongoing11->execute();
            while ($rowp2 = $sqlpreviusongoing11->fetch()) {
                $rongo[]=$rowp2['ongoing'];
                $rdisc[] = $rowp2['disscuess'];
            }
        } else {
            $sqlpreviusongoing11 = $db->prepare("SELECT * FROM type WHERE  MONTH(date)='$pmonth' AND YEAR(date)='$year'");
            $sqlpreviusongoing11->execute();
            while ($rowp2 = $sqlpreviusongoing11->fetch()) {
                $rongo[]=$rowp2['ongoing'];
                $rdisc[] = $rowp2['disscuess'];
            }
        }
          
           
          
          ?>
           
 

                <table class="table table-hover table-sm "  >
                  <thead >
                     <tr > 
                   
                      <th scope="col"></th>
                      <th class="ff "  scope="col">khtl;lk;: mk;ghiw kj;jpa];j rigfs; Fohk; kw;Wk; mjd; ,yf;fKk;: rha;e;jkUJ - 303       Mz;L kw;Wk; khjk; <?php  echo $pmonth.'.'.$year  ?></th>

                      <th class=" ff " scope="col">fle;j khjq;fspy;; fye;Jiuahlg; glhky; vQ;rpa gpzf;Ffspd; vz;zpf;if</th>
                      <th class="ff" scope="col">fle;j khjq;fspy;; fye;Jiuahlg ;gl;L jtizg; Nghlg;gl;l gpzf;Ffspd; vz;zpf;if</th>
                      <th class="ff" scope="col">Fwpj;j khjj;jpy; ngw;Wf; nfhs;sg;gl;l Gjpa gpzf;Ffspd; vz;zpf;if</th>

                      <th class="ff" scope="col">Fwpj;j khjj;jpy;  fye;Jiuahlg; gltpUf;Fk; nkhj;j gpzf;Ffspd; vz;zpf;if</th>

                      <th class="ff" scope="col">Fwpj;j khjj;jpy; jPu;f;fg;gl;likf;fhd rhd;wpjo; toq;fg;gl;l gpzf;Ffspd; vz;zpf;if</th>
                      <th class="ff" scope="col">Fwpj;j khjj;jpy; jPu;f;fg;glhikf;fhd rhd;wpjo; toq;fg;gl;l gpzf;Ffspd; vz;zpf;if</th>
                      <th class="ff" scope="col">tUifj; juhikf; fhuzkhf jPu;f;fg; glhikf;fhd rhd;wpjo; toq;fg;gl;l gpzf;Ffspd; vz;zpf;if</th>
                      
                      <th class="ff" scope="col">epuhfupf;fg;gl;l gpzf;Ffspd; vz;zpf;if</th>
                      <th class="ff"   scope="col">tpyf;fpf; nfhs;sg;gl;l gpzf;Ffspd; vz;zpf;if</th>
                      <th class="ff"  scope="col">Fwpj;j khjj;jpy; KbT fhzg;gl;l nkhj;j  gpzf;Ffspd; vz;zpf;if</th>

                      <th class="ff"   scope="col">Fwpj;j  khjj;jpy;;; fye;Jiuahlg ;gl;L jtiz  Nghlg; gl;l gpzf;Ffspd; vz;zpf;if</th>
                      <th  class="ff"   scope="col">fye;Jiuahlg; glhky; vQ;rpa gpzf;Ffspd; vz;zpf;if</th>

                     
                     
                    </tr> 

                    <tr  class="bg table-active" > 
                  <th   scope="col">No</th>
                      <th style="text-align:left" class="ff" scope="col">gpzf;F Mw;Wg;gLj;jg;gly;</th>

                      <th   scope="col">A</th>
                      <th   scope="col">B</th>
                      <th     scope="col">C</th>

                      <th    scope="col">D</th>

                      <th    scope="col">E</th>
                      <th    scope="col"> F</th>
                      <th    scope="col">G</th>
                      
                      <th    scope="col">H</th>
                      <th    scope="col">I</th>
                      <th    scope="col">J</th>

                      <th    scope="col">K</th>
                      <th    scope="col">L</th>                 

                    </tr>
                  </thead>
                  <?php
                  
              $domethod = array( 'ePjpkd;wj;jplk; ,Ue;J', 'nghyp]plk; ,Ue;J','tq;fp epjp epWtdq;fsplk; ,Ue;J','Vw;fdNt jPu;T fhzg;gl;ljpypUe;J','gpzf;Ff;fhuuplk; ,Ue;J');
    
            $no=1;
             
            $settletotal = 0;
            $widrawaltotal = 0;
            $rejecttotal=0;
            $nonsettlementtotal=0;
            $nonsettlementtotalcahirman=0;
            $lmonthregistertotal=0;
            $lmonthtotaldispute=0;
            $lmonthnodiscuess=0;
            $lmonthonggoing=0;
            $xtotal=0;
            $totalcomplete=0;
            $previusongoingtot=0;
            $a=1;
            $pongoingtotal=0;
            $pdisscuess=0;
            for ($i = 0; $i < count($domethod); $i++) {
                $sqlprolastmonth = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and  result = '6:1' and YEAR(resultdate) = '$year' AND  disputeRcvMethod = '$domethod[$i]' ");
                $sqlprolastmonth->execute();
                $rowrprolmonth = $sqlprolastmonth->fetch();
                $resultprolmonth = $rowrprolmonth[0];
                $resultprolmonth;

                $settletotal+=$resultprolmonth;//settlement total

                //wid
                $lastmonthwidraw1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = 'tpyfpf;nfhs;sg;gl;lJ' AND  disputeRcvMethod = '$domethod[$i]' ");
                $lastmonthwidraw1->execute();
                $rowrlastmonthwidraw1 = $lastmonthwidraw1->fetch();
                $resultrowrlastmonthwidraw1 = $rowrlastmonthwidraw1[0];

                $widrawaltotal+=$resultrowrlastmonthwidraw1;//settlemttotal
              
                //reject
                $lastmonthwidraw2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = 'epuhfupf;fg;gl;lJ' AND  disputeRcvMethod = '$domethod[$i]'");
                $lastmonthwidraw2->execute();
                $rowrlastmonthwidraw2 = $lastmonthwidraw2->fetch();
                $resultrowrlastmonthwidraw2 = $rowrlastmonthwidraw2[0];

                $rejecttotal+=$resultrowrlastmonthwidraw2;
 
                //lastmonthnonsettlemnt
                $lastmonthnonselt1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '14:m' AND  disputeRcvMethod = '$domethod[$i]'   ");
                $lastmonthnonselt1->execute();
                $rowrlastmonthset1 = $lastmonthnonselt1->fetch();
                $resultrowrlastmonthset1 = $rowrlastmonthset1[0];
                
                $lastmonthnonselt2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '12:M' AND disputeRcvMethod = '$domethod[$i]'");
                $lastmonthnonselt2->execute();
                $rowrlastmonthset2 = $lastmonthnonselt2->fetch();
                $resultrowrlastmonthset2 = $rowrlastmonthset2[0];
                $lastmonthsetmenttotal = $resultrowrlastmonthset1+$resultrowrlastmonthset2;

                $nonsettlementtotal+=$lastmonthsetmenttotal;

                //last nonsettlemnt month chaireman
                $lastmonthnonselt1chair = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '14:m (jtprhsu;)' AND disputeRcvMethod = '$domethod[$i]'");
                $lastmonthnonselt1chair->execute();
                $rowrlastmonthset1chair = $lastmonthnonselt1chair->fetch();
                $resultrowrlastmonthset1chair = $rowrlastmonthset1chair[0];
              
           
                $lastmonthnonselt2chair = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '12:M (jtprhsu)' AND disputeRcvMethod = '$domethod[$i]'");
                $lastmonthnonselt2chair->execute();
                $rowrlastmonthset2chair = $lastmonthnonselt2chair->fetch();
                $resultrowrlastmonthset2chair = $rowrlastmonthset2chair[0];
                $lastmonthsetmenttotalchair = $resultrowrlastmonthset1chair+$resultrowrlastmonthset2chair;
 
                $nonsettlementtotalcahirman+=$lastmonthsetmenttotalchair;

               
                $sqlprolastmonthreg = $db->prepare("SELECT COUNT(*) FROM doregister WHERE MONTH(PFdate) = ' $pmonth' and  YEAR(PFdate) = '$year'AND disputeRcvMethod = '$domethod[$i]' ");
                $sqlprolastmonthreg->execute();
                $rowreglmonthreg = $sqlprolastmonthreg->fetch();
                $resultreglmonthreg = $rowreglmonthreg[0];
                $resultreglmonthreg;
               
                // lastmonth complete
               
                $sqlprolastmonth = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(PFdate) = ' $pmonth' and  YEAR(PFdate) = '$year'AND disputeRcvMethod = '$domethod[$i]' ");
                $sqlprolastmonth->execute();
                $rowreglmonth = $sqlprolastmonth->fetch();
                $resultreglmonth = $rowreglmonth[0];
                $resultreglmonth;
                // lastmonth process
               
                $sqlprolastmonthpro = $db->prepare("SELECT COUNT(*) FROM doprocess WHERE MONTH(PFdate) = ' $pmonth' and  YEAR(PFdate) = '$year'AND disputeRcvMethod = '$domethod[$i]' ");
                $sqlprolastmonthpro->execute();
                $rowreglmonthpro = $sqlprolastmonthpro->fetch();
                $resultreglmonthpro = $rowreglmonthpro[0];
                $resultreglmonthpro;
                $totalofregisterlastmonth = $resultreglmonthreg+$resultreglmonth+ $resultreglmonthpro;// regiser disputes register complete process
 
                $lmonthregistertotal+=$totalofregisterlastmonth; // total  register complete process
              

                //ongoing
             
                $sqlprolastmonthprocr1 = $db->prepare("SELECT FROM recvie WHERE ongoing and date ='$pmonth'");
                $sqlprolastmonthprocr1->execute();
                $rowreglmonthprocr1 = $sqlprolastmonthprocr1->fetch();
                $resultreglmonthprocr1 = $rowreglmonthprocr1[0];
                $resultreglmonthprocr1;
 
        
                $ongoingfinal =$ongo[$i];


                $lmonthonggoing+=$ongoingfinal;

 
         
               
                //nodisscuess
                $sqlprolastmonthprocrempty1 = $db->prepare("SELECT COUNT(*) FROM doprocess  WHERE mainmediatior='' AND disputeRcvMethod = '$domethod[$i]' ");
                $sqlprolastmonthprocrempty1->execute();
                $rowreglmonthprocrempty1 = $sqlprolastmonthprocrempty1->fetch();
                $resultreglmonthprocrempty1 = $rowreglmonthprocrempty1[0];
                $resultreglmonthprocrempty1;

       

                $nodisccussfinal =$disc[$i];
                $lmonthnodiscuess+=$nodisccussfinal;


 
                $x = $aaaaa[$i]+$bbbbb[$i]+$totalofregisterlastmonth; //total of register nondisc ongoging
                $xtotal+=$x;


                $totalcompletecount = $resultprolmonth+$lastmonthsetmenttotal+$lastmonthsetmenttotalchair+$resultrowrlastmonthwidraw2+$resultrowrlastmonthwidraw1; //total of complete

                $totalcomplete+=$totalcompletecount;//final total of complte last month




                $pongoingtotal +=$aaaaa[$i];
                $pdisscuess +=$bbbbb[$i]; ?>

              

    <?php
            
 
              $sqlpreviusdisscuess = $db->prepare("SELECT COUNT(*) FROM doprocess  WHERE mainmediatior='' AND  MONTH(PFdate) = '$previusdate'  AND  YEAR(PFdate) = '$year' AND disputeRcvMethod = '$domethod[$i]' ");
                $sqlpreviusdisscuess->execute();
                $rowsqlpreviusdisccuess = $sqlpreviusdisscuess->fetch();
                $resultsqlpreviudisscuess = $rowsqlpreviusdisccuess[0];
                $resultsqlpreviudisscuess;

                $previusdiscuesstot+=$resultsqlpreviudisscuess; ?>

                         
                        <tbody>
                          <tr  style="text-align: center">


                            <td scope="row"><?php echo $no++ ?></td>
                            <td style="font-size:12px;font-weight:bolder; text-align:left" class="ff"> <?php echo $domethod [$i] ?></td>

 


                            <td class="ff"> <?php echo $bbbbb [$i]  ?></td>
                           
                            <td class="ff"> <?php echo  $aaaaa [$i] ?></td>

                            <td class="ff"> <?php echo $totalofregisterlastmonth  ?></td>




                            <td class="ff"> <?php echo $x //3total D 6?></td>
                            <td class="ff"> <?php echo $resultprolmonth //settlment 7?></td>
                            <td class="ff"> <?php echo $lastmonthsetmenttotal //non settlement?></td>
                            <td class="ff"> <?php echo $lastmonthsetmenttotalchair  // non settlment chairman?></td>
                            <td class="ff"> <?php echo $resultrowrlastmonthwidraw2 //reject?></td>
                            <td class="ff"> <?php echo $resultrowrlastmonthwidraw1 //widrawal?></td>


                            <td class="ff"> <?php echo $totalcompletecount //total complete?></td>
                           


                            <td class="ff"> <?php echo  $ongoingfinal; //ongoing?></td>
                            <td class="ff"> <?php echo  $nodisccussfinal; //nodicess?></td>

                          <?php
                        
                                        
                      //   echo $names_str1[] = ($domethod[$i]);

                           $ccdate = date('d'); // current day
                           $last_day_this_month  = date('t'); //last month this month
                           $lastmonth = date('m', strtotime('last month'));
              //  $now = date('Y-m-d');

                // if ($ccdate == $last_day_this_month) {
                //     // $sql2 =  "UPDATE `f` SET  `ongoing`='$ongoingfinal',`type`='$domethod[$i]',`discuess`='$nodisccussfinal' WHERE no = '$a'";
                //     // $db->exec($sql2);
                //     // $a++;
                            
                //     if ($lmonth[$i]!=$now) {
                //         $sss = "INSERT INTO recvie (ongoing,type,discuess,date)VALUES('$ongoingfinal','$domethod[$i]','$nodisccussfinal','$now')";
                //         $db->exec($sss);
                //     }
               // }
                ?>
   
                             
                            </tr>
          <?php
            } ?>

          <?php
          
         
              


          ?>

                    <tr class="totcolor ">

                            <td ><?php echo '#' ?></td>
                            <td><?php echo 'Total' ?></td>
                            <td class="ff"> <?php echo $pdisscuess?></td>
                            <td class="ff"> <?php echo $pongoingtotal?></td>


                            <td class="ff"> <?php echo $lmonthregistertotal //total register count?></td>
                            <td class="ff"> <?php echo $xtotal ?></td>
                            <td class="ff"> <?php echo $settletotal //settelment total?></td>
                            <td class="ff"> <?php echo $nonsettlementtotal // non sttlement total?></td> 
                            <td class="ff"> <?php echo $nonsettlementtotalcahirman  //non sttlement total chairman?></td>                            
                            <td class="ff"> <?php echo $rejecttotal //reject?></td>
                            <td class="ff"> <?php echo $widrawaltotal //widthrawal?></td> 
                            




                            <td class="ff"> <?php echo $totalcomplete //total complete?></td>

                            <td class="ff"> <?php echo  $lmonthonggoing; //ongoing?></td>
                            <td class="ff"> <?php echo $lmonthnodiscuess //no disscuess?></td> 
 
   
                          </tr>


                          <!-- Type Report -->
<!-- *********************************************************************************************************** -->
 
<thead> 
                  <tr  class="bg table-active"> 
                  <th   scope="col">No</th>
                      <th  class="ff" scope="col">gpzf;Ffspd; jd;ik</th>

                      <th   scope="col">A</th>
                      <th   scope="col">B</th>
                      <th     scope="col">C</th>

                      <th    scope="col">D</th>

                      <th    scope="col">E</th>
                      <th    scope="col"> F</th>
                      <th    scope="col">G</th>
                      
                      <th    scope="col">H</th>
                      <th    scope="col">I</th>
                      <th    scope="col">J</th>

                      <th    scope="col">K</th>
                      <th    scope="col">L</th>
                   




                    </tr>
                  </thead>

 

          <?php
 






                $typearray  = array('Ntz;Lnkd;W fhak; tpistpj;jy; gpupT 314> 315> 325','Ntz;Lnkd;W fLq;fhak; tpistpj;jy; gpupT 316> 326',
                'capUf;F Mgj;ij tpistpf;ff;$ba nranyhd;why; fhak... gpupT 323','capUf;F my;yJ gpwupd; fhg;Gf;F gpupT 329',
                'vtNuDk; Mis KiwNflhfj; jLj;Jitj;jy; my;yJ ... gpupT 332> 333','jhf;Fjy; my;yJ Fw;wKiwahd gyhj;fhuj;ij.... gpupT 343> 346> 348> 349',
                ',og;ghdJ jdpnahUtUf;fhdjhf ,Uf;Fkplj;J Mjdj;ij.. gpupT 386','tpistpf;fg;gl;l ,og;G my;yJ Nrjk; jdpnahUtUf;.... gpupT 409> 410',
                ',og;ghdJ jdpnahUtUf;fhf ,Uf;Fk; tz;zk; gj;J &gh.... gpupT 411',',og;ghdJ jdpnahUtUf;fhf ,Uf;Fk; tz;zk; fhy;.... gpupT 412',
                'rkhjhdf; Fiyit Vw;gLj;Jk; csf;fUj;Jld; epe;ijnra;jy gpupT 484','jpUl;L gpupT 367 my;yJ 367M',' Fw;wKiwahd mj;JkPwy; gpupT 433','FLk;g td;Kiw gpzf;F',
                'epjp njhlu;ghd gpzf;F','fhzp kw;Wk; nrhj;J njhlu;ghd gpzf;F','kPWif','Fw;wKiwahd mr;RWj;jy gpupT 486','nghJtplr;rz;il gpupT 157');
             

  
            $no1=1;
            $b=1;
            $z=0;
            for ($i=0; $i<count($typearray); $i++) {
                  
                 //lastmonth type
            
                $sqltyperdatelmonth = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = ' $pmonth' and  YEAR(resultdate) = '$year' AND disputeType = '$typearray[$i]'  ");
                $sqltyperdatelmonth->execute();
                $rowtypelmonth = $sqltyperdatelmonth->fetch();
                $resulttypelmonth = $rowtypelmonth[0];
                $resulttypelmonth;


                //settlement
            
                $sqltypelmonthsettlement = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' AND  result = '6:1' AND YEAR(resultdate) = '$year' AND  disputeType = '$typearray[$i]' ");
                $sqltypelmonthsettlement->execute();
                $rowtypelmonthsettlement = $sqltypelmonthsettlement->fetch();
                $resultlmonthsettlement = $rowtypelmonthsettlement[0];
                $resultlmonthsettlement;

               



                //wid
            
                $sqltypelmonthwidrawal = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = 'tpyfpf;nfhs;sg;gl;lJ' AND  disputeType = '$typearray[$i]' ");
                $sqltypelmonthwidrawal->execute();
                $rowtypelmonthwidrawal = $sqltypelmonthwidrawal->fetch();
                $resulttypelmonthwidrawal = $rowtypelmonthwidrawal[0];

                
              
                //reject
            
                $sqltypelmonthreject = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = 'epuhfupf;fg;gl;lJ' AND  disputeType = '$typearray[$i]'");
                $sqltypelmonthreject->execute();
                $rowrtypelmonthreject = $sqltypelmonthreject->fetch();
                $resultlmonthreject = $rowrtypelmonthreject[0];

 

                //nonsettlement14:m
            
                $sqltypelmonthnonset1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '14:m' AND disputeType = '$typearray[$i]'  ");
                $sqltypelmonthnonset1->execute();
                $rowrtypelmonthnonset1= $sqltypelmonthnonset1->fetch();
                $resultypelmonthnonset1 = $rowrtypelmonthnonset1[0];
                
                //nonsettlement 12:M
            
                $sqltypelmonthnonset2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '12:M' AND disputeType = '$typearray[$i]' ");
                $sqltypelmonthnonset2->execute();
                $rowrtypelmonthnonset2 = $sqltypelmonthnonset2->fetch();
                $resultypelmonthnonset2 = $rowrtypelmonthnonset2[0];
                $totaltypenonsett = $resultypelmonthnonset1+$resultypelmonthnonset2;



                //nonsettlement14:m chairman
            
                $sqltypenonsetcharaman1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '14:m (jtprhsu;)' AND disputeType = '$typearray[$i]'");
                $sqltypenonsetcharaman1->execute();
                $rowtypechairmanlmonth1 = $sqltypenonsetcharaman1->fetch();
                $resultrowrlastmonthset2chair1 = $rowtypechairmanlmonth1[0];
                //nonsettlement 12:M chairman
            
                $sqltypenonsetcharaman2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$pmonth' and YEAR(resultdate) = '$year' and result = '12:M (jtprhsu)' AND disputeType = '$typearray[$i]'");
                $sqltypenonsetcharaman2->execute();
                $rowrtypenonsetchair2 = $sqltypenonsetcharaman2->fetch();
                $rowtypechairmanlmonth2 = $rowrtypenonsetchair2[0];
                $totaltypenonsetlmentchairman = $rowtypechairmanlmonth2+$resultrowrlastmonthset2chair1;





                // lastmonth register
               
                $sqltypelmonthregister = $db->prepare("SELECT COUNT(*) FROM doregister WHERE MONTH(PFdate) = ' $pmonth' and  YEAR(PFdate) = '$year'AND disputeType = '$typearray[$i]' ");
                $sqltypelmonthregister->execute();
                $rowtypelmonthregister = $sqltypelmonthregister->fetch();
                $resulttypelmonthregister = $rowtypelmonthregister[0];
                $resulttypelmonthregister;
               
                // lastmonth complete
               
                $sqltypelmonthprocess = $db->prepare("SELECT COUNT(*) FROM doprocess WHERE MONTH(PFdate) = ' $pmonth' and  YEAR(PFdate) = '$year'AND disputeType = '$typearray[$i]'");
                $sqltypelmonthprocess->execute();
                $rowtypelmonthprocess = $sqltypelmonthprocess->fetch();
                $resulttypelmonthprocess = $rowtypelmonthprocess[0];
                $resulttypelmonthprocess;
                // lastmonth process
               
                $sqltypelmonthcomle = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(PFdate) = ' $pmonth' and  YEAR(PFdate) = '$year'AND disputeType = '$typearray[$i]' ");
                $sqltypelmonthcomle->execute();
                $rowtypelmonthcomle = $sqltypelmonthcomle->fetch();
                $resulttypelmonthcomle = $rowtypelmonthcomle[0];
                $resulttypelmonthcomle;
                $totallmonthregister = $resulttypelmonthregister+$resulttypelmonthprocess+$resulttypelmonthcomle;// total register complete process

 

                $lasttwopmonth = $pmonth-1;
                $sqltypelmonthongong = $db->prepare("SELECT COUNT(*) FROM doprocess WHERE mainmediatior !=''   AND disputeType = '$typearray[$i]' ");
                $sqltypelmonthongong->execute();
                $rowrtypelmonthongoing = $sqltypelmonthongong->fetch();
                $resulttypelmonthgoing = $rowrtypelmonthongoing[0];
                $resulttypelmonthgoing;

                $ongoingfinaltype = $rongo[$i];


          

                $sqltypelmonthnodiscuss = $db->prepare("SELECT COUNT(*) FROM doprocess  WHERE mainmediatior=''   AND disputeType = '$typearray[$i]' ");
                $sqltypelmonthnodiscuss->execute();
                $rowltypemonthondiss = $sqltypelmonthnodiscuss->fetch();
                $resulttypenodiss = $rowltypemonthondiss[0];
                $resulttypenodiss;


                $nodisscussfinaltype = $rdisc[$i];
        
                $x1 = $cc[$i]+$dd[$i]+$totallmonthregister; //total of register nondisc ongoging


                $totalcompletecounttype = $resultlmonthsettlement+$totaltypenonsett+$totaltypenonsetlmentchairman+$resulttypelmonthwidrawal+$resultlmonthreject; //total compete type ?>   
                    
                        <tr style="text-align:center"> 
                            <td><?php echo $no1++ ?></td>                        
                            <td style="font-size:12px;font-weight:bolder;white-space:nowrfap; text-align:left" class="ff"> <?php echo $typearray [$i] ?></td>
                            <td class="ff"> <?php echo  $dd[$i] ?></td>
                            <td class="ff"> <?php echo  $cc[$i] ?></td>



                          
                            <td class="ff"> <?php echo $totallmonthregister //total register?></td>

                            <td class="ff"> <?php echo $x1  ?></td>

                            <td class="ff"> <?php echo $resultlmonthsettlement //settlwmtn 6:1?></td>
                            <td class="ff"> <?php echo $totaltypenonsett //nonsettlement?></td>
                            <td class="ff"> <?php echo $totaltypenonsetlmentchairman //viachairman non setl?></td>
                            <td class="ff"> <?php echo $resultlmonthreject //reject?></td>
                            <td class="ff"> <?php echo $resulttypelmonthwidrawal //widrwal?></td>   



                            <td class="ff"> <?php echo  $totalcompletecounttype; //totalcomplete?></td>
                            <td class="ff"> <?php echo  $ongoingfinaltype; //nodisscuess?></td>
                            <td class="ff"> <?php echo  $nodisscussfinaltype; //ongoing?></td>
                          </tr>
 


                          <?php
                         
                        //   $types[]=$typearray[$i];
                         
                       //  $names_str = serialize($typearray);
                       //  $users_str = serialize($users_arr);
                         

                          //  $ccdate = date('d'); // current day
                          //  $last_day_this_month  = date('t'); //last month this month

                          // if ($ccdate == $last_day_this_month) {
                          //     // $sql2 =  "UPDATE `type` SET  `ongoing`='$ongoingfinaltype',`type`='$typearray[$i]',`disscuss`='$nodisscussfinaltype' WHERE no = '$b'";
                          //     // $db->exec($sql2);
                          //     // $b++;
                           
                               
                          //     if ($lmonth[$i]!=$now) {
                          //         $sss = "INSERT INTO type (ongoing,type,disscuess,date)VALUES('$ongoingfinaltype','$typearray[$i]','$nodisscussfinaltype','$now')";
                          //         $db->exec($sss);
                          //     }
                         // } 
                          ?>

 
                          <?php
            } ?>

 


                          <tr class="totcolor">
                          <td ><?php echo '#' ?></td>
                            <td><?php echo 'Total' ?></td>
                            <td class="ff"> <?php echo $pdisscuess?></td>
                            <td class="ff"> <?php echo $pongoingtotal?></td>
                            <td class="ff"> <?php echo $lmonthregistertotal //total register count?></td>
                            <td class="ff"> <?php echo $xtotal ?></td>
                            <td class="ff"> <?php echo $settletotal //settelment total?></td>
                            <td class="ff"> <?php echo $nonsettlementtotal // non sttlement total?></td> 
                            <td class="ff"> <?php echo $nonsettlementtotalcahirman  //non sttlement total chairman?></td>                            
                            <td class="ff"> <?php echo $rejecttotal //reject?></td>
                            <td class="ff"> <?php echo $widrawaltotal //widthrawal?></td>                      
                            <td class="ff"> <?php echo $totalcomplete //total complete?></td>
                            <td class="ff"> <?php echo $lmonthonggoing //no disscuess?></td> 
                            <td class="ff"> <?php echo  $lmonthnodiscuess; //ongoing?></td> 
                          </tr>
 
                        </tbody>
                      </table>
                      </div>
 
                      <button id="j" class="btn btn-primary btn-lg rounded-0" name="save" >Print</button>
                 
<?php
        } ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>




                  <script>

                  $('document').ready(function(){

                      $('.totcolor').css({
                        
                        'color':'red',
                        'font-weight':'bold',
                        'font-size':'15px'
                        
                        });
                         
                        

                    
                  })


                  </script>




<script>

$('document').ready(function(){

$('#j').click(function(){
  
  var printContents = document.getElementById('x').innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;

})

})

 

</script>



  </body>
  
</html>