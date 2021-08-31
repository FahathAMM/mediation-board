<!doctype html>
<html lang="en">

<head>
  <title>dashbord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <style>
    .cap {
      padding: 60px 0 10px 0;
    }


    @font-face {
      font-family: bamini;
      src: url('fonts/Bamini.ttf')
    }

    .ff {
      font-family: bamini;

    }

    .ff input[type=text] {
      font-size: 20px;
      font-weight: bolder;

    }


    .modall {
      padding-left: 15px;
    }


    .modall input[type=text] {
      border: 1px solid #b9b9b9;
      font-size: 17px;
    }
  </style>
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

      <div class="container">


        <h1 class="page-header text-primary" style="margin:2% 0 5% 0">
          DISPUTES OF RECORD SUMMERY
          <hr class=" border-buttom">

        </h1>



        <div class="form-row">

          <?php


          $rdate    = date('Y-m-d');
          $rdate    = explode('-', $rdate);
          $year     = $rdate[0];
          $month    = $rdate[1];



          $sqlprolastmonth = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(PFdate) = '$month' and  YEAR(PFdate) = '$year'");
          $sqlprolastmonth->execute();
          $rowreglmonth = $sqlprolastmonth->fetch();
          $resultreglmonth = $rowreglmonth[0];
          $resultreglmonth;
          // lastmonth process

          $sqlprolastmonthpro = $db->prepare("SELECT COUNT(*) FROM doprocess WHERE MONTH(PFdate) = '$month' and  YEAR(PFdate) = '$year'");
          $sqlprolastmonthpro->execute();
          $rowreglmonthpro = $sqlprolastmonthpro->fetch();
          $resultreglmonthpro = $rowreglmonthpro[0];
          $resultreglmonthpro;



          $sqlprolastmonthreg = $db->prepare("SELECT COUNT(*) FROM doregister WHERE MONTH(PFdate) = '$month' and  YEAR(PFdate) = '$year'");
          $sqlprolastmonthreg->execute();
          $rowreglmonthreg = $sqlprolastmonthreg->fetch();
          $resultreglmonthreg = $rowreglmonthreg[0];
          $resultreglmonthreg;


          $totalofregisterlastmonth = $resultreglmonthreg + $resultreglmonth + $resultreglmonthpro; // regiser disputes register complete process

          ?>

          <a href="../regview.php" class="col-md-4  noHover" style=" Text-Decoration: None">
            <div class="bg-primary rounded   " style="padding:20px 20px 5px 30px;">
              <div class="text-light">



                <div class="row">
                  <div class=" col-md-1">
                    <i class="	fa fa-drivers-license fa-3x" style="margin-top: 10px"></i>
                  </div>

                  <div class=" col-md-3">
                    <div style=" font-size:40px;margin:0 0 0 160px;font-weight:100px"><?php echo $totalofregisterlastmonth ?></div>
                    <div style=" white-space: nowrap;font-size:15px;margin:0 0 0 150px;font-weight:bolder">CURRENT MONTH <br>REGISTERS </div>
                  </div>
                </div>
              </div>
            </div>
          </a>


          <?php

          $sql = $db->prepare("SELECT COUNT('disputeNo') FROM doprocess");
          $sql->execute();

          $row = $sql->fetch();
          $totalpro = $row[0];


          ?>

          <a href="../proview.php" class="col-md-4  noHover" style=" Text-Decoration: None">
            <div class="bg-success rounded   " style="padding:20px 20px 5px 35px;">
              <div class="text-light">

                <div class="row">
                  <div class=" col-md-1">
                    <i class="fa fa-refresh fa-3x" style="margin-top: 10px"></i>
                  </div>

                  <div class=" col-md-3">
                    <div style=" font-size:40px;margin:0 0 0 160px;font-weight:100px"><?php echo $totalpro ?></div>
                    <div style=" font-size:15px;margin:0 0 0 150px;font-weight:bolder"> CURRENT PROCESS </div>
                  </div>
                </div>
              </div>
            </div>
          </a>


          <?php


          $sql33 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$month' and  YEAR(resultdate) = '$year'");
          $sql33->execute();

          $row33 = $sql33->fetch();
          $totalcom33 = $row33[0];

          ?>
          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#400040">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-up fa-3x" style="margin-top: 10px;"></i>
                    <p style="margin-top: 13px;font-size:25px"></p>
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $totalcom33 ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 120px ; font-size:15px; font-weight:bolder">CURRENT <br> MONTH COMPLETE </div>
                  </div>
                </div>
              </div>
            </div>

          </a>


        </div>



        <div class="form-row" style="margin: 50px 0 0 0">
          <!-- 6:1 % -->
          <?php

          $sql = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete");
          $sql->execute();
          $rowtotal = $sql->fetch();
          $total = $rowtotal[0];


          //  $canceledsum=mysql_query("SELECT COUNT(*) AS totalcanceled FROM nabidka WHERE status='canceled'");
          //  $d=mysql_fetch_assoc($canceledsum);
          //  echo $d['totalcanceled'];


          //  $sql = $db->prepare("SELECT COUNT(*) AS '12:M' FROM docomplete WHERE result ='12:M'  ");
          //  $sql->execute();
          //   $rowresult = $sql->fetch(); 
          //   $result = $rowresult[0];





          $sql = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = '6:1'");
          $sql->execute();
          $rowresult = $sql->fetch();
          $result = $rowresult[0];

          // echo $result."result<br>";

          // echo $total."total<br>";


          $success = 100 * $result / $total;

          // echo  $success;
          ?>

          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class=" rounded " style="padding:20px 20px 5px 35px; background-color:#0030ff">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-up fa-3x" style="margin-top: 10px;"></i>
                    <p style="margin-top: 13px;font-size:25px"><?php echo $result ?></p>
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo round($success, 1) ?>%</div>
                    <div style="white-space: nowrap; margin:0 0 0 130px ; font-size:15px; font-weight:bolder"> PERCENTAGE <br>OF SETTLEMENT </div>
                  </div>
                </div>
              </div>
            </div>

          </a>



          <!-- chairman % -->

          <!-- <option class="font-weight-bold">  6:1   </option>
                  <option class="font-weight-bold">  12:M  </option>
                  <option class="font-weight-bold"> 14:m  </option>
                  <option class="font-weight-bold "> 14:m (jtprhsu;)  </option>
                  <option class="font-weight-bold">  12:M (jtprhsu) </option>
                  <option class="font-weight-bold">tpyfpf;nfhs;sg;gl;lJ</option>
                  <option class="font-weight-bold">epuhfupf;fg;gl;lJ</option> -->

          <?php




          $sqlnon1 = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = '14:m'");
          $sqlnon1->execute();
          $rownon1 = $sqlnon1->fetch();
          $resultnon1 = $rownon1[0];


          $sqlnon2 = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = '12:M'");
          $sqlnon2->execute();
          $rownon2 = $sqlnon2->fetch();
          $resultnon2 = $rownon2[0];




          $sqlnon3 = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = '14:m (jtprhsu;)'");
          $sqlnon3->execute();
          $rownon3 = $sqlnon3->fetch();
          $resultnon3 = $rownon3[0];


          $sqlnon4 = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = '12:M (jtprhsu)'");
          $sqlnon4->execute();
          $rownon4 = $sqlnon4->fetch();
          $resultnon4 = $rownon4[0];


          /*  Chairman Nonselltment Cases for this code   */
          $chairnosetl = $resultnon4 + $resultnon3; ///// this one and 

          $totalnonsetilentperc = 100 * $chairnosetl / $total; // this one.....

          // ************************************************************************



          $totnon = $resultnon1 + $resultnon2;

          $totnon;

          $totalnonsetilent = 100 * $totnon / $total;

          $totalnonsetilent;
          ?>








          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class=" rounded " style="padding:20px 20px 5px 35px; background-color:#000000">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-down fa-3x" style="margin-top: 10px;"></i>
                    <p style="margin-top: 13px;font-size:25px"><?php echo $totnon ?></p>
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo round($totalnonsetilent, 1) ?>%</div>
                    <div style="white-space: nowrap; margin:0 0 0 100px ; font-size:15px; font-weight:bolder"> VIA CHIEF MEDIATOR <br>OF NON SETTLEMENT </div>
                  </div>
                </div>
              </div>
            </div>

          </a>


          <?php


          $sqlwid = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = 'tpyfpf;nfhs;sg;gl;lJ'");
          $sqlwid->execute();
          $rowwid = $sqlwid->fetch();
          $resultwid = $rowwid[0];

          //  echo $resultwid;

          $sqlrej = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = 'epuhfupf;fg;gl;lJ'");
          $sqlrej->execute();
          $rowrej = $sqlrej->fetch();
          $resultrej = $rowrej[0];

          $resultwid;
          $resultrej;

          $widrej = $resultwid + $resultrej;

          $widrejperc = 100 * $widrej / $total;

          ?>

          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class=" rounded " style="padding:20px 20px 5px 35px; background-color:#c60000">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-trash fa-3x" style="margin-top: 10px;"></i>
                    <p style="margin-top: 13px;font-size:25px"><?php echo $widrej ?></p>
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 130px;font-weight:100px"><?php echo round($widrejperc, 1) ?>%</div>
                    <div style="white-space: nowrap; margin:0 0 0 100px ; font-size:15px; font-weight:bolder"> PERCENTAGE <br>OF WITHDRAWAL </div>
                  </div>
                </div>
              </div>
            </div>

          </a>





        </div>

        <div class="form-row" style="margin: 50px 0 0 0">



          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class=" rounded " style="padding:20px 20px 5px 35px; background-color:#808080">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-down fa-3x" style="margin-top: 10px;"></i>
                    <p style="margin-top: 13px;font-size:25px"><?php echo $chairnosetl ?></p>
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 130px;font-weight:100px"><?php echo round($totalnonsetilentperc, 1) ?>%</div>
                    <div style="white-space: nowrap; margin:0 0 0 100px ; font-size:15px; font-weight:bolder">NON SETTLEMENT <br>VIA CHAIRMAN </div>
                  </div>
                </div>
              </div>
            </div>

          </a>

          <!-- ***************************************************************************************************************** -->


          <?php


          $rdate    = date('Y-m-d');
          $rdate    = explode('-', $rdate);
          $year     = $rdate[0];
          $month    = $rdate[1];
          //  $year  = $rdate[2];
          //  echo $day."<br>";
          //  echo $month."<br>";
          //  echo $year;


          $premonth = date('m', strtotime('last month'));


          $preyear     = $year - 1;



          // SELECT * FROM projects WHERE YEAR(Date) = 2011 AND MONTH(Date) = 5

          $sqlrdate = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE YEAR(PFdate) = ' $preyear' ");
          $sqlrdate->execute();
          $rowrdate = $sqlrdate->fetch();
          $resultrdate = $rowrdate[0];

          $resultrdate;
          ?>





          <?php

          $sql = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete");
          $sql->execute();

          $row = $sql->fetch();
          $totalcom = $row[0];


          ?>
          <a href="../completeview.php" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class=" rounded " style="padding:20px 20px 5px 35px; background-color:#1A2732">
              <div class="text-light">



                <div class="row">
                  <div class=" col-md-1">
                    <i class="	 fa fa-check-square-o fa-3x" style="margin-top: 10px"></i>
                  </div>

                  <div class=" col-md-3">
                    <div style=" font-size:40px;margin:0 0 0 160px;font-weight:100px"><?php echo $totalcom ?></div>
                    <div style=" font-size:15px;margin:0 0 0 150px;font-weight:bolder"> TOTAL COMPLETE </div>
                  </div>
                </div>
              </div>
            </div>
          </a>

        </div>


        <div class="form-row" style="margin: 50px 0 0 0">

          <h5>Previous Disputes </h5>

        </div>
        <hr style="color: red">


        <?php
        $premonth = $month - 1;

        if ($premonth == 1) {
          $yearr = $year - 1;
          $sqlrdatelmonth = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = ' $premonth' and  YEAR(resultdate) = '$yearr' ");
          $sqlrdatelmonth->execute();
          $rowlmonth = $sqlrdatelmonth->fetch();
          $resultlmonth = $rowlmonth[0];
          $resultlmonth;
        } else {
          $sqlrdatelmonth = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = ' $premonth' and  YEAR(resultdate) = '$year' ");
          $sqlrdatelmonth->execute();
          $rowlmonth = $sqlrdatelmonth->fetch();
          $resultlmonth = $rowlmonth[0];
          $resultlmonth;
        }



        //echo $year;
        ?>

        <div class="form-row" style="margin: 50px 0 0 0">



          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#408080">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-check-square-o fa-3x" style="margin-top: 10px;"></i>

                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $resultlmonth ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 45px ; font-size:15px; font-weight:bolder"> TOTAL <br>COMPLETE OF LAST MONTH </div>
                  </div>
                </div>
              </div>
            </div>

          </a>





          <?php

          $prregemonth = $month - 1;
          $sqlprolastmonth1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(PFdate) = ' $prregemonth' and  YEAR(PFdate) = '$year' ");
          $sqlprolastmonth1->execute();
          $rowreglmonth1 = $sqlprolastmonth1->fetch();
          $resultreglmonth1 = $rowreglmonth1[0];
          $resultreglmonth1;

          $prregemonth = $month - 1;
          $sqlprolastmonth2 = $db->prepare("SELECT COUNT(*) FROM doprocess WHERE MONTH(PFdate) = ' $prregemonth' and  YEAR(PFdate) = '$year' ");
          $sqlprolastmonth2->execute();
          $rowreglmonth2 = $sqlprolastmonth2->fetch();
          $resultreglmonth2 = $rowreglmonth2[0];
          $resultreglmonth2;

          $prregemonth = $month - 1;
          $sqlprolastmonth3 = $db->prepare("SELECT COUNT(*) FROM doregister WHERE MONTH(PFdate) = ' $prregemonth' and  YEAR(PFdate) = '$year' ");
          $sqlprolastmonth3->execute();
          $rowreglmonth3 = $sqlprolastmonth3->fetch();
          $resultreglmonth3 = $rowreglmonth3[0];
          $resultreglmonth3;


          $lastmonthregister = $resultreglmonth1 + $resultreglmonth2 + $resultreglmonth3;

          ?>

          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#000040">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="fa fa-drivers-license  fa-3x" style="margin-top: 10px;"></i>

                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $lastmonthregister ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 20px ; font-size:15px; font-weight:bolder"> TOTAL <br>REGISTRATION OF LAST MONTH </div>
                  </div>
                </div>
              </div>
            </div>

          </a>



          <?php

          $premonth = $month - 1;
          $sqlprolastmonth = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and  result = '6:1' and YEAR(resultdate) = '$year' ");
          $sqlprolastmonth->execute();
          $rowrprolmonth = $sqlprolastmonth->fetch();
          $resultprolmonth = $rowrprolmonth[0];
          $resultprolmonth;

          ?>

          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#460023">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-up fa-3x" style="margin-top: 10px;"></i>
                    <!-- <p style="margin-top: 13px;font-size:25px"><?php //echo $result 
                                                                    ?></p>        -->
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $resultprolmonth ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 130px ; font-size:15px; font-weight:bolder"> SETTLEMENT <br>OF LAST MONTH </div>
                  </div>
                </div>
              </div>
            </div>

          </a>

        </div>


        <div class="form-row" style="margin: 50px 0 0 0">


          <?php

          $premonth = $month - 1;
          $lastmonthnonselt1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and YEAR(resultdate) = '$year' and result = '14:m'");
          $lastmonthnonselt1->execute();
          $rowrlastmonthset1 = $lastmonthnonselt1->fetch();
          $resultrowrlastmonthset1 = $rowrlastmonthset1[0];

          $premonth = $month - 1;
          $lastmonthnonselt2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and YEAR(resultdate) = '$year' and result = '12:M'");
          $lastmonthnonselt2->execute();
          $rowrlastmonthset2 = $lastmonthnonselt2->fetch();
          $resultrowrlastmonthset2 = $rowrlastmonthset2[0];


          $lastmonthsetmenttotal = $resultrowrlastmonthset1 + $resultrowrlastmonthset2;



          $sqlnon3 = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = '14:m (jtprhsu;)'");
          $sqlnon3->execute();
          $rownon3 = $sqlnon3->fetch();
          $resultnon3 = $rownon3[0];


          $sqlnon4 = $db->prepare("SELECT COUNT('disputeNo') FROM docomplete WHERE result = '12:M (jtprhsu)'");
          $sqlnon4->execute();
          $rownon4 = $sqlnon4->fetch();
          $resultnon4 = $rownon4[0];

          ?>

          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#0000a0">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-down fa-3x" style="margin-top: 10px;"></i>
                    <!-- <p style="margin-top: 13px;font-size:25px"><?php //echo $result 
                                                                    ?></p>        -->
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $lastmonthsetmenttotal ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 100px ; font-size:15px; font-weight:bolder"> NON SETTLEMENT <br>OF LAST MONTH </div>
                  </div>
                </div>
              </div>
            </div>

          </a>

          <?php

          $premonth = $month - 1;
          $lastmonthnonselt1chair = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and YEAR(resultdate) = '$year' and result = '14:m (jtprhsu;)'");
          $lastmonthnonselt1chair->execute();
          $rowrlastmonthset1chair = $lastmonthnonselt1chair->fetch();
          $resultrowrlastmonthset1chair = $rowrlastmonthset1chair[0];

          $premonth = $month - 1;
          $lastmonthnonselt2chair = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and YEAR(resultdate) = '$year' and result = '12:M (jtprhsu)'");
          $lastmonthnonselt2chair->execute();
          $rowrlastmonthset2chair = $lastmonthnonselt2chair->fetch();
          $resultrowrlastmonthset2chair = $rowrlastmonthset2chair[0];


          $lastmonthsetmenttotalchair = $resultrowrlastmonthset1chair + $resultrowrlastmonthset2chair;



          ?>

          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#ff00ff">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-down fa-3x" style="margin-top: 10px;"></i>
                    <!-- <p style="margin-top: 13px;font-size:25px"><?php //echo $result 
                                                                    ?></p>        -->
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $lastmonthsetmenttotalchair ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 20px ; font-size:15px; font-weight:bolder"> NON SETTLEMENT(CHAIRMAN) <br>OF LAST MONTH </div>
                  </div>
                </div>
              </div>
            </div>

          </a>



          <?php

          $premonth = $month - 1;
          $lastmonthwidraw1 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and YEAR(resultdate) = '$year' and result = 'tpyfpf;nfhs;sg;gl;lJ'");
          $lastmonthwidraw1->execute();
          $rowrlastmonthwidraw1 = $lastmonthwidraw1->fetch();
          $resultrowrlastmonthwidraw1 = $rowrlastmonthwidraw1[0];







          ?>


          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">


            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#400040">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class=" fa fa-trash fa-3x" style="margin-top: 10px;"></i>
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $resultrowrlastmonthwidraw1 ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 120px ; font-size:15px; font-weight:bolder"> WITHDRAWAL <br>OF LAST MONTH </div>
                  </div>
                </div>
              </div>
            </div>

          </a>




        </div>

        <?php

        $premonth = $month - 1;
        $lastmonthwidraw2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and YEAR(resultdate) = '$year' and result = 'epuhfupf;fg;gl;lJ'");
        $lastmonthwidraw2->execute();
        $rowrlastmonthwidraw2 = $lastmonthwidraw2->fetch();
        $resultrowrlastmonthwidraw2 = $rowrlastmonthwidraw2[0];





        ?>
        <div class="form-row" style="margin: 50px 0 0 0">
          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">
            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#8000ff">
              <div class="text-light">
                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	 fa fa-trash fa-3x" style="margin-top: 10px;"></i>
                  </div>
                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $resultrowrlastmonthwidraw2 ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 120px ; font-size:15px; font-weight:bolder"> REJECT <br>OF LAST MONTH </div>
                  </div>
                </div>
              </div>
            </div>

          </a>


          <a href="#" class="col-md-4  noHover" style=" Text-Decoration: None">

            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#400040">
              <div class="text-light">



                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa-thumbs-up fa-3x" style="margin-top: 10px;"></i>
                    <p style="margin-top: 13px;font-size:25px"></p>
                  </div>

                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php echo $resultrdate ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 80px ; font-size:15px; font-weight:bolder"> TOTAL COMPLETED <br>DISPUTE OF LAST YEAR </div>
                  </div>
                </div>
              </div>
            </div>

          </a>






        </div>




        <?php




        $query = $db->prepare("SELECT * FROM doregister  ");
        // $proQuery = $connect->query($proSql);
        //$countpro = $proQuery->num_rows;
        $query->execute();

        $exp = 0;
        $exp1 = 0;

        while ($row = $query->fetch()) {
          if ($row['disputeCode'] == 'gpzf;F') {
            $date1 = $row['PFdate'];

            $date2 = date('m/d/Y');
            //echo "<br>";
            //echo $date2;
            $diff = abs(strtotime($date2) - strtotime($date1));
            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

            //echo "<br>";
            //echo $years;
            //echo $months."<br>";
            //echo $days;
            if ($months < 2 && $years == 0) {
            } else {
              $exp += 1;
            }
          }

          if ($row['disputeCode'] == 'jtW') {
            $date1 = $row['PFdate'];

            $date2 = date('m/d/Y');
            //echo "<br>";
            //echo $date2;
            $diff = abs(strtotime($date2) - strtotime($date1));
            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

            //echo "<br>";
            //echo $years;
            //echo $months."<br>";
            //echo $days;
            if ($months < 1 && $years == 0) {
            } else {
              $exp1 += 1;
            }
          }
        }

        ?>

        <div class="form-row" style="margin: 50px 0 0 0">

          <h5>REGISTER EXPIRED ALERT </h5>

        </div>
        <hr style="color: red">
        <div class="form-row" style="margin: 50px 0 0 0">

          <a href="ex.php" class="col-md-4  noHover" style=" Text-Decoration: None">
            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#008040">
              <div class="text-light">
                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa fa-warning fa-3x" style="margin-top: 10px;"></i>
                  </div>
                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php if ($exp == "") {
                                                                                        echo 0;
                                                                                      } else {
                                                                                        echo $exp;
                                                                                      }    ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 120px ; font-size:15px; font-weight:bolder">EXPIRED ALERT <br> <i class="ff">gpzf;F</i></div>
                  </div>
                </div>
              </div>
            </div>

          </a>


          <a href="../ex.php" class="col-md-4  noHover" style=" Text-Decoration: None">
            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#800040">
              <div class="text-light">
                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa fa-warning fa-3x" style="margin-top: 10px;"></i>
                  </div>
                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php if ($exp1 == "") {
                                                                                        echo 0;
                                                                                      } else {
                                                                                        echo $exp1;
                                                                                      }    ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 120px ; font-size:15px; font-weight:bolder">EXPIRED ALERT <br><i class="ff">jtW</i></div>
                  </div>
                </div>
              </div>
            </div>

          </a>




        </div>
        <br>

        <div class="form-row" style="margin: 50px 0 0 0">

          <h5>PROCESS EXPIRED ALERT </h5>

        </div>
        <hr style="color: red">

        <div class="form-row" style="margin: 50px 0 0 0">



          <?php




          $query = $db->prepare("SELECT * FROM doprocess  ");
          // $proQuery = $connect->query($proSql);
          //$countpro = $proQuery->num_rows;
          $query->execute();

          $x = 0;
          $y = 0;

          while ($row = $query->fetch()) {
            if ($row['disputeCode'] == 'gpzf;F') {
              $date1 = $row['PFdate'];

              $date2 = date('m/d/Y');
              //echo "<br>";
              //echo $date2;
              $diff = abs(strtotime($date2) - strtotime($date1));
              $years = floor($diff / (365 * 60 * 60 * 24));
              $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
              $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

              //echo "<br>";
              //echo $years;
              //echo $months."<br>";
              //echo $days;
              if ($months < 2 && $years == 0) {
              } else {
                $x += 1;
              }
            }

            if ($row['disputeCode'] == 'jtW') {
              $date1 = $row['PFdate'];

              $date2 = date('m/d/Y');
              //echo "<br>";
              //echo $date2;
              $diff = abs(strtotime($date2) - strtotime($date1));
              $years = floor($diff / (365 * 60 * 60 * 24));
              $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
              $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

              //echo "<br>";
              //echo $years;
              //echo $months."<br>";
              //echo $days;
              if ($months < 1 && $years == 0) {
              } else {
                $y += 1;
              }
            }
          }

          ?>



          <a href="../ex.php" class="col-md-4  noHover" style=" Text-Decoration: None">
            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#0000a0">
              <div class="text-light">
                <div class="row ">
                  <div class=" col-md-1">
                    <i class="	fa fa fa-warning fa-3x" style="margin-top: 10px;"></i>
                  </div>
                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php if ($x == "") {
                                                                                        echo   0;
                                                                                      } else {
                                                                                        echo $x;
                                                                                      }    ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 120px ; font-size:15px; font-weight:bolder">EXPIRED ALERT <br><i class="ff">gpzf;F</i></div>
                  </div>
                </div>
              </div>
            </div>

          </a>



          <a href="../ex.php" class="col-md-4  noHover" style=" Text-Decoration: None">
            <div class="rounded" style="padding:20px 20px 5px 35px; background-color:#400080">
              <div class="text-light">
                <div class="row">
                  <div class="col-md-1">
                    <i class="	fa fa-warning fa-3x" style="margin-top: 10px;"></i>
                  </div>
                  <div class=" col-md-3 ">
                    <div style=" font-size:40px;margin:0 0 0 140px;font-weight:100px"><?php if ($y == "") {
                                                                                        echo 0;
                                                                                      } else {
                                                                                       echo $y;
                                                                                      }    ?></div>
                    <div style="white-space: nowrap; margin:0 0 0 120px ; font-size:15px; font-weight:bolder"> EXPIRED ALERT <br><i class="ff">jtW</i></div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>



        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
</body>

</html>