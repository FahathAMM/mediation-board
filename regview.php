<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register View</title>
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
 
 .table th{
    padding:0px 20px 10px 20px;
    text-align:justify;
     
   
    height: 25px;
    white-space: nowrap;
    
  }
</style>

               
<div style="margin:2% 5% 15% 5%">
 
<h2 class="page-header text-primary  " style=" margin:0px 0 50px 20px;font-size:25px">
                
                REGISTER VIEW
             </h2>
             <hr>
              
 <?php 
 
  
 
 
 

       
 
 ?>
<a  class="btn btn-success float-right" style="width: 10%" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a> 

<table id="tableid" class="table table-sm table-hover table-responsive table-bordered">
 
<thead>

    <tr class="bg-primary  " style="color:white;font-size:12px;">    
         <th>  தொ இலக்கம் </th>
        <th>  பிணக்கு/தவறு இலக்கம் </th>
          <th>  ஆற்றுப்படுத்திய திகதி    </th>
          <th>  1ம் கட்சிக்காரர்  </th>
          <th>  2ம் கட்சிக்காரர்    </th>                  
          <th>  பிணக்கு/தவறு      </th>
         
          <th>  பிணக்கு/தவறு தன்மை </th>
          <th>  பிணக்கு/தவறு வந்த முறை </th>

          <th>நீதிமன்ற வழக்கு இலக்கம்   </th>                  
          <th>  நீதிமன்ற மறுதவணை திகதி     </th>
         
          <th>  பொலிஸ் இலக்கம் </th>
          <th>  பொலிஸ் இலக்கம் திகதி </th>
          <th> <div style="margin-left:60px;font-size:20px"> Action </div> </th>                      

    </tr>
</thead>

    <tbody>
       <?php 

        include('php/docase.php');
        $regview = new docase();  
        $rows = $regview->regviiew();  
        $no=1;
        if(!$rows)
        {
            echo "No Datas";
        }
        else
        {

        
       foreach($rows as $row)
       {

     

       ?>
   
       <tr >
       <td style="font-weight: bolder;"><?php echo $no++?></td>
            <td style="font-weight: bolder"><?php echo $row['disputeNo'] ?></td>
            <td class="ff"><?php echo  ( $row['PFdate']) ?></td>
            <td class="ff"><?php echo  ( $row['Fclient']) ?></td>
            <td class="ff"><?php echo   ($row['Sclient']) ?></td>
            <td class="ff" ><?php echo   ($row['disputeCode'] )?></td>
            <td class="ff"><?php echo   ($row['disputeType'] )?></td>
            <td class="ff"><?php echo   ($row['disputeRcvMethod'] )?></td>
            
            <td style="font-size:15px "><?php echo   ($row['Courdno'] )?></td>
            <td class="ff"><?php echo   ($row['Courdnodate'] )?></td>
            <td style="font-size:15px "><?php echo   ($row['Policeno'] )?></td>
            <td class="ff"><?php echo   ($row['Policenodate'] )?></td>



            
              
          <td>
            <div class="btn-group " style="margin-left:25px; padding:30px 25px 10px 10px;">
            <a class="btn btn-primary" href="process.php?regid=<?php echo $row['disputeNo'] ?>">Process</a>
            <!-- <a class="btn btn-danger" href=> Reject</a> -->
            <a class="btn btn-success"  href="regeddite.php?edid=<?php echo $row['disputeNo'] ?>">Edite</a>
            <?php   }} ?>
            </div>
          </td>
        </tr>
  
      </tbody>
    </table> 
    </div>
    </div>
    <?php include('fooder.php') ?>


    
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css"/>
 
    <script type="text/javascript" src="plugin/DataTables/datatables.js"></script>

   <script>

$(document).ready(function() {
    $('#tableid').DataTable({
      // "dom": 'lrtip',
      // "dom": '<"wrapper"flipt>',
    
      // "dom": '<"top"i>rt<"bottom"flp><"clear">',
      // "dom":'SVGFEComponentTransferElement',
     // dom: 'Bfrtip',
      // dom:'defaultStatus',
    //  scrollY: 500,
    // "language": {
    //   "emptyTable": "No data available in table"
    // },

    
     "dom": '<lf<t>ip>',
      paging: true,
 

        "pagingType":"full_numbers",
        "lengthMenu":[
          [5,25,50,-1],
          [5,25,50,"All"]
 
        ],
        responsive : true,
      //  "olanguage":{
          
         // font:"bamini",
        //},

        "oLanguage": {
           "sSearch": "Search Records",    
   }
 

    });

} );


</script>




    
</body>
</html>