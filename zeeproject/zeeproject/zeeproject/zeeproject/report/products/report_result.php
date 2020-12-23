<!DOCTYPE html>
<html>
<head>

<style>
	
	.col{

		margin: 10px;
	}


</style>



	<title>Report Result</title>
</head>
<body>
<?php include '../../header.php';?>

<div style="margin-bottom: 420px" class="rowmargin">

		<h3 class="headingwhite">Report Result</h3>
		<br>
		

		



	<div class="row">

	

	<div style="padding: 0; margin-left: 15px" class="col-md-8 align-middle">

	
	<button style="width:30%; margin: 10px; margin-left: 25px " class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Filter By Date</button>



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

	<div style="padding: 0; padding-right: 25px" class="col align-middle float-right">
		

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




		<div class="row">


			
			<div class="col"> 
				

				<div class="card">
					
					<div class="card-header">
						
						<h4>Product Name</h4>

					</div>

					<div class="card-body">
						
						<table class="table">
							
							<tr>
								<th>Image</th>
								<th>Product Name</th>
								<th>Total Sales</th>
								<th>Total Profit</th>
								<th>Total Returns</th>

							</tr>

							<tr>
								
								<td><img src="http://www.azspagirls.com/files/2010/09/orange.jpg"></td>
								<td>Core Wires</td>
								<td>510</td>
								<td>35000</td>
								<td>25</td>
								
							</tr>

							<tr>
								
								<td><img src="http://www.azspagirls.com/files/2010/09/orange.jpg"></td>
								<td>Bulb</td>
								<td>320</td>
								<td>75000</td>
								<td>25</td>
								
							</tr>

							<tr>
								
								<td><img src="http://www.azspagirls.com/files/2010/09/orange.jpg"></td>
								<td>Switch</td>
								<td>650</td>
								<td>321000</td>
								<td>08</td>
								
							</tr>

							<tr>
								
								<td><img src="http://www.azspagirls.com/files/2010/09/orange.jpg"></td>
								<td>Board</td>
								<td>410</td>
								<td>25000</td>
								<td>87</td>
								
							</tr>


						</table>	


					</div>


				</div>

			</div><!--- col 1 ending --->



			





		</div>



</div>






<?php include '../../footer.html';?>

</body>
</html>