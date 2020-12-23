<!DOCTYPE html>
<html>
<head>
	<title>Overall Report</title>

  <style>
    
    .smallcard{

      cursor: pointer;
    }


  </style>


</head>
<body>
	<?php include '../header.php';?>

<div style="margin-top: -35px" class="rowmargin">
	

	<div class="row">

	

	<div style="padding: 10px;  " class="col align-middle">

	
	<button style="width:99%; margin: 10px;  " class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Filter By Date</button>



	<!-- Modal -->
<div class="modal fade" id="printingkhata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Date To Filter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      	<div class="row">
      		
      		<div class="col-md-6">  


      			<label style="color: black!important" for="startdate">Starting Date</label>
				<input id="startdate" type="date" class="form-control" placeholder="Enter Date" name=""><br>

      		</div>


      		<div class="col-md-6">  


      			<label style="color: black!important" for="enddate">Ending Date</label>
				<input id="enddate" type="date" class="form-control" placeholder="Enter Date" name=""><br>

      		</div>


      	</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Filter It</button>
      </div>
    </div>
  </div>
</div>



	<!--- model ending --->


	</div>

	



	</div><!--- filter button row ending --->






	<div class="row">
		

		<div class="col-md-4">
			

			<div onclick="window.location='/zeeproject/sales';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Sales</h3>
    				
    				

    				<table class="table">

					<?php

					
					
$sql = "select DATE(created_at),SUM(total_bill) from sales where DATE(created_at)='".date('Y-m-d')."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['SUM(total_bill)'];
	   // $task_date=$data['task_date'];
	   if($created_at==''){
		echo '<tr><td><b>Today</b></td><td>0</td></tr>';
	   }
	   else{
	   echo '<tr><td><b>Today</b></td><td>'.$created_at.'</td></tr>';
	   }
   //   }

   }
   else{
	   echo '<tr><td>Today</td><td>0</td></tr>';
   }
   
   $sql = "select DATE(created_at),SUM(total_bill) from sales where DATE(created_at)='".date('Y-m-d',strtotime("-1 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['SUM(total_bill)'];
	   // $task_date=$data['task_date'];
	   if($created_at==''){
		echo '<tr><td><b>Yesterday</b></td><td>0</td></tr>';
	   }
	   else{
	   echo '<tr><td><b>Yesterday</b></td><td>'.$created_at.'</td></tr>';
	   }
   //   }

   }
   else{
	   echo '<tr><td>Yesterday</td><td>0</td></tr>';
   }
  
   $sql = "select DATE(created_at),SUM(total_bill) from sales where DATE(created_at)>='".date('Y-m-d',strtotime("-7 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['SUM(total_bill)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Week</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Last Week</td><td>0</td></tr>';
   }

   $sql = "select DATE(created_at),SUM(total_bill) from sales where DATE(created_at)>='".date('Y-01-01',strtotime("-1 years"))."'
   and DATE(created_at)<='".date('Y-12-31',strtotime("-1 years"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['SUM(total_bill)'];
		if($created_at==NULL){
			echo"<tr><td><b> Last Year</b></td><td>0</td></tr>";
		}
		else{
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Year</b></td><td>'.$created_at.'</td></tr>';
		}
   //   }

   }
   else{
	   echo '<tr><td> Last Year</td><td>0</td></tr>';
   }


   $sql = "select DATE(created_at),SUM(total_bill) from sales";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['SUM(total_bill)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Lifetime</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Lifetime</td><td>0</td></tr>';
   }



			   ?>

    				

    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 1 ending  --->


		<div class="col-md-4">
			

		<div onclick="window.location='/zeeproject/report/perday/earning_perday.php';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Earning </h3>
    				
    				

    				<table class="table">

    				<tr>
    				<th> Today </th>
    				<td> 60,000 Rs </td>

    				</tr>

    				<tr>
    				<th> Yesterday </th>
    				<td> 45,000 Rs </td>

    				</tr>

    				<tr>
    				<th> Last Week </th>
    				<td> 250,000 Rs </td>

    				</tr>

    				<tr>
    				<th> Last Year </th>
    				<td> 235,00000 </td>

    				</tr>		

    				<tr>
    				<th> Lifetime </th>
    				<td> 800,000000 Rs </td>

    				</tr>			
	


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 2 ending  --->



		<div class="col-md-4">
			

			<div onclick="window.location='/zeeproject/report/perday/profit_perday.php';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Profit </h3>
    				
    				

    				<table class="table">

    				<tr>
    				<th> Today </th>
    				<td> 60,000 Rs </td>

    				</tr>

    				<tr>
    				<th> Yesterday </th>
    				<td> 45,000 Rs </td>

    				</tr>

    				<tr>
    				<th> Last Week </th>
    				<td> 150000 Rs </td>

    				</tr>

    				<tr>
    				<th> Last Year </th>
    				<td> 8550,000 Rs </td>

    				</tr>	


    				<tr>
    				<th> Lifetime </th>
    				<td> 9550,0000 Rs </td>

    				</tr>				


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 3 ending  --->










	</div><!--- row 1 ending --->


<br>




	<div class="row">
		

		<div class="col-md-4">
			

			<div onclick="window.location='/zeeproject/crm/customers/customers_list';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Customers</h3>
    				
    				

    				<table class="table">

				
					<?php

					
					
$sql = "select DATE(created_at),count(*) from customer where DATE(created_at)='".date('Y-m-d')."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Today</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Today</td><td>0</td></tr>';
   }
   
   $sql = "select DATE(created_at),count(*) from customer where DATE(created_at)='".date('Y-m-d',strtotime("-1 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Yesterday</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Yesterday</td><td>0</td></tr>';
   }

   $sql = "select DATE(created_at),count(*) from customer where DATE(created_at)>='".date('Y-m-d',strtotime("-7 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Week</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Last Week</td><td>0</td></tr>';
   }
  
   $sql = "select DATE(created_at),count(*) from customer where DATE(created_at)>='".date('Y-01-01',strtotime("-1 years"))."'
   and DATE(created_at)<='".date('Y-12-31',strtotime("-1 years"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Year</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Last Year</td><td>0</td></tr>';
   }


   $sql = "select DATE(created_at),count(*) from customer";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Lifetime</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Lifetime</td><td>0</td></tr>';
   }

   
			   ?>		


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 1 ending  --->


		<div class="col-md-4">
			

		<div onclick="window.location='/zeeproject/crm/sellers/sellers_list';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Sellers </h3>
    				
    				

    				<table class="table">

					<?php

					
					
$sql = "select DATE(created_at),count(*) from seller where DATE(created_at)='".date('Y-m-d')."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Today</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Today</td><td>0</td></tr>';
   }
   
   $sql = "select DATE(created_at),count(*) from seller where DATE(created_at)='".date('Y-m-d',strtotime("-1 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Yesterday</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Yesterday</td><td>0</td></tr>';
   }

   $sql = "select DATE(created_at),count(*) from seller where DATE(created_at)>='".date('Y-m-d',strtotime("-7 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Week</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Last Week</td><td>0</td></tr>';
   }
  
   $sql = "select DATE(created_at),count(*) from seller where DATE(created_at)>='".date('Y-01-01',strtotime("-1 years"))."'
   and DATE(created_at)<='".date('Y-12-31',strtotime("-1 years"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Year</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Last Year</td><td>0</td></tr>';
   }


   $sql = "select DATE(created_at),count(*) from seller	";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Lifetime</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Lifetime</td><td>0</td></tr>';
   }

   
			   ?>		
	


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 2 ending  --->



		<div class="col-md-4">
			

			<div onclick="window.location='/zeeproject/report/perday/expenses_perday.php';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Expenses </h3>
    				
    				

    				<table class="table">

    				<tr>
    				<th> Today </th>
    				<td> 4500 Rs </td>

    				</tr>

    				<tr>
    				<th> Yesterday </th>
    				<td> 6500 Rs </td>

    				</tr>

    				<tr>
    				<th> Last Week </th>
    				<td> 20000 Rs </td>

    				</tr>

    				<tr>
    				<th> Last Year </th>
    				<td> 35000 Rs </td>

    				</tr>	


    				<tr>
    				<th> Lifetime </th>
    				<td> 1,50000 Rs </td>

    				</tr>				


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 3 ending  --->










	</div><!--- row 2 ending --->





	<br>




	<div class="row">
		

		<div class="col-md-4">
			

			<div class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Pickup Orders </h3>
    				
    				

    				<table class="table">

    				<tr>
    				<th> Today </th>
    				<td> 560 </td>

    				</tr>

    				<tr>
    				<th> Yesterday </th>
    				<td> 810 </td>

    				</tr>

    				<tr>
    				<th> Last Week </th>
    				<td> 2500 </td>

    				</tr>

    				<tr>
    				<th> Last Year </th>
    				<td> 19000 </td>

    				</tr>		

    				<tr>
    				<th> Lifetime </th>
    				<td> 80,0000 </td>

    				</tr>								


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 1 ending  --->


		<div class="col-md-4">
			

		<div onclick="window.location='/zeeproject/sales?sale_type=return';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Returns </h3>
    				
    				

    				<table class="table">

    				<tr>
    				<th> Today </th>
    				<td> 18 </td>

    				</tr>

    				<tr>
    				<th> Yesterday </th>
    				<td> 0 </td>

    				</tr>

    				<tr>
    				<th> Last Week </th>
    				<td> 56 </td>

    				</tr>

    				<tr>
    				<th> Last Year </th>
    				<td> 980 </td>

    				</tr>		

    				<tr>
    				<th> Lifetime </th>
    				<td> 25000 </td>

    				</tr>			
	


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 2 ending  --->



		<div class="col-md-4">
			

			<div onclick="window.location='/zeeproject/inventory/inventory.php';" class="card smallcard text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Total Products </h3>
    				
    				

    				<table class="table">

					<?php

					
					
$sql = "select DATE(created_at),count(*) from add_product where DATE(created_at)='".date('Y-m-d')."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Today</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Today</td><td>0</td></tr>';
   }
   
   $sql = "select DATE(created_at),count(*) from add_product where DATE(created_at)='".date('Y-m-d',strtotime("-1 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Yesterday</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Yesterday</td><td>0</td></tr>';
   }

   $sql = "select DATE(created_at),count(*) from add_product where DATE(created_at)>='".date('Y-m-d',strtotime("-7 days"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Week</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Last Week</td><td>0</td></tr>';
   }
  
   $sql = "select DATE(created_at),count(*) from add_product where DATE(created_at)>='".date('Y-01-01',strtotime("-1 years"))."'
   and DATE(created_at)<='".date('Y-12-31',strtotime("-1 years"))."'";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Last Year</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Last Year</td><td>0</td></tr>';
   }


   $sql = "select DATE(created_at),count(*) from add_product";
   $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
   if($row){
 $data=mysqli_fetch_assoc($row);
		$created_at=$data['count(*)'];
	   // $task_date=$data['task_date'];
	   echo '<tr><td><b>Lifetime</b></td><td>'.$created_at.'</td></tr>';

   //   }

   }
   else{
	   echo '<tr><td>Lifetime</td><td>0</td></tr>';
   }

   
			   ?>			


    				</table>	
    				
    				
  	
  				</div>

  					

			</div>




		</div><!--- col 3 ending  --->










	</div><!--- row 3 ending --->











</div><!--- ending row margin --->




<?php include '../footer.html';?>
</body>
</html>