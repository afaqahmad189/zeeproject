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

	<h3 class="pageheading">All Previous Sales</h3><br>

	<div class="row">

	

	<div style="padding: 0; margin-left: 15px" class="col-md-8 align-middle">

	
	<button style="width:30%; margin-left: -5px" class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Filter By Date</button>



	<!-- Modal -->
<div class="modal fade" id="printingkhata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Date To Filter Khata</h5>
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


	<div  class="col align-middle float-middle">

		<select class="form-control">
			
			<option>Choose Category</option>
			<option>Returns</option>
			<option>Special Customer (Credit)</option>
			<option>Pick up</option>
			<option>Ordinary (Cash)</option>

		</select>

	</div>


	<div style="padding: 0" class="col align-middle float-right">
		

		<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Here By Invoice#, Customer Name, Product Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
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
					<th>Customer Name</th>
					<th>Price</th>
					<th>Paid Amount</th>
					<th>Remaining Amount</th>
					<th>Date & Time</th>
					<th>Invoice</th>

				</tr>

				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


			<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>



				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


			<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>

				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>


				<tr>

				<td>123456</td>	
				<td>Bulb</td>
				<td>Basit</td>
				<td>500 Rs</td>
				<td>400 Rs</td>
				<td>100 Rs</td>
				<td>03/05/2020 (11:35 am)</td>

				<td><a class="btn-primary btn" href="#">View Invoice </a> </td>

				</tr>



			

		</table>

	</div>	




</div>


	<?php include '../footer.html';?>




</body>
</html>