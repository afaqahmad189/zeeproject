<!DOCTYPE html>
<html>
<head>
	<title>Khata</title>
</head>


	
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




</style>


<body>

	<?php include 'header.php';?>

	

<div style="padding: 15px;">

	<h3 class="pageheading">Stock Alert</h3><br>





	</div>



	

	<div style="padding: 20px" class="card">
		
		<table class="table">
			
			<tr>

			
				<th>Product</th>
				<th>Quantity</th>
			
			</tr>

			<tr>
			<?php
            $sql = "select * from add_product where alert_stock > remiaing_qty";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if(mysqli_num_rows($row)>0){
              while ($data=mysqli_fetch_assoc($row)){
                $name=$data['name'];
                $remiaing_qty=$data['remiaing_qty'];
                echo '<tr><td>'.$name.'</td><td>'.$remiaing_qty.'</td></tr>';

              }

            }
            else{
              echo"No Alerts";
            }
            
						?>

			</tr>





		</table>

	</div>	




</div>


	<?php include 'footer.html';?>

</body>
</html>