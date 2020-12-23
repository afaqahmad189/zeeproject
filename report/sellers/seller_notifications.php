<!DOCTYPE html>
<html>
<head>
	<title>Payables</title>
</head>
<body>

	<?php include '../../header.php';?>

	<div class="rowmargin">
		


		<div class="card">
			

			<div class="card-header">

				<h4>All Payables</h4>

			</div>

			<div class="card-body"> 


				<table class="table text-center">
					

					<tr>
						
						<th>ID</th>
						<th>Seller Name</th>
						<th>Remaining Amount</th>
						<th>Due Date</th>
						<th>Remaining Days</th>
						<th>Seller Contact</th>
						<th>Pay Now</th>



					</tr>


					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>

					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>

					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>

					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>

					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>

					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>

					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>

					<tr>
							
						<td>1</td>
						<td>Seller 1</td>
						<td>15000 Rs</td>
						<td>15/06/2020</td>
						<td>15 Days</td>
						<td>03403877126</td>
						<td><button data-toggle="modal" data-target="#payingamount" class="btn btn-primary">Pay Now</button></td>


					</tr>




				</table>






			</div>





		</div>





	</div>



<!-- Modal -->
<div class="modal fade" id="payingamount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      	<form>
      		
      		<center>
      		<h4>Amount To Pay: 15000 Rs</h4>
      		</center><br>

      		<label style="color: black!important"  for="paymentamount">Add Payment Amount</label>
			<input id="addqty" type="number" class="form-control" placeholder="Enter The Payment Value" name=""><br>


			<!--- due date field only show if payment value is less then Amount To Pay & it will also set default date from same table row Date col, and also if user update it, it will update the due date in notifications --->
			<label style="color: black!important"  for="paymentamount">Due Date</label>
			<input id="addqty" type="number" class="form-control" placeholder="Enter The Payment Value" name=""><br>


			<label style="color: black!important" for="ipic">Invoice Picture</label>
					<input style="height: 45px" type="file" class="form-control" name="" id="ipic"><br>

			<br>

			





      	</form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Pay Now</button>
      </div>

</form>


    </div>
  </div>
</div>



	<!--- model ending --->







<?php include '../../footer.html';?>
</body>
</html>