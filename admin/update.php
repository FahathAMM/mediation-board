
<?php 



include('../connect.php');
               
try {
    if(isset($_POST['update']))
    {
       

        move_uploaded_file($_FILES["img"]["tmp_name"], "image/" . $_FILES["img"]["name"]);
        $location=$_FILES["img"]["name"];


         $mid = $_POST['Mid'];        
         $mname = $_POST['mname'];
         $madd = $_POST['madd'];
         $nic = $_POST['nic'];


         $phone = $_POST['phone'];
    

        // $sql1 = "INSERT INTO members(`MID`, `Name`, `Address`, `MNIC`, `Mimg`,`phone`) VALUES ( '$mid','$mname','$madd','$nic','$location','$phone')";
        // $db->exec($sql1);

     
        $sql = "UPDATE `members` SET `MID`='$mid',`Name`='$mname',`Address`='$madd',`MNIC`='$nic',`Mimg`='$location',`phone`='$phone' WHERE MID='$mid'";
 
        $stm = $db->prepare($sql);
        $stm->execute();
?>
        <script> 
        alert('Success update'); 
        window.location = "addmem.php";
        </script>
         
    <?php    
    }
} catch (PDOException $e) 
{
   // echo $sql1."<br>".$e->getMessage(); refresh error message show 
   echo "<script> alert('Add Data'); </script>";
}








?>