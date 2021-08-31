<?php 

    class member
    {
        public function insertdis()
        {
            include('../connect.php');
               
            try {
                if(isset($_POST['save']))
                {
                   

                    move_uploaded_file($_FILES["img"]["tmp_name"], "image/" . $_FILES["img"]["name"]);
                    $location=$_FILES["img"]["name"];


                     $mid = $_POST['Mid'];
                    
                     $mname = $_POST['mname'];
                     $madd = $_POST['madd'];
                     $nic = $_POST['nic'];

            
                     $phone = $_POST['phone'];
                

                    $sql1 = "INSERT INTO members(`MID`, `Name`, `Address`, `MNIC`, `Mimg`,`phone`) VALUES ( '$mid','$mname','$madd','$nic','$location','$phone')";
                    $db->exec($sql1);
                 

                    echo "<script> alert('Success Add'); </script>";
                     
                    
                }
            } catch (PDOException $e) 
            {
               // echo $sql1."<br>".$e->getMessage(); refresh error message show 
               echo "<script> alert('Add Data'); </script>";
            }
            
            

        }

        public function delete($mid)
        {
            include('../connect.php');
            $sql = "DELETE FROM Members WHERE MID='$mid'";
            $db->exec($sql);
            ?>
            <script> 
            alert('Success Delete'); 
            window.location = "addmem.php";
            </script>

              <?php
        
        }
    }


?>