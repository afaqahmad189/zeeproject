<!DOCTYPE html>
<html>
<head>

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


	<title>Pickup Orders</title>
</head>
<body>

	<?php
    include '../header.php';
    ?>


<div class="rowmargin">
		




<div class="row">

	<div style="padding: 0" class="col align-middle">

	<button class="btn btn-primary">CSV</button>
	<button class="btn btn-primary">Excel</button>
	<button class="btn btn-primary">Print</button>


	</div>

	<div style="padding: 0" class="col align-middle float-right">
		

		<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Here By Name Or Product" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-primary" type="button">Search</button>
  </div>
</div>


		<!---

		<input style="width: 100%; height: 50px; padding: 10px;" type="text" class="form-contol searchform" placeholder="Search Product" name="">


		--->

		


	</div>



	</div>



	

	<table style="padding: 50px; margin-top: 5px" class="table text-center">
		
		<tr class="headrow" style="margin-bottom: 5px">

			<th>ID</th>
			<th>Customer Name</th>
			<th>Items</th>
			<th>Date/Time</th>
			<th>Action</th>
			


		</tr>
        <?php
        $get_pickup=mysqli_query($conn,"select * from pickup group by pickup_time");
        if(mysqli_num_rows($get_pickup)){
            $count=1;
            while($row=mysqli_fetch_assoc($get_pickup)){
                $time=$row['pickup_time'];
                echo '<tr><td>'.$count.'</td><td>'.$row['cus_name'].'</td><td>';
                $query2=mysqli_query($conn,"select product_name from pickup where pickup_time='".$time."'");
                if(mysqli_num_rows($query2)){
                    while($row2=mysqli_fetch_assoc($query2)){
                        echo $row2['product_name'].',';
                    }
                }
                else{
                    echo"no Products";
                }
                echo'</td><td>'.$row['pickup_date'].'('.$row['pickup_time'].
                    ')</td><td>
                                   <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                            </td></tr>';

                $count++;
            }
        }
        ?>

	</table>














</div>

<br><br>
<?php include '../footer.html';?>
</body>
</html>

