<!DOCTYPE html>
<html>
<head>

	<style>
		
		.card
		{

			padding: 15px;


		}



	</style>

	<title>Top Filter Result</title>
</head>
<body>

	<?php include '../header.php';?>


	<div class="rowmargin">
		

		<div class="card"> <!--- if product selected --->

			<div class="card-header">
				
				<h4>Date Between: 03/05/2019 -- 15/01/2020</h4>

			</div>
			
			<table class="table">
				
				<tr>
					

				
				<th>ID</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Lifetime Sales</th>
				<th>Lifetime Profit</th>

			</tr>

			<tr>	
				
				<td>1</td>
				<td>Product1</td>
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