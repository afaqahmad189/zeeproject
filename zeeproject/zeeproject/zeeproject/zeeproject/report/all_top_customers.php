<!DOCTYPE html>
<html>
<head>

	<style>
		
		.card
		{

			padding: 15px;


		}



	</style>

	<title>All Top Customers</title>
</head>
<body>

	<?php include '../header.php';?>


	<div class="rowmargin">
		

		<div class="card"> <!--- if product selected --->

			<div class="card-header">
					
				<h4>All Top Customers </h4>

			</div>
			
			<table class="table">
				
				<tr >	
				
				<th >ID</th>
				<th>Name</th>
				<th>Lifetime Orders</th>
				<th>Lifetime Returns</th>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>1</td>
				<td>Customer1</td>
				<td>500</td>
				<td>98000</td>
			

			</tr>

			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>2</td>
				<td>Customer2</td>
				<td>500</td>
				<td>98000</td>
			

			</tr>

			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>3</td>
				<td>Customer3</td>
				<td>500</td>
				<td>98000</td>
			

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>4</td>
				<td>Customer3</td>
				<td>500</td>
				<td>98000</td>
			

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>5</td>
				<td>Customer3</td>
				<td>500</td>
				<td>98000</td>
			

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>6</td>
				<td>Customer3</td>
				<td>500</td>
				<td>98000</td>
			

			</tr>


				



			</table>


		</div>




	</div>



















	<?php include '../footer.html';?>

</body>
</html>