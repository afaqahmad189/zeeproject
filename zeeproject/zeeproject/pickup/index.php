<!DOCTYPE html>
<html>
<head>

<style>
	
	th {
  height: 80px!important;
  
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



</style>


	<title>Pickup Orders</title>
</head>
<body>

	<?php include '../header.php';?>


<div class="rowmargin">
		




<div class="row">

	<div style="padding: 0" class="col align-middle">

	<button class="btn btn-primary">CSV</button>
	<button class="btn btn-primary">Excel</button>
	<button class="btn btn-primary">Print</button>


	</div>

	<div style="padding: 0" class="col align-middle float-right">
		

		<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Here By Name Or Product" aria-label="Recipient's username" aria-describedby="basic-addon2">
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
			<th>Customer Name</th>
			<th>Items</th>
			<th>Date/Time</th>
			<th>Action</th>
			


		</tr>



		<tr>
			

			<td>1</td>
			<td>Customer1</td>
			<td>Item</td>
			<td>03/11/2020 (11:35 am)</td>
			

			

			<td>
						
						<a href="#">
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button></a>

						
					

			</td>

			

		</tr>


		<tr>
			

			<td>2</td>
			<td>Customer2</td>
			<td>Item 2</td>
			<td>03/11/2020 (11:35 am)</td>
			

			

			<td>
						
						<a href="#">
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button></a>

						
					

			</td>

			

		</tr>



		<tr>
			

			<td>3</td>
			<td>Customer3</td>
			<td>Item 3</td>
			<td>03/11/2020 (11:35 am)</td>
			

			

			<td>
						
						<a href="#">
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button></a>

						
					

			</td>

			

		</tr>



		<tr>
			

			<td>4</td>
			<td>Customer 4</td>
			<td>Item 4</td>
			<td>03/11/2020 (11:35 am)</td>
			

			

			<td>
						
						<a href="#">
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button></a>

						
					

			</td>

			

		</tr>



		<tr>
			

			<td>5</td>
			<td>Customer 5</td>
			<td>Item 5</td>
			<td>03/11/2020 (11:35 am)</td>
			

			

			<td>
						
						<a href="#">
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button> </a>

						
					

			</td>

			

		</tr>


	</table>














</div>

<br><br>
<?php include '../footer.html';?>
</body>
</html>

