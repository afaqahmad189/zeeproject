<!DOCTYPE html>
<html>
<head>

	<style>
		
		.card
		{

			padding: 15px;


		}



	</style>

	<title>All Top Sellers</title>
</head>
<body>

	<?php include '../header.php';?>


	<div class="rowmargin">
		

		<div class="card"> <!--- if product selected --->

			<div class="card-header">
					
				<h4>All Top Sellers </h4>

			</div>
			
		<table class="table">
				
				<tr >	
				
				<th>ID</th>
				<th>Name</th>
				<th>Lifetime Sell</th>
				<th>Lifetime Returns</th>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>1</td>
				<td>Seller1</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>

			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>2</td>
				<td>Seller2</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>3</td>
				<td>Seller3</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>4</td>
				<td>Seller4</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>5</td>
				<td>Seller5</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>6</td>
				<td>Seller6</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>7</td>
				<td>Seller7</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>


				



			</table>


		</div>




	</div>



















	<?php include '../footer.html';?>

</body>
</html>