<?php include('header.php') ?>
 

<style>

.cap
  {
    padding: 40px 0 8px 0;
  }
 

 @font-face{
   font-family:bamini;
   src: url('fonts/Bamini.ttf')
 }
 .ff
 {
   font-family:bamini;
   font-size:2 10px;
   font-weight: bolder;
 } 
 .ff input[type=text] {
        font-size: 15px;
        border-radius: 1px;
        border-style: inset;

        
 }

 form input[type=text]
 {
      border-style: inset;
 }
 
</style>

<br><br>
<div class="container">

<div class="row">
	<div class="col-md-12">
 

    <div class="casrd">
  <h5  class="bg-primary text-white card-header">EXPIRATE ALERT  REGISTER</h5>
  <div class="card-body">
 
				<table class="table table-hover">
					<thead>
						<tr>
        <th>  தொ இலக்கம் </th>
        <th>  பிணக்கு/தவறு இலக்கம் </th>
        <th>  பிணக்கு/தவறு      </th>
          <th>  ஆற்றுப்படுத்திய திகதி    </th>
          <th>  1ம் கட்சிக்காரர்  </th>
          <th>  2ம் கட்சிக்காரர்    </th>                  
          <th>  பிணக்கு/தவறு தன்மை </th>
          <th>  பிணக்கு/தவறு வந்த முறை </th>
       

 
							
						</tr>
					</thead>
					<tbody>
				<?php
				   include('connect.php');

          // WHERE disputeCode='gpzf;F'  
            $query = $db->prepare("SELECT * FROM doregister");
             $query->execute();
            // $row = $query->fetch();
            

          //   $row = $query->fetch();
			//$query="select * from doregister ";
    //	$result=mysqli_query($query) or die("query failed <br><b>".mysqli_error());	
    

      
            $no=1;
            while ($row = $query->fetch()) {
                if ($row['disputeCode']=='gpzf;F') {
                    $date1 = $row['PFdate'];
                    $date2 = date('m/d/Y');
                
    
                    $diff =  abs(strtotime($date2) - strtotime($date1));
                    $years = floor($diff / (365*60*60*24));
                    $months= floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                

              
                    if ($months<2 && $years==0) {
                        // echo $months;
                    // echo '<br>';
                    } else {
                        ?>
			<tr>
      <td ><?php echo $no++; ?></td>
      <td ><?php echo $row['disputeNo']; ?></td>
			<td class="ff"><?php echo $row['disputeCode']; ?></td>      
			<td><?php echo $row['PFdate']; ?></td>
			<td class="ff"><?php echo $row['Fclient']; ?></td>
			<td class="ff"><?php echo $row['Sclient']; ?></td>
      <td class="ff"><?php echo $row['disputeType']; ?></td>
			<td class="ff"><?php echo $row['disputeRcvMethod']; ?></td>
            
			
			</tr>
			<?php
                    }
                }
            
      
                elseif($row['disputeCode']=='jtW')
                {

          
                     
                        $date1 = $row['PFdate'];
                        $date2 = date('m/d/Y');
                
    
                        $diff =  abs(strtotime($date2) - strtotime($date1));
                        $years = floor($diff / (365*60*60*24));
                        $months= floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                

              
                        if ($months<1 && $years==0) {
                    // echo $months;
                    // echo '<br>';
                } else {
                    ?>
                 <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['disputeNo']; ?></td>
                   <td class="ff"><?php echo $row['disputeCode']; ?></td>      
                  <td><?php echo $row['PFdate']; ?></td>
                  <td class="ff"><?php echo $row['Fclient']; ?></td>
                  <td class="ff"><?php echo $row['Sclient']; ?></td>
                  <td class="ff"><?php echo $row['disputeType']; ?></td>
                  <td class="ff"><?php echo $row['disputeRcvMethod']; ?></td>

                </tr> 
			
		
			<?php
               }
              }
            } 
           
        
      
        ?>	
				</tbody>
				</table>
				<!-- /table -->

		 <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->
</div>
 

<br><br>
<div class="container">

<div class="row">
	<div class="col-md-12">
 
  <h5  class="bg-primary text-white card-header">EXPIRATE ALERT  PROCESS</h5>
  <div class="card-body">
	<table class="table table-hover">
					<thead>
						<tr>
        <th>  தொ இலக்கம் </th>
        <th>  பிணக்கு/தவறு இலக்கம் </th>
        <th>  பிணக்கு/தவறு      </th>
          <th>  ஆற்றுப்படுத்திய திகதி    </th>
          <th>  1ம்கட்சிக்காரர்  </th>
          <th>  2ம்கட்சிக்காரர்    </th>                  
          <th>  பிணக்கு/தவறு தன்மை </th>
          <th>  பிணக்கு/தவறு வந்த முறை </th>
          <th> பிரதான மத்தியஸ்தர் </th>
							
						</tr>
					</thead>
					<tbody>
				<?php
				   include('connect.php');

          // WHERE disputeCode='gpzf;F'  
            $query = $db->prepare("SELECT * FROM doprocess");
             $query->execute();
            // $row = $query->fetch();
            

          //   $row = $query->fetch();
			//$query="select * from doregister ";
    //	$result=mysqli_query($query) or die("query failed <br><b>".mysqli_error());	
    

      
            $no=1;
            while ($row = $query->fetch()) {
                if ($row['disputeCode']=='gpzf;F') {
                    $date1 = $row['PFdate'];
                    $date2 = date('m/d/Y');
                
    
                    $diff =  abs(strtotime($date2) - strtotime($date1));
                    $years = floor($diff / (365*60*60*24));
                    $months= floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                

              
                    if ($months<2 && $years==0) {
                        // echo $months;
                    // echo '<br>';
                    } else {
                        ?>
			<tr>
      <td ><?php echo $no++; ?></td>
      <td ><?php echo $row['disputeNo']; ?></td>
			<td class="ff"><?php echo $row['disputeCode']; ?></td>      
			<td><?php echo $row['PFdate']; ?></td>
			<td class="ff"><?php echo $row['Fparty']; ?></td>
			<td class="ff"><?php echo $row['Sparty']; ?></td>
            <td class="ff"><?php echo $row['disputeType']; ?></td>
      <td class="ff"><?php echo $row['disputeRcvMethod']; ?></td>
      <td class="ff"><?php echo $row['mainmediatior']; ?></td>
      
            
			
			</tr>
			<?php
                    }
                }
            
      
                elseif($row['disputeCode']=='jtW')
                {

          
                     
                        $date1 = $row['PFdate'];
                        $date2 = date('m/d/Y');
                
    
                        $diff =  abs(strtotime($date2) - strtotime($date1));
                        $years = floor($diff / (365*60*60*24));
                        $months= floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                

              
                        if ($months<1 && $years==0) {
                    // echo $months;
                    // echo '<br>';
                } else {
                    ?>
                 <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $row['disputeNo']; ?></td>
                   <td class="ff"><?php echo $row['disputeCode']; ?></td>      
                  <td><?php echo $row['PFdate']; ?></td>
                  <td class="ff"><?php echo $row['Fparty']; ?></td>
                  <td class="ff"><?php echo $row['Sparty']; ?></td>
                  <td class="ff"><?php echo $row['disputeType']; ?></td>
                  <td class="ff"><?php echo $row['disputeRcvMethod']; ?></td>
                  <td class="ff"><?php echo $row['mainmediatior']; ?></td>

                </tr> 
			
		
			<?php
               }
              }
            } 
           
        
      
        ?>	
				</tbody>
				</table>


   
        </div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->
</div>








<script src="custom/js/product.js"></script>
