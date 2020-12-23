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


	<title>Customer Orders</title>
</head>
<body>


<?php include '../header.php';?>

	

<div style="padding: 15px">

	<h3 class="pageheading">Orders By Customer</h3><br>

	<div class="row">

	

	<div style="padding: 0; margin-left: 15px" class="col-md-8 align-middle">

	
	<button style="width:30%; margin-left: -5px" class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Print</button>



	<!-- Modal -->
<div class="modal fade" id="printingkhata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Date To Print Khata</h5>
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
        <button type="button" class="btn btn-primary">Print It</button>
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



	

	<div style="padding: 20px" class="card">
		
		<table class="table">
			
			<tr>
					<th>Invoice Number</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Paid Amount</th>
					<th>Date</th>
					<th>Invoice</th>

				</tr>

				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
					
					<td>Bulb</td>

					<td>500</td>

					<td>500</td>

					<td>03/05/2020</td>

					<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


			

		</table>

	</div>	




</div>


	<?php include '../footer.html';?>




</body>
</html>