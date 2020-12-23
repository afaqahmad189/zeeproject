<!DOCTYPE html>
<html>
<head>

<style>
	
	


	.col-xs-5ths,
.col-sm-5ths,
.col-md-5ths,
.col-lg-5ths {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.col-xs-5ths {
    width: 20%;
    float: left;
}

@media (min-width: 768px) {
    .col-sm-5ths {
        width: 20%;
        float: left;
    }
}

@media (min-width: 992px) {
    .col-md-5ths {
        width: 20%;
        float: left;
    }
}

@media (min-width: 1200px) {
    .col-lg-5ths {
        width: 20%;
        float: left;
    }
}

.card{

	margin: 10px;
}


</style>



	<title>Products Report Result</title>
</head>
<body>
<?php include '../../header.php';?>

<div style="margin-bottom: 420px" class="rowmargin">

		<h3 class="headingwhite">Report Result </h3>
		<br>
		

		<button style="width:30%; margin: 10px; margin-left: 25px " class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Filter By Date</button>


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
		

		<div class="row">
			
			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 1 ending --->



			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 2 ending --->




			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 3 ending --->




			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 4 ending --->




			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 5 ending --->



			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 6 ending --->



			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 7 ending --->



			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 8 ending --->


			<div class="col-md-5ths col-xs-6"> <!--- if products are more than 1 so, these cols will increase in grid --->
				

				<div class="card">
					
					<div style="border-style: none" class="card-header">
						<h4>Product Name</h4>
						<img  class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
						
						

					</div>

					<div style="margin-top: -25px" class="card-body">
						
						<table class="table">
							
							<tr>

								<td>Total Sales</td>
								<td>25</td>

							</tr>
							
							<tr>
								<td>Total Profit</td>
								<td>3500</td>

							</tr>
							
							<tr>		
								<td>Total Returns</td>
								<td>50</td>

							</tr>	

							

							


						</table>	


					</div>


				</div>

			</div><!--- col 9 ending --->








		</div>



</div>






<?php include '../../footer.html';?>

</body>
</html>