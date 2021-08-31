<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete View</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  >

</head>
<body>
<?php include('header.php') ?>
   
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
 .cap
  {
    padding: 40px 0 10px 0;
  }
  
  .table th{
    padding:0px 20px 10px 20px;
    text-align:justify;
     
   
    height: 25px;
    white-space: nowrap;
    
  }

  .modal {
  width: 1500px;
  margin: auto;
}
</style>

                
<div style="margin:2% 5% 15% 5%">
 
 <h2 class="page-header text-primary  " style=" margin:2px 0 50px 20px;font-size:25px">
                 
                    COMPLETE VIEW
                 </h2>
                 <hr>



<table id="tableid" class="table table-sm table-hover table-responsive table-bordered">
<a class="btn btn-success float-right" style="width: 10%" href="<?php $_SERVER['PHP_SELF'];?>" class="alert-link"> <i class="fa fa-refresh"></i>  Refresh </a> 

<div style="margin-left: 50%">

<!-- <label for=""> search </label> -->

</div>

<!-- <table id="tableid" class="table"> -->
  <thead>
  
  <tr class="bg-primary  " style="color:white;font-size:12px;">    
         <th  >  தொ இலக்கம் </th>
        <th>  பிணக்கு/தவறு  இலக்கம் </th>
          <th >  ஆற்றுப்படுத்திய திகதி    </th>
          <th>  1ம் கட்சிக்காரர்  </th>
          <th>  2ம் கட்சிக்காரர்    </th>                  
          <th>  பிணக்கு/தவறு         </th>         
          <th>  பிணக்கு/தவறு  தன்மை </th>
          <th>  பிணக்கு/தவறு  வந்த முறை </th>
          <th>நீதிமன்ற வழக்கு இலக்கம்   </th>                  
          <th>  நீதிமன்ற.மறுதவணை திகதி     </th>         
          <th>  பொலிஸ் இலக்கம் </th>
          <th>  பொலிஸ்.இலக்கம் திகதி </th>

          <th>  சபை நிறுவிய திகதி      </th>         
          <th> பிரதான மத்தியஸ்தர் </th>
          <th> 1ம் மத்தியஸ்தர் </th>
          <th>2ம் மத்தியஸ்தர்   </th>                  
          <th> 1ம் தவணை திகதி     </th>         
          <th> 2ம் தவணை திகதி </th>
          <th>  3ம் தவணை திகதி </th>
          <th>  4ம் தவணை திகதி </th>
          <th>  5ம் தவணை திகதி </th>
          <th>  6ம் தவணை திகதி </th>

          <th> requstimg</th>
          <th> finalreportimg</th>
          <th>  agreover </th>

          <th>  பெறுபேறு </th>
          <th> பெறுபேறு திகதி </th>
 
          <th> <div style="padding:5px;font-size:15px" class="btn-group"> Action </div> </th>                      

    </tr>
  </thead>
  <tbody>

<?php 


include('php/docase.php');
$regview = new docase();  
$rows = $regview->compview();  
$no=1;
if(!$rows)
{
    echo "No Datas";
}
else
{
    foreach ($rows as $row) {
        ?>



    <tr>
      <!-- <th scope="row">1</th> -->
       <td style="font-weight: bolder;"><?php echo $no++?></td>

            <td style="font-weight: bolder"><?php echo $row['disputeNo'] ?></td>
            <td  class="ff"><?php echo  ( $row['PFdate']) ?></td>
            <td class="ff"><?php echo  ( $row['Fparty']) ?></td>
            <td class="ff"><?php echo   ($row['Sparty']) ?></td>
            <td class="ff"><?php echo   ($row['disputeCode'] )?></td>
            <td class="ff"><?php echo   ($row['disputeType'] )?></td>
            <td class="ff "><?php echo   ($row['disputeRcvMethod'] )?></td>
            
            <td  style="font-size: 14px"><?php echo   ($row['Courdno'] )?></td>
            <td class="ff"><?php echo   ($row['Courdnodate'] )?></td>
            <td  style="font-size: 14px"><?php echo($row['Policeno'] )?></td>
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

            <td  style="padding:10px"><img  src="doc/<?php echo $row['requstimg'] ?>" class="rounded-crircle zz" width="70px" height="40px" alt="..."></td>
            <td style="padding:10px"><img  src="doc/<?php echo $row['finalreportimg'] ?>" class="rounded-cirrcle" width="70px" height="40px" alt="..."></td>
            <td  style="padding:10px"><img  src="doc/<?php echo $row['agreover'] ?>" class="rounded-cirrcle" width="70px" height="40px" alt="..."></td>

            <!-- <td  style="padding:10px"><img  src="doc/  510719326-person-icon.png" class="rounded-cirrcle" width="70px" height="40px" alt="..."></td> -->

          

            <td class="ff"><?php echo   ($row['result'] )?></td>
            <td class="ff"><?php echo   ($row['resultdate'] )?></td>

          
          <td>
            <div class="btn-group " style="padding: 15px">
            <a class="btn btn-success" href="comedite.php?id=<?php echo $row['disputeNo'] ?>">Edite</a>
            <?php  

            }
          }
          
          ?>
            </div>
          </td>

        </tr>

      

      
           
            </div>
          </td>
    </tr>
 
  </tbody>
</table>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"    role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
       
        <img src='' id="dd" class="rounded-cirrcle" width="100%" height="100%" alt="...">

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>









<button id="j" class="btn btn-primary btn-lg rounded-0" >Print</button>



 

                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" ></script>
                 <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" ></script>


 
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

    $('img').click(function(){
      var src = $(this).attr('src');
      $('#dd').attr('src',src)
        $('#exampleModal').modal('show')
    })
</script>


<script>

                  $('document').ready(function(){

                    $('#j').click(function(){

                      $('.btn-group').hide();

                  // var divToPrint = document.getElementById('table');
                  //     var htmlToPrint = '' +
                  //         '<style type="text/css">' +
                  //         'table th, table td {' +
                  //         'border:1px solid #000;' +
                  //         'padding:0.5em;' +
                  //         '}' +
                  //         '</style>';
                  //     htmlToPrint += divToPrint.outerHTML;
                  //     newWin = window.open("");
                  //     newWin.document.write(htmlToPrint);
                  //     newWin.print();
                  //     newWin.close();



                      var print = document.getElementById('tableid');

                      var htmlToPrint = '' +  // doublequation is display text in prinview
                      
                        '  <style type="text/css">'+
                          '  table {'+
                            ' border-collapse: collapse;'+
                          '    width: 100%;'+
                          '  }'+
                          ' th {color:black; }'+
                              'th,td{ border: 1px solid #ddd; padding: 1px 1px 1px 1px;}'+
                          '   td.ff {'+
                          '  padding: 1px 1px 1px 1px;' +
                            '  text-align: left;'+
                            'font-family:bamini;'+
                          
                            '}'+
                          ' </style>';

                  
                          

                    htmlToPrint += print.outerHTML;
                   
                      var pri = window.open('','','width=20000,height=1000');
                        pri.document.write(htmlToPrint);
                        pri.document.close();
                        pri.focus();
                        pri.print();
                    //   pri.close();

                    $('.btn-group').show();

                    })

               
                  })


                  </script>

                  <img src="doc/510719326-person-icon.png" alt="">

                  <script>

                //  $('document').ready(function(){

                      // $('img').click(function(){
                      //   var src = $(this).attr('src');
                      //   $('#dd').attr('src',src)
                      //    $('#exampleModal').modal('show')
                      // })

               //   })


                  </script>



</body>
</html>