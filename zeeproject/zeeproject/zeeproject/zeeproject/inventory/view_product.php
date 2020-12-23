<!DOCTYPE html>
<html>
<head>

<style>
	
	.table{

		background-color: white;
	}

	th{
		width: 150px;
	}


</style>


	<title>Seller Details</title>
</head>
<body>



<?php
include '../header.php';
$p_id = $_REQUEST['product_id'];
$sql = "select * from category c,seller s,add_product p where p.id=$p_id ";
$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_assoc($data);
    $p_id = $row['id'];
    $p_name = $row['name'];
    $barcode = $row['barcode'];
    $affect = $row['affect'];
    $c_name = $row['cat_name'];
    $unit = $row['unit'];
    $p_qty = $row['qty'];
    $alert_stock = $row['alert_stock'];
    $product_cost = $row['product_cost'];
    $p_price = $row['sale_price'];
    $description = $row['description'];
    $product_place = $row['product_place'];
    $pur_place = $row['pur_place'];
    $main_pic = $row['main_pic'];
    $third_pic = $row['3d_image'];

} else {
    echo "no data";
}
?>



<div class="rowmargin">
	


	<div class="row">

		<div class="col-md-4 col-sm-12">

		<div style="padding: 10px;   height: 850px; " class="card fixedcard">
			
			
			<center>

				<h1 style="margin-bottom: 20px"><?php echo $p_name;?></h1>
                <?php
                $image_3d="select * from product_3d_img where product_id='$p_id' order by 3d_img limit 1";
                $reult_3d_img=mysqli_query($conn,$image_3d);
                if(mysqli_num_rows($reult_3d_img)>0){
                    $row_3d=mysqli_fetch_assoc($reult_3d_img);
                    $data_3d=$row_3d['3d_img'];
                    echo'<img align="center" width="180px" height="170px" src="'.$data_3d.'"><br></center><br>';
                }
                else{
                    echo'<img align="center" width="180px" src="products/No-image-available.png"><br></center><br>';
                }
                ?>


			


			<table class="table text-center">
				
				

				<tr>

					<th>Quantity</th>
					<th>Remaining Quantity</th>
					

				</tr>

				<tr>	
					
					<td>

                        <?php echo $p_qty;?>
					
					</td>

					<td>

						remaining qty
					
					</td>

					

				</tr>


			</table>
<br>

			<table class="table text-center">
				
				

				<tr>

					<th>Cost Price</th>
					<th>Sale Price</th>
					

				</tr>

				<tr>	
					
					<td>

                        <?php echo $product_cost.'Rs';?>
					
					</td>

					<td>

                        <?php echo $p_price.'Rs';?>
					
					</td>

					

				</tr>


			</table>

			<br>

			<table class="table text-center">
				
				

				<tr>

					<th>Category</th>
					<th>Alert Quantity</th>
					

				</tr>

				<tr>	
					
					<td>
                        <?php echo $c_name;?>
					
					</td>

					<td>
                        50
					
					</td>

<!--					<td>-->
<!--						-->
<!--						Home Wires-->
<!--					-->
<!--					</td>-->

					

				</tr>


			</table>

			<br>

			<table class="table text-center">
				
				

				<tr>

					<th>Unit</th>
					<th><?php echo $unit;?></th>
					

				</tr>

				


			</table><br>


			<table class="table text-center">
				
				

				<tr>

					<th>Best Sold Month</th>
					<th>Worst Sold Month</th>
					

				</tr>

				<tr>

					<td>January 2020</th>
					<td>August 2020</th>
					

				</tr>


				


			</table><br>




			<a href="edit_product.php?product_id=<?php echo $p_id;?>" style="font-size: 24px; margin-bottom: 8px;color: white" class="btn btn-primary viewpagebtn">Edit</a>
			

			

		</div>
		</div> <!---col 1 ending --->


		<div class="col-md-8 col-sm-12">
		<div style="padding: 20px; margin-left: 15px" class="card ">


			<div class="row">

				<div class="col-md-4">
					
					<center>
                        <?php
                        if($main_pic=='products/'){
                            echo'<img align="center" width="180px" src="products/No-image-available.png"><br></center><br>';
                        }
                        else{
                            echo'<img align="center" width="180px" src="'.$main_pic.'"><br></center><br>';
                        }
                        ?>
                    </center>

				</div>


                        <?php

                        $image_other = "select * from product_images where product_id='$p_id' order by pro_other_img limit 2";
                        $result_other_img = mysqli_query($conn, $image_other);
                        if (mysqli_num_rows($result_other_img) > 0) {
                            while($row_3d = mysqli_fetch_assoc($result_other_img)){
                                $data_other1 = $row_3d['pro_other_img'];
                                echo '<div class="col-md-4">
					
					<center><img align="center" width="180px" height="170px" src="' . $data_other1 . '"></center></div>';
                            }
                        }
                        else {
                            echo '<div class="col-md-4">
					
					<center><img align="center" width="180px" src="products/No-image-available.png"></center></div>';
                        }

                        ?>





			</div>

			<br><br>

			<center><h4>Purchase Info</h4></center><br>
			<div class="row">
				
				
					
					<table >
						
						<table class="table text-center">
				
				

				<tr>

					<th>Product Place</th>
					<th>Purchase From</th>
					

				</tr>

				<tr>	
					
					<td>

                        <?php echo $product_place;?>
					
					</td>

					<td>

                        <?php echo $pur_place;?>
					
					</td>

					

				</tr>


			</table>

					</table>

				



			</div>


			
			<table class="table text-center">

				<center><h4 >Active Sellers</h4><br></center>
				

				<tr> <!--- link row to the seller/company view page --->
					<th>Company Name</th>
<!--					<th>Dealer Name</th>-->
					<th>Phone No</th>
					<th>Account Number</th>
				</tr>
                <?php
                $active_pro="select *,s.name as seller_name from seller s,seller_active_pro sap where sap.product_id='$p_id' 
                                and sap.seller_id=s.id and s.type='2'";
                $result_active_pro=mysqli_query($conn,$active_pro);
                if(mysqli_num_rows($result_active_pro)>0){
                    while ($row_active=mysqli_fetch_assoc($result_active_pro)){
                        $seller_name=$row_active['seller_name'];
                        $seller_phone=$row_active['seller_phone'];
                        $seller_account=$row_active['seller_account'];
                        echo'<tr>
					<td>'.$seller_name.'</td>
					<td>'.$seller_phone.'</td>
					<td>'.$seller_account.'</td>
				</tr>';
                    }
                }
                else{
                    echo'<tr>
					<td colspan="4">No Active Sellers</td>
					
				</tr>';
                }
                ?>

			</table>

			<br>


			<table class="table text-center">
				
				
				<center><h4>Product Description</h4><br></center>
				


				<tr>

					<th>Description</th>
				</tr>
				
				<tr>		
					<td>
					
						<p><?php echo $description;?></p>
						


					</td>

				</tr>	
	


			</table>

			<br>


			<div class="row">
				
				<div class="col-md-6">

					<center><h4>Profit Graph</h4></center>

					<div  class="row my-3">
       
    </div>

     <center> <button style="width:60%; margin-left: -5px" class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Choose Date</button><br> </center>



	<!-- Modal -->
<div class="modal fade" id="printingkhata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose Date</h5>
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


    <div class="row my-2">
        <div class="col-md-12 py-1">
            <div class="card">
                <div class="card-body">
                    <canvas height="100px" id="chLine"></canvas>
                </div>
            </div>
        </div>
        
    </div>
					
				</div>




				<div class="col-md-6">

					

					<div  class="row my-3">

						<div class="col">
         <center>   <h4>Sale Graph</h4></center>



        </div>
        
    </div>

    <center> <button style="width:60%; margin-left: -5px" class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Choose Date</button><br> </center>



	<!-- Modal -->
<div class="modal fade" id="printingkhata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose Date</h5>
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


    <div class="row my-2">
        <div class="col-md-12 py-1">
            <div class="card">




                <div class="card-body">
                    <canvas height="100px" id="chLine2"></canvas>
                </div>
            </div>
        </div>
        
    </div>
					
				</div>



			</div>
			




<br>
	<table class="table text-center">

				<center><h4 >Other Sellers</h4><br></center>
				

				<tr><!--- link row to the seller/company view page --->
					<th>Company Name</th>
					<th>Price</th>
<!--					<th>Date</th>-->
					<th>Phone</th>
				</tr>

        <?php
        $othe_pro="select *,s.name as seller_name from sellerinactive_products sip,seller s where sip.inactive_pro_id='$p_id' 
                                and sip.seller_id=s.id and s.type='1'";
        $result_other_pro=mysqli_query($conn,$othe_pro);
        if(mysqli_num_rows($result_other_pro)>0){
            while ($row_other=mysqli_fetch_assoc($result_other_pro)){
                $seller_name=$row_other['seller_name'];
                $p_cost=$row_other['inactive_pro_price'];
                $seller_account=$row_other['inactive_pro_phone'];
                echo'<tr>
					<td>'.$seller_name.'</td>
					<td>'.$p_cost.'</td>
					<td>'.$seller_account.'</td>
				</tr>';
            }
        }
        else{
            echo'<tr>
					<td colspan="3">No Other Sellers</td>
					
				</tr>';
        }
        ?>


			</table>


			<br>




		</div>

		</div><!--- col 2 ending --->








	</div><br><!--- row 1 ending --->



	

<!---
		<div style="padding: 10px" class="card ">

			<h5>Description</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem odio, pulvinar eu consequat eu, sollicitudin eget nibh. Pellentesque consectetur arcu dolor, vitae blandit est blandit elementum. Fusce vehicula in libero in euismod. In hac habitasse platea dictumst. Nullam feugiat convallis ex ac interdum. Cras ultricies consequat massa, vitae egestas eros commodo quis. Nullam at efficitur est, vel vulputate dui. Sed eleifend egestas tortor vitae laoreet. Curabitur ac ultricies leo. Suspendisse ut augue sit amet velit blandit hendrerit. Nullam a urna elit. Pellentesque tincidunt, ex sed egestas dapibus, purus mauris pharetra arcu, dictum suscipit mi odio at mi. Etiam tristique, augue sed pharetra feugiat, mauris ante tincidunt ex, dictum dapibus enim dolor id nisl. Praesent sit amet bibendum dolor. Ut a semper neque. Aenean vitae eros nisl.

					</p>


		</div>  --->












</div><!--- ending row margin --->








<?php include '../footer.html';?>

</body>
</html>