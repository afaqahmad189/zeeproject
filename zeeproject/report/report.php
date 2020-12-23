<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
</head>


	
<style>
	
	th {
  height: 250px!important;
  
	}

.table{

		background-color: white!important;
		padding: 20px!important;
	}

	.table > tbody > tr > td {
     vertical-align: middle;
}

.table > tbody > tr > th {
     height: 50px!important;
}

.headrow{

	margin-bottom: 50px;
}


</style>







<body>

	<?php include '../header.php';?>


	

	

<div style="padding: 15px">

	<h3 style="margin-left: 30px" class="headingwhite">Reports</h3><br>


	<div class="row">
		
		<div class="col-md-4">
			
			<div style="padding: 10px; background-color: #734bb7!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Best Selling Product</h3>
				
				</div>

				<div class="card-body">
					
					<h1> Core Wires (#11234) </h1>


				</div>

					


			</div>


		</div><!--- col 1 ending --->




		<div class="col-md-4">
			
			<div style="padding: 10px; background-color: #f94d3d!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Lowest Selling Product</h3>
				
				</div>

				<div class="card-body">
					
					<h1> Philips Bulb (#244563) </h1>


				</div>

					


			</div>


		</div><!--- col 2 ending --->




		<div class="col-md-4">
			
			<div style="padding: 10px; background-color: #199e7d!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Total Sales</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 94500 </h1>


				</div>

					


			</div>


		</div><!--- col 3 ending --->










	</div><!--- row 1 ending --->


<br>



<div class="row">
		
		<div class="col-md-4">
			
			<div style="padding: 10px; background-color: #1f2d7d!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Total Profit</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 80,690 Rs </h1>


				</div>

					


			</div>


		</div><!--- col 1 ending --->




		<div class="col-md-4">
			
			<div style="padding: 10px; background-color: #ff0566!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Last Month Profit</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 15000 Rs </h1>


				</div>

					


			</div>


		</div><!--- col 2 ending --->




		<div class="col-md-4">
			
			<div style="padding: 10px; background-color: #ff0202!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Last Month Sales</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 650 </h1>


				</div>

					


			</div>


		</div><!--- col 3 ending --->










	</div><!--- row 2 ending --->


<br>




	<div class="row">
		
		<div class="col-md-3">
			
			<div style="padding: 10px; background-color: #000000!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Total Invoices</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 1300 </h1>


				</div>

					


			</div>


		</div><!--- col 1 ending --->




		<div class="col-md-3">
			
			<div style="padding: 10px; background-color: #ff7305!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Total Refund</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 32000 Rs </h1>


				</div>

					


			</div>


		</div><!--- col 2 ending --->




		<div class="col-md-3">
			
			<div style="padding: 10px; background-color: #770bd0!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Total Return</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 720 </h1>


				</div>

					


			</div>


		</div><!--- col 3 ending --->


		<div class="col-md-3">
			
			<div style="padding: 10px; background-color: #2f7b2c!important; color: white!important" class="card">
				
				<div class="card-header">
					
					<h3>Total Products</h3>
				
				</div>

				<div class="card-body">
					
					<h1> 2500 </h1>


				</div>

					


			</div>


		</div><!--- col 4 ending --->










	</div><!--- row 3 ending --->


	<br><br><br><br>






<h3 style="margin-left: 5px" class="headingwhite">All Previous Reports List</h3><br>	
	<div class="row">



	<div style="padding: 0" class="col align-middle">

	<button class="btn btn-primary">CSV</button>
	<button class="btn btn-primary">Excel</button>
	<button  class="btn btn-primary" data-toggle="modal" data-target="#filterbydate">Filter By Date</button>
	

	<!-- Modal -->
<div class="modal fade" id="filterbydate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

	


	<div style="padding: 0" class="col align-middle float-right">
		

		<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Here..." aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-primary" type="button">Search</button>
  </div>
</div>


		<!---

		<input style="width: 100%; height: 50px; padding: 10px;" type="text" class="form-contol searchform" placeholder="Search Product" name="">


		--->

		


	</div>



	</div>



	

	<table style="padding: 50px; margin-top: 5px" class="table text-center">
		
		<tr class="headrow" style="margin-bottom: 5px">

			<th>ID</th>
			<th>Item Name</th>
			<th>Price</th>
			<th>Total Sales</th>
			<th>Total Refunds</th>
			<th>Total Profit</th>
			<th>Action</th>
			


		</tr>



		<tr>
			

			<td>1</td>
			<td>Samsung Wire</td>
			<td>35000 Rs</td>
			<td>8</td>
			<td>2</td>
			<td>2,8820 Rs</td>

			<td>
						
						<a href="/zeeproject/Inventory/view_product.php?product_id=1"><button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button></a>

					<!---	<a href="/zeeproject/Inventory/edit_product.php?product_id=1"><button class="btn btn-warning formbtn2"><i class="far fa-edit"></i></button></a>  --->
						 
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>


		<tr>
			

			<td>2</td>
			<td>Sony Wire</td>
			<td>2500 Rs</td>
			<td>16</td>
			<td>0</td>
			<td>26000 Rs</td>

			<td>
						
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						
						
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>


		<tr>
			

			<td>3</td>
			<td>Switch</td>
			<td>1100 Rs</td>
			<td>80</td>
			<td>31</td>
			<td>18000 Rs</td>

			<td>
						
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						
						
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>


		<tr>
			

			<td>4</td>
			<td>ABCD</td>
			<td>1400 Rs</td>
			<td>24</td>
			<td>2</td>
			<td>28000 Rs</td>

			<td>
						
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						
						
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>


		<tr>
			

			<td>5</td>
			<td>Paidal</td>
			<td>8500 Rs</td>
			<td>47</td>
			<td>9</td>
			<td>3,00000 Rs</td>

			<td>
						
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						
						
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>


		<tr>
			

			<td>6</td>
			<td>WERTY</td>
			<td>7500 Rs</td>
			<td>22</td>
			<td>4</td>
			<td>65000 Rs</td>

			<td>
						
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						
						
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>


		<tr>
			

			<td>7</td>
			<td>Switch</td>
			<td>8500 Rs</td>
			<td>47</td>
			<td>9</td>
			<td>3,00000 Rs</td>

			<td>
						
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						
						
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>


		<tr>
			

			<td>8</td>
			<td>Bike</td>
			<td>9500 Rs</td>
			<td>27</td>
			<td>7</td>
			<td>95000 Rs</td>

			<td>
						
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						
						
						<button class="btn btn-danger formbtn2"><i class="fas fa-trash-alt"></i></button>
					

			</td>

		</tr>









	</table>




</div>


	<?php include '../footer.html';?>

</body>
</html>