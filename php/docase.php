 
<?php 
error_reporting(0);
class docase
{
    public function Rinsert()
    {
        include('connect.php');
        
        try {
            if (isset($_POST['save'])) {
                $disputeno = $_POST['disputeno'];
                $pfdate = $_POST['pfdate'];
                $fclien = $_POST['fclient'];
                $sclient = $_POST['sclient'];
                $disputecode = $_POST['desputecode'];
                $disputetype = $_POST['disputetype'];
                $disputeplace = $_POST['disputeplace'];

              
               

                $courdno = $_POST['cn'];
                $courdnodate = $_POST['cnd'];
                $policeno = $_POST['pn'];
                $policenodate = $_POST['pnd'];
         
              
                 if (strlen($courdno)> 0 or strlen($courdnodate)>0) 
                {
                    $policeno= "..........";
                    $policenodate="..........";
            

                    $sql = "INSERT INTO doregister (`disputeNo`, `PFdate`, `Fclient`, `Sclient`, `disputeCode`, `disputeType`, `disputeRcvMethod`,`Courdno`, `Courdnodate`, `Policeno`, `Policenodate`) VALUES ('$disputeno','$pfdate','$fclien','$sclient','$disputecode','$disputetype','$disputeplace','$courdno','$courdnodate','$policeno','$policenodate')";
                    $db->exec($sql);
                }
                 elseif (strlen($policeno)> 0 or strlen($policenodate)>0)
                 {
                    $courdno="....................";
                    $courdnodate="....................";

                    $sql = "INSERT INTO doregister (`disputeNo`, `PFdate`, `Fclient`, `Sclient`, `disputeCode`, `disputeType`, `disputeRcvMethod`,`Courdno`, `Courdnodate`, `Policeno`, `Policenodate`) VALUES ('$disputeno','$pfdate','$fclien','$sclient','$disputecode','$disputetype','$disputeplace','$courdno','$courdnodate','$policeno','$policenodate')";
                    $db->exec($sql);

                    
                }
                else 
                {
                   $policeno=       "...............";
                   $policenodate=   "...............";
                   $courdno=        "...............";
                   $courdnodate=    "...............";
                   $sql = "INSERT INTO doregister (`disputeNo`, `PFdate`, `Fclient`, `Sclient`, `disputeCode`, `disputeType`, `disputeRcvMethod`,`Courdno`, `Courdnodate`, `Policeno`, `Policenodate`) VALUES ('$disputeno','$pfdate','$fclien','$sclient','$disputecode','$disputetype','$disputeplace','$courdno','$courdnodate','$policeno','$policenodate')";
                   $db->exec($sql);
               }
            
                    ?>
                

                    <div class="alert alert-success" role="alert">
                    Chairman of Z.I Asmeer Success Register...If Click <a href="regview.php" class="alert-link">Here</a>.You can See Register Datas....<br>If You Enter the Data You Must <a href="<?php $_SERVER['PHP_SELF'] ?>" class="alert-link">Here</a>  
                    </div>

                    <?php

          //  echo "<script> alert ('Success Register');</script>";
                }
    }
         catch (PDOException $e) {
             echo $sql."<br>".$e->getMessage();
           // echo "<script> alert ('Something Wrong overal Refresh and Again Enter ');</script>";
        }
    }
    public function regviiew()
    {
        include('connect.php');

        $data=null;
        $sql  = $db->prepare("SELECT * FROM doregister");
        $sql->execute();

     
        while ($row= $sql->fetch()) {
            $data[] = $row;
        }

        return $data;

        // $result = $db->prepare("SELECT * from client WHERE email = '$email' && password='$pass'");
    }
    
    public function getreg($regid)
    {
        include('connect.php');

        $data=null;
        $sql  = $db->prepare("SELECT * FROM doregister WHERE disputeNo='$regid'");
        $sql->execute();

  
        while ($row= $sql->fetch()) {
            $data = $row;
        }

        return $data;
    }

    public function getprup($regid)
    {
        include('connect.php');

        $data=null;
        $sql  = $db->prepare("SELECT * FROM doprocess WHERE disputeNo='$regid'");
        $sql->execute();


        while ($row= $sql->fetch()) {
            $data = $row;
        }

        return $data;
    }

    public function proinsert()
    {
        include('connect.php');

      
         
        if (isset($_POST['save'])) {
            $disputeno = $_POST['disputeNo'];
            $pfdate = $_POST['pfdate'];
            $fparty = $_POST['fclient'];
            $sparty = $_POST['sclient'];
            $disputecode = $_POST['desputecode'];
            $disputetype = $_POST['disputetype'];
            $disputeplace = $_POST['disputeplace'];

            $courdno = $_POST['cn'];
            $courdnodate = $_POST['cnd'];
            $policeno = $_POST['pn'];
            $policenodate = $_POST['pnd'];
                
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

            $deaddate = $_SESSION['ddate'];
         
         
            if (strlen($re)> 0) {
                if (empty($resultdate)) {
                    ?>        
                    <div class="alert alert-danger" role="alert">
                    <p> Chairman of Z.I Asmeer Go Back... and  Please Enter The Result Date.... Thank you......</p>
                    </div>                 
                <?php
                } else {
                    $sql = "INSERT INTO `docomplete`( `disputeNo`, `PFdate`, `Fparty`, `Sparty`, `disputeCode`, `disputeType`, `disputeRcvMethod`, `Courdno`, `Courdnodate`, `Policeno`, `Policenodate`, `deaddate`, `Counclformdate`, `mainmediatior`, `fmediatior`, `smediatior`, `fterm`, `sterm`, `tterm`, `foterm`, `fiterm`, `siterm`, `result`,`resultdate`) VALUES('$disputeno', '$pfdate', '$fparty', '$sparty', '$disputecode', '$disputetype', '$disputeplace', '$courdno', '$courdnodate', '$policeno', '$policenodate', '$deaddate', '$councilfdate', '$mainmediator', '$fmediator', '$smediator', '$fterm', '$sterm', '$tterm', '$foterm', '$fiterm','$siterm','$re','$resultdate')";
                    $db->exec($sql);
                  
                    $sql1 = "DELETE FROM doregister WHERE disputeNo ='$disputeno'";
                    $db->exec($sql1); 
                    
                    ?>
                    
                     
 
                    <div class="alert alert-success" role="alert">
                    Chairman of Z.I Asmeer  Complete Success  ...If Click <a href="completeview.php" class="alert-link">Here</a>.You can See Complete Datas....<br> If Click Ennter Another Data Please Click<a href="regview.php" class="alert-link">Here</a>
                    </div>

                        <?php



                    // echo "<script> alert ('delete success');</script>";
                }
            } else {
                $sql = "INSERT INTO `doprocess`( `disputeNo`, `PFdate`, `Fparty`, `Sparty`, `disputeCode`, `disputeType`, `disputeRcvMethod`, `Courdno`, `Courdnodate`, `Policeno`, `Policenodate`, `deaddate`, `Counclformdate`, `mainmediatior`, `fmediatior`, `smediatior`, `fterm`, `sterm`, `tterm`, `foterm`, `fiterm`, `siterm`) VALUES('$disputeno', '$pfdate', '$fparty', '$sparty', '$disputecode', '$disputetype', '$disputeplace', '$courdno', '$courdnodate', '$policeno', '$policenodate', '$deaddate', '$councilfdate', '$mainmediator', '$fmediator', '$smediator', '$fterm', '$sterm', '$tterm', '$foterm', '$fiterm','$siterm')";
                $db->exec($sql);
              
                $sql1 = "DELETE FROM doregister WHERE disputeNo ='$disputeno'";
                $db->exec($sql1); ?>
                
                   <div class="alert alert-success" role="alert">
                    Chairman of Z.I Asmeer Process Success  ...If Click <a href="proview.php" class="alert-link">Here</a>.You can See Process Datas....<br>  If Click Ennter Another Data Please Click<a href="regview.php" class="alert-link">Here</a>


                    </div>
                <?php
            }
        }
    }
     
   
    public function proview()
    {
        include('connect.php');

        $data=null;
        $asd=0;
        $sql  = $db->prepare("SELECT * FROM doprocess ");
        $sql->execute();

    
        while ($row= $sql->fetch()) {
            $data[] = $row;
        }

        return $data;
    }

    public function compview()
    {
        include('connect.php');

        $data=null;
        $sql  = $db->prepare("SELECT * FROM docomplete");
        $sql->execute();

   
        while ($row= $sql->fetch()) {
            $data[] = $row;
        }

        return $data;

        // $result = $db->prepare("SELECT * from client WHERE email = '$email' && password='$pass'");
    }


    public function proupd()
    {
        include('connect.php');

        try {
            if (isset($_POST['save'])) {

               
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
    
                $deaddate = $_SESSION['ddate'];
             
             
                if (strlen($re)> 0) {
                    if (empty($resultdate)) {
                        ?>        
                        <div class="alert alert-danger" role="alert">
                        <p> Chairman of Z.I Asmeer Go Back... and  Please Enter The Result Date.... Thank you......</p>
                        </div>                 
                    <?php
                    } else {
                        $sql = "INSERT INTO `docomplete`( `disputeNo`, `PFdate`, `Fparty`, `Sparty`, `disputeCode`, `disputeType`, `disputeRcvMethod`, `Courdno`, `Courdnodate`, `Policeno`, `Policenodate`, `deaddate`, `Counclformdate`, `mainmediatior`, `fmediatior`, `smediatior`, `fterm`, `sterm`, `tterm`, `foterm`, `fiterm`, `siterm`, `result`,`resultdate`) VALUES('$dpn', '$pfdate', '$fparty', '$sparty', '$dosoff', '$disputetype', '$disputeplace', '$courdno', '$courdnodate', '$policeno', '$policedate', '$deaddate', '$councilfdate', '$mainmediator', '$fmediator', '$smediator', '$fterm', '$sterm', '$tterm', '$foterm', '$fiterm','$siterm','$re','$resultdate')";
                        $db->exec($sql);
                       
                        $sql1 = "DELETE FROM doprocess WHERE disputeNo ='$dpn'";
                        $db->exec($sql1); 
                   
                        ?>
                        
                   
                        <div class="alert alert-success" role="alert">
                        Chairman of Z.I Asmeer Complete Success  ...If Click <a href="completeview.php" class="alert-link">Here</a>.You can See Complete Datas....<br>If Click Ennter Another Data Please Click<a href="proview.php" class="alert-link">Here</a>

                        </div>
    
                            <?php
    
    
    
                        // echo "<script> alert ('delete success');</script>";
                    }
                }
                //update
                else {
                    $sql = "UPDATE `doprocess` SET  `disputeNo`='$dpn',`PFdate`='$pfdate',`Fparty`='$fparty',`Sparty`='$sparty',`disputeCode`='$dosoff',`disputeType`='$disputetype',`disputeRcvMethod`='$disputeplace',`Courdno`='$courdno',`Courdnodate`='$courdnodate',`Policeno`='$policeno',`Policenodate`='$policenodate',`deaddate`='$deaddate',`Counclformdate`='$councilfdate',`mainmediatior`='$mainmediator',`fmediatior`='$fmediator',`smediatior`='$smediator',`fterm`='$fterm',`sterm`='$sterm',`tterm`='$tterm',`foterm`='$foterm',`fiterm`='$fiterm',`siterm`='$siterm' WHERE disputeNo ='$dpn'";
                   
                    
                    $stm = $db->prepare($sql);
                    $stm->execute();
                    
                    ?>
                       <div class="alert alert-success" role="alert">
                        Chairman of Z.I Asmeer Process Success  ...If Click <a href="proview.php" class="alert-link">Here</a>.You can See Process Datas....<br>  If Click Ennter Another Data Please Click<a href="proview.php" class="alert-link">Here</a>


                        </div>
                    <?php
                }
            }
        } catch (PDOException $e) {
             echo $sql."<br>".$e->getMessage();
           // echo "<script> alert ('Something Wrong overal Refresh and Again Enter ');</script>";
        }
    }


 
}

 

?>
 