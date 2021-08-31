<?php 

 
include('member.php'); 

   
       
    if( isset( $_REQUEST['mid']))
    {
        $delete = new member;
        $id = $_REQUEST['mid'];
        $del = $delete->delete($id);
       
    }
     
?>