<!DOCTYPE html>
<html>
<head>

	<style>
		
		.card
		{

			padding: 15px;


		}



	</style>

	<title>All Top Products</title>
</head>
<body>

	<?php include '../header.php';?>


	<div class="rowmargin">
		

		<div class="card"> <!--- if product selected --->

			<div class="card-header">

				<div class="row">
					
					<div class="col align-middle"><h4>All Top Products </h4></div>

					<div class="col align-middle">
						
						Filter By Category
						<select class="form-control">
							
							<option>Select a category...</option>
							<option>Cat 1</option>
							<option>Cat 2</option>
							<option>Cat 3</option>
							<option>Cat 4</option>


						</select>

					</div>


				</div>
					
				

			</div>
			
			<table class="table">
				
				<tr>
					

				
				<th>ID</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Lifetime Sales</th>
				<th>Lifetime Profit</th>

			</tr>

			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>1</td>
				<td>Product1</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>

			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>2</td>
				<td>Product2</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>

			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>3</td>
				<td>Product3</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>


			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>4</td>
				<td>Product4</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>


			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>5</td>
				<td>Product5</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>


			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>6</td>
				<td>Product6</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>


			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>7</td>
				<td>Product7</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>


			<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>8</td>
				<td>Product8</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>


				<tr onclick="window.location='/zeeproject/inventory/view_product.php';">	
				
				<td>9</td>
				<td>Product9</td>
				<td>500 Rs</td>
				<td>98000</td>
				<td>150000 Rs</td>

			</tr>


				



			</table>


		</div><!--- product card ending --->

<!--- 
		<div style="margin: 8px" class="card"> if customer selected -

			<div class="card-header">
				
				<h4>Date Between: 03/05/2019 -- 15/01/2020</h4>

			</div>
			
			<table class="table">
				
				<tr >	
				
				<th >ID</th>
				<th>Name</th>
				<th>Lifetime Orders</th>
				<th>Lifetime Returns</th>
				

			</tr>

			<tr data-toggle="modal" data-target="#exampleModal">	
				
				<td>1</td>
				<td>Product1</td>
				<td>500</td>
				<td>98000</td>
			

			</tr>


				



			</table>
-->

	<!---	</div> customer card ending --->


<!---
		<div style="margin: 8px" class="card">  if seller selected 

			<div class="card-header">
				
				<h4>Date Between: 03/05/2019 -- 15/01/2020</h4>

			</div>
			
			<table class="table">
				
				<tr >	
				
				<th>ID</th>
				<th>Name</th>
				<th>Lifetime Sell</th>
				<th>Lifetime Returns</th>
				

			</tr>

			<tr data-toggle="modal" data-target="#exampleModal">	
				
				<td>1</td>
				<td>Product1</td>
				<td>500</td>
				<td>98000</td>
				
			</tr>



				



			</table>
--->

	<!--- 	</div>seller card ending --->




	</div>



















	<?php include '../footer.html';?>

</body>
</html>