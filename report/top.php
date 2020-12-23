<!DOCTYPE html>
<html>
<head>

<style>
	
	.card{

		padding: 15px;
	}



</style>


	<title>Top</title>
</head>
<body>

<?php include '../header.php';?>



	<div class="rowmargin">
		
		<div class="row">




		<div class="col-md-4">	


		<div class="card">
			
			<div class="card-header">
				
				<h3>Top Products </h3>

			</div>


			<table class="table">
				

			<!-- <tr>	
				
				<th>ID</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Lifetime Sales</th>
				<th>Lifetime Profit</th>

			</tr> -->

				<th>Product Name</th>
				<th>Product Price</th>
				<th>Lifetime Sale</th>
				<th>Lifetime Profit</th>
				
				

					<?php
				$sql = "SELECT COUNT(product_id), product_name, price ,SUM(total_price)
				FROM sale_details
				GROUP BY product_name order by COUNT(product_id) desc limit 10";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($row){
          while($data=mysqli_fetch_assoc($row)){
                $created_at=$data['count(product_id)'];
				$product_name=$data['product_name'];
				$price=$data['price'];
				$sale=$data['SUM(total_price)'];
                echo '<tr><td>'.$product_name.'</td><td>'.$price.'</td><td>'.$sale.'</td><td>0</td><td> <i class="fas fa-info-circle"></i></td></tr>';

            //   }

			}
		}
            else{
				echo '<tr><td>Today Sale</td><td>0</td></tr>';
			}
            
						?>




			</table>



			<a href="/zeeproject/report/all_top_products.php" class="btn btn-primary">View All</a>


		</div>


	</div><!--- col 1 ending --->


	<div class="col-md-4">	


		<div class="card">
			
			<div class="card-header">
				
				<h3>Top Customers </h3>

			</div>

			<table class="table">
				

			<tr>	
				
				<th >ID</th>
				<th>Name</th>
				<th>Lifetime Orders</th>
				<th>Lifetime Returns</th>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>1</td>
				<td>Product1</td>
				<td>500</td>
				<td>98000</td>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>2</td>
				<td>Product2</td>
				<td>980</td>
				<td>66000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>3</td>
				<td>Product3</td>
				<td>1980</td>
				<td>85000</td>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>4</td>
				<td>Product4</td>
				<td>2780</td>
				<td>65000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>5</td>
				<td>Product5</td>
				<td>3680</td>
				<td>165000</td>
			

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>6</td>
				<td>Product6</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>7</td>
				<td>Product7</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>8</td>
				<td>Product8</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>9</td>
				<td>Product9</td>
				<td>3680s</td>
				<td>165000</td>
				

			</tr>



			<tr onclick="window.location='/zeeproject/crm/customers/customer_view.php';">	
				
				<td>10</td>
				<td>Product10</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>




			</table>

			<a href="/zeeproject/report/all_top_customers.php" class="btn btn-primary">View All</a>

		</div>

	</div>		



		<div class="col-md-4">	


		<div class="card">
			
			<div class="card-header">
				
				<h3>Top Sellers </h3>

			</div>

			<table class="table">
				

			<tr>	
				
				<th>ID</th>
				<th>Name</th>
				<th>Lifetime Sell</th>
				<th>Lifetime Returns</th>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>1</td>
				<td>Product1</td>
				<td>500</td>
				<td>98000</td>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>2</td>
				<td>Product2</td>
				<td>980 Rs</td>
				<td>66000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>3</td>
				<td>Product3</td>
				<td>1980</td>
				<td>85000</td>
				

			</tr>

			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>4</td>
				<td>Product4</td>
				<td>2780</td>
				<td>65000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>5</td>
				<td>Product5</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>6</td>
				<td>Product6</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>7</td>
				<td>Product7</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>8</td>
				<td>Product8</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>


			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>9</td>
				<td>Product9</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>



			<tr onclick="window.location='/zeeproject/crm/sellers/seller_view.php';">	
				
				<td>10</td>
				<td>Product10</td>
				<td>3680</td>
				<td>165000</td>
				

			</tr>




			</table>
	


			<a href="/zeeproject/report/all_top_sellers.php" class="btn btn-primary">View All</a>



		</div>


	</div><!--- col 3 ending --->

</div>


	</div><!--- row margin ending --->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="/zeeproject/report/top_result.php">  <button type="button" class="btn btn-primary">Check Result</button>
      </div>
    </div>
  </div>
</div>







<br>
<?php include '../footer.html';?>

</body>
</html>