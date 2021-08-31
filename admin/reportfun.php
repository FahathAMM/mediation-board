<?php 


        class repoert
        {
            

            public function ff()
            {
                
            include('connect.php');

                $rdate    = date('yy-m-d');
                $rdate    = explode('-',$rdate);
                $year     = $rdate[0];
                $month    = $rdate[1];
              

                $premonth = $month-1;
                $lastmonthwidraw2 = $db->prepare("SELECT COUNT(*) FROM docomplete WHERE MONTH(resultdate) = '$premonth' and YEAR(resultdate) = '$year' and result = 'epuhfupf;fg;gl;lJ'");
                $lastmonthwidraw2->execute();                                                                                                                    
                $rowrlastmonthwidraw2 = $lastmonthwidraw2->fetch(); 
                $resultrowrlastmonthwidraw2 = $rowrlastmonthwidraw2[0];

            }
        }



?>