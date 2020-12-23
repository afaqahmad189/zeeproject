<!DOCTYPE html>
<html>
<head>





<style>
	
	.table{

		background-color: white;
	}

	th{
		width: 150px;
		height: 60px;
	}

	td{
		height: 40px;
	}

	.table > tbody > tr > td {
     vertical-align: middle;
}


	label{

		color: black!important;
	}


</style>


	<title>Insert Khata</title>
</head>
<body>



<?php include '../../header.php';?>



<div class="rowmargin">
	


	<div class="row"> 

		<div style="padding: 20px" class="col-md-8 card">


		<button style="width:10%; margin-left: -5px" class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Print</button><br>



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
        <button type="button" class="btn btn-primary">Filter It</button>
      </div>
    </div>
  </div>
</div>



	<!--- model ending --->	
		
		<table class="table table-bordered">
			
			<tr>

				<th>Type</th>
				<th>Date</th>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Rate</th>
				<th>Cash Type</th>
				<th>Cash Total</th>
				<th>Picture</th>
				<th>Total</th>

			</tr>

			<tr>
				<td>Add</td>
				<td>04/05/2020</td>
				<td>Wires</td>
				<td>5</td>
				<td>650</td>
				<td></td>
				<td></td>
				<td></td>
				<td>850</td>

			</tr>


			<tr>
				<td>Payment</td>
				<td>02/01/2019</td>
				<td>Wires</td>
				<td>5</td>
				<td>950</td>
				<td>Net</td>
				<td>1200</td>
				<td><button class="btn btn-primary"><i class="fas fa-eye"></i></button></td>
				<td>850</td>

			</tr>

			<tr>
				<td>Refund</td>
				<td>04/05/2020</td>
				<td>Wires</td>
				<td>5</td>
				<td>650</td>
				<td></td>
				<td></td>
				<td></td>
				<td>850</td>

			</tr>

			<tr>
				<td>Payment</td>
				<td>09/12/2019</td>
				<td>Product2</td>
				<td>7</td>
				<td>950</td>
				<td>Net</td>
				<td>1200</td>
				<td><button class="btn btn-primary"><i class="fas fa-eye"></i></button></td>
				<td>850</td>

			</tr>


<tr>
				<td>Add</td>
				<td>04/05/2020</td>
				<td>Wires</td>
				<td>5</td>
				<td>650</td>
				<td></td>
				<td></td>
				<td></td>
				<td>850</td>

			</tr>



		</table>

	</div>	


		<div style="padding: 20px; " class="col-md-4 card ">
			
			
			<div class="row">

				<div class="col-md-3">
					
					<button style="width: 100%" class="btn btn-primary" id="btn1">Add</button>

				</div>

				<div class="col-md-3">

					<button style="width: 100%" class="btn btn-warning" id="btn2">Payment</button>
					
				</div>



				<div class="col-md-3">

					<button style="width: 100%" class="btn btn-info" id="btn3">Refund</button>
					
				</div>


				<div class="col-md-3">

					<button style="width: 100%; background-color: #ac6ae0; border-color: #ac6ae0" class="btn btn-info" id="btn4">Notification</button>
					
				</div>


			</div>

			<br>



			<div style="padding: 10px;" id="addform">
				
				<h3>Add Form</h3><br>

				<form>
					
					<label style="color: black!important" for="adddate">Select Date</label>
					<input id="adddate" type="date" class="form-control" placeholder="Enter Date" name=""><br>


					<label style="color: black!important" for="addname">Product Name</label>
					<input id="addname" type="text" class="form-control" placeholder="Enter Product Name" name=""><br>


					<label style="color: black!important" for="addqty">Quantity</label>
					<input id="addqty" type="number" class="form-control" placeholder="Enter Product Quantity" name=""><br>

					<label style="color: black!important" for="addrate">Rate</label>
					<input id="addrate" type="number" class="form-control" placeholder="Enter Product Rate" name=""><br>


					<br>
			<center>


				<button type="submit" class="formbtn"> Insert </button>

			</center>	



				</form>


			</div>



			<div style="padding: 10px; display: none" id="paymentform">
				

				<h3>Payment Form</h3><br>


				<form>
					
					<label style="color: black!important" for="paymentdate">Select Date</label>
					<input id="paymentdate" type="date" class="form-control" placeholder="Enter Date" name=""><br>


					<label style="color: black!important" for="paymentcashtype">Cash Type</label>
					<select class="form-control" id="paymentcashtype">

						<option>Choose One...</option>
						<option>Net Payment</option>
						<option>Udhaar Payment</option>
						
					</select><br>



					<label style="color: black!important" for="paymentcashtotal">Cash Total</label>
					<input id="paymentcashtotal" type="number" class="form-control" placeholder="Enter Total Cash" name=""><br>

					
					<label style="color: black!important" for="ipic">Invoice Picture</label>
					<input style="height: 45px" type="file" class="form-control" name="" id="ipic"><br>




					<br>
			<center>


				<button type="submit" class="btn formbtn"> Insert </button>

			</center>	



				</form>



			</div>


			<div style="padding: 10px; display: none" id="refundform">
				
				<h3>Refund Form</h3><br>


				<form>
					
					<label style="color: black!important" for="refunddate">Select Date</label>
					<input id="refunddate" type="date" class="form-control" placeholder="Enter Date" name=""><br>


					<label style="color: black!important" for="refundname">Product Name</label>
					<input id="addname" type="text" class="form-control" placeholder="Enter Product Name" name=""><br>


					<label style="color: black!important" for="refundqty">Quantity</label>
					<input id="refundqty" type="number" class="form-control" placeholder="Enter Product Quantity" name=""><br>

					<label style="color: black!important" for="addrate">Rate</label>
					<input id="refundrate" type="number" class="form-control" placeholder="Enter Product Rate" name=""><br>


					<br>
			<center>


				<button type="submit" class="formbtn"> Insert </button>

			</center>	



				</form>




			</div>



			<!--- notification form box --->


			<div style="padding: 10px; display: none" id="notificationform">
				
				<h3>Add Notification</h3><br>

				<form>
					
					<label style="color: black!important" for="adddate">Select Date</label>
					<input id="adddate" type="date" class="form-control" placeholder="Enter Date" name=""><br>

					


					

					<label style="color: black!important" for="addrate">Rate</label>
					<input id="addrate" type="number" class="form-control" placeholder="Enter Product Rate" name=""><br>


					<br>
			<center>


				<button type="submit" class="formbtn"> Insert </button>

			</center>	



				</form>


			</div>



			

			

			


		</div>








	</div><br><!--- row 1 ending --->



	










</div><!--- ending row margin --->

<script>


$(document).ready(function(){
  $("#btn1").click(function(){
    $("#addform").slideToggle(500)
    $("#paymentform").slideUp(500)
    $("#refundform").slideUp(500)
    $("#notificationform").slideUp(500)
	

    
  });

  $("#btn2").click(function(){
  
 
    $("#paymentform").slideToggle(500)
    $("#addform").slideUp(500)
    $("#refundform").slideUp(500)
    $("#notificationform").slideUp(500)
	
     
   
  });
  
   $("#btn3").click(function(){
  
 
    $("#refundform").slideToggle(500)
    $("#addform").slideUp(500)
    $("#paymentform").slideUp(500)
    $("#notificationform").slideUp(500)
	
   
  });
  
   $("#btn4").click(function(){
  
 	$("#notificationform").slideToggle(500)
    $("#refundform").slideUp(500)
    $("#addform").slideUp(500)
    $("#paymentform").slideUp(500)
	
   
  });
 
  
});

</script>

<br><br><br>

<?php include '../../footer.html';?>




	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>