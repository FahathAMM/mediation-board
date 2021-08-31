<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proview View</title>
    <link rel="stylesheet" href="css1/fontawesome.min.css" >
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
                
                   PROCESS VIEW
                </h2>
                <hr>
                

<a class="btn btn-success float-right" style="width: 10%" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a> 

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


          <th>  சபை.நிறுவிய திகதி      </th>     
          <th> பிரதான மத்தியஸ்தர் </th>
          <th> 1ம் மத்தியஸ்தர் </th>
          <th>2ம் மத்தியஸ்தர்   </th>         
          
          <th> 1ம்.தவணை திகதி     </th>         
          <th> 2ம்.தவணை திகதி </th>
          <th>  3ம்.தவணை திகதி </th>
          <th>  4ம்.தவணை திகதி </th>
          <th>  5ம்.தவணை திகதி </th>
          <th>  6ம்.தவணை திகதி </th>


          <th> <div style="margin-left:60px;font-size:20px"> Action </div> </th>                      

    </tr>
    </thead>
    <tbody>
       <?php 

        include('php/docase.php');
        $regview = new docase();  
        $rows = $regview->proview();  
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
            <td class="ff"><?php echo  ( $row['Fparty']) ?></td>
            <td class="ff"><?php echo   ($row['Sparty']) ?></td>
            <td class="ff" ><?php echo   ($row['disputeCode'] )?></td>
            <td class="ff"><?php echo   ($row['disputeType'] )?></td>
            <td class="ff"><?php echo   ($row['disputeRcvMethod'] )?></td>
            
            <td style="font-size: 14px"><?php echo   ($row['Courdno'] )?></td>
            <td class="ff"><?php echo   ($row['Courdnodate'] )?></td>
            <td style="font-size: 14px"><?php echo   ($row['Policeno'] )?></td>
            <td class="ff"><?php echo   ($row['Policenodate'] )?></td>

            <td class="ff"><?php echo   ($row['Counclformdate'] )?></td>
            <td class="ff"><?php echo   ($row['mainmediatior'] )?></td>
            <td class="ff"><?php echo   ($row['fmediatior'] )?></td>
            <td class="ff"><?php echo   ($row['smediatior'] )?></td>
           
            <td class="ff"><?php echo   ($row['fterm'] )?></td>
            <td class="ff"><?php echo   ($row['sterm'] )?></td>
            <td class="ff"><?php echo   ($row['tterm'] )?></td>
            <td class="ff"><?php echo   ($row['foterm'] )?></td>
            <td class="ff"><?php echo   ($row['fiterm'] )?></td>
            <td class="ff"><?php echo   ($row['siterm'] )?></td>
          <td>
          <div class="btn-group " style="margin-left:25px;">
            <a class="btn btn-primary" href="proupdate.php?regid=<?php echo $row['disputeNo'] ?>">Complete/Process</a>
            <!-- <a class="btn btn-danger" href=> Reject</a> -->
            <a class="btn btn-success"  href="proedite.php?id=<?php echo $row['disputeNo'] ?>">Edite</a>
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
          [5,10,25,50,-1],
          [5,10,25,50,"All"]
 
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