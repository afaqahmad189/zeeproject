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



<?php include '../../header.php';
$seller_id = $_REQUEST['seller_id'];
$sql = "select * from seller s 
        where s.id=$seller_id";
$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_assoc($data);
    $seller_id = $row['id'];
    $seller_name = $row['name'];
    $rating = $row['rating'];
    $type= $row['type'];
    $description = $row['description'];
    $image=$row['image'];
    $fb=$row['fb'];
    $twitter=$row['twitter'];
    $tiktok=$row['tiktok'];
    $web=$row['web'];
    $youtube=$row['youtube'];
    $insta=$row['insta'];
    $mail=$row['mail_id'];
    $other=$row['other'];

}
else {
    echo "no data";
}
?>




<div class="rowmargin">
	


	<div class="row"> 

		<div style="padding: 10px; max-width: 30%; " class="col card ">
			
			
			<center>

				<h1 style="margin-bottom: 20px"><?php echo $seller_name?></h1>

                <?php
                $get_img="select *  from seller_img where seller_id='$seller_id'";
                $result_img=mysqli_query($conn,$get_img);
                if(mysqli_num_rows($result_img)>0){
                    $data_img=mysqli_fetch_assoc($result_img);
                    $seller_img=$data_img['seller_img'];
                    echo'<img align="center" width="180px" height="180px" src="'.$seller_img.'"><br></center><br>';
                }
                else{
                    echo'<img align="center" width="180px" src="https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png"><br></center><br>';
                }
                ?>

			<table class="table text-center">

				<tr>

					<td>Ratings</td>
					<td><?php echo $rating?></td>

				</tr>	
				
				

				<tr>

					<td>Seller Type</td>
					<td>
                        <?php
                        if($type=='1'){
                            echo'Seller';
                        }
                        else{
                            echo'Active Seller';
                        }?>
                    </td>

				</tr>	

			</table>
			<br>

			<center><h5>Active Products</h5></center>

			<table class="table text-center">

				<tr>

					<th>Product Name</th>
					<th>Price</th>
					<th>Orders</th>

				</tr>
                <?php
                $active_product="select *  from seller_active_pro sap,add_product ap where sap.seller_id='$seller_id' and sap.product_id=ap.id order by sap.id limit 3";
                $result_product=mysqli_query($conn,$active_product)or die(mysqli_error($conn));
                if(mysqli_num_rows($result_product)>0){
                    while($data_product=mysqli_fetch_assoc($result_product)){
                    $active_product_name=$data_product['name'];
                    $active_product_price=$data_product['sale_price'];
                    echo'<tr><td>'.$active_product_name.'</td><td>'.$active_product_price.'</td><td>orders</td></tr>';
                    }
                }
                else{
                    echo'<tr><td colspan="3">No active Product</td></tr>';
                }
                ?>

			</table>
			
			<a class="btn btn-primary" href="/zeeproject/inventory/products_by_seller.php?seller_id=<?php echo $seller_id?>">View All Products From This Seller</a><br>

			
			<div  class="row"><!--- 1st social icons row--->

				
				<div class="col-md-3">
				<center>	
			<a style="color: white; " target="blank"  href="<?php echo $fb?>" ><img width="85px" src="/zeeproject/media/images/facebook.png">
</a></center>

				</div>

				<div class="col-md-3">

			<center>		
			<a style="color: white; " target="blank"  href="<?php echo $twitter?>" ><img width="85px" src="/zeeproject/media/images/twitter.png">
			
			</a></center>

				</div>


				<div class="col-md-3">

			<center>		
			<a style="color: white; " target="blank"  href="<?php echo $tiktok?>" ><img width="85px" src="/zeeproject/media/images/tiktok.png">
			
			</a></center>

				</div>



				<div class="col-md-3">

			<center>	
			<a style="color: white; " target="blank"  href="<?php echo $web?>" ><img width="85px" src="/zeeproject/media/images/url.png">
			
			</a></center>

				</div>


		</div><!--- 1st social icons row ending -->


		


		<div  class="row"><!--- second social icons row--->

				
				<div class="col-md-3">
				<center>	
			<a style="color: white;" target="blank" href="<?php echo $youtube?>" ><img width="85px" src="/zeeproject/media/images/youtube.png">
</a></center>

				</div>

				<div class="col-md-3">

			<center>
                <a style="color: white; " target="blank"  href="<?php echo $insta?>" ><img width="85px" src="/zeeproject/media/images/instagram.png">
			
			</a></center>

				</div>


				<div class="col-md-3">

			<center>		
			<a style="color: white; " target="blank"  href="<?php echo $mail?>" ><img width="85px" src="/zeeproject/media/images/email.png">
			
			</a></center>

				</div>



				<div class="col-md-3">

			<center>	
			<a style="color: white; " target="blank"  href="<?php echo $other?>" ><img width="85px" src="/zeeproject/media/images/shopping-bag.png">
			
			</a></center>

				</div>


		</div><!--- second social icons row ending -->


			
			<br>

		<a style=" font-size: 24px; margin-bottom: 12px" class="btn btn-primary viewpagebtn" href="/zeeproject/crm/sellers/edit_seller.php?seller_id=1">Edit Seller</a>	
		

		<a style=" font-size: 24px" class="btn btn-warning" href="/zeeproject/crm/sellers/insert_khata.php?seller_id=1">View Khata</a>	


	 <!--- Khata button only show if Seller Type = Active Seller --->

			

		</div>


		<div style="padding: 20px; margin-left: 15px" class="col card ">
<!--			<center><h4>Dealers Info</h4></center><br>-->

<!--			<table class="table text-center">-->
<!--				-->
<!---->
<!--				<tr>-->
<!--					<th>Dealer Name</th>-->
<!--					<th>Phone</th>-->
<!--					<th>Account Numbers</th>-->
<!--				</tr>-->
<!---->
<!--                <tr>-->
<!--<?php
////                    $sql_dealer = "select * from seller_sub_detail_dealer sd,seller s
////                         where s.id=$seller_id and sd.seller_id=s.id";
////                    $data_dealer = mysqli_query($conn, $sql_dealer) or die(mysqli_error($conn));
////                    if (mysqli_num_rows($data_dealer) > 0) {
////                        while($row_dealer= mysqli_fetch_assoc($data_dealer)){
////                            $dealer_name = $row_dealer['dealer_name'];
////                            $phone = $row_dealer['contact'];
////                            $account_no= $row_dealer['account_number'];
////                            echo '<td>'.$dealer_name.'</td>';
////                            echo'<td>'.$phone.'</td>';
////                            echo'<td>'.$account_no.'</td>';
////                        }
////
////                    } ?>
<         </tr>-->
<!---->
<!---->
<!--			</table>-->
<!---->
<!--			<br>-->

			<center><h4>Shops Info</h4></center><br>

			<table class="table text-center">
				
				<tr>
					
					<th>Shop Addresses</th>

				</tr>

                <tr>
                    <?php
                    $sql_location = "select * from seller_location sl
                         where sl.seller_id=$seller_id ";
                    $data_location = mysqli_query($conn, $sql_location) or die(mysqli_error($conn));
                    if (mysqli_num_rows($data_location) > 0) {
                        while($row_location= mysqli_fetch_assoc($data_location)){
                            $location = $row_location['seller_loc'];
                            echo '<tr><td>'.$location.'</td></tr>';

                        }

                    } ?>
                </tr>


			</table>

<br>
			<center><h4>Description</h4></center><br>
			<table class="table text-center">
				
				

				


				<tr>

					<th>Description</td>
				</tr>
				
				<tr>		
					<td>
					
						<p><?php echo $description?></p>
						


					</td>

				</tr>	
	


			</table><br>


			<center><h4>Other Products</h4></center><br>
			
			<table class="table text-center">
				<tr>
					<th>Product Name</th>
					<th>Price</th>
					<th>Date</th>
				</tr>
                <?php
                $other_product="select *  from seller_other_product where seller_id='$seller_id'";
                $result_other_product=mysqli_query($conn,$other_product);
                if(mysqli_num_rows($result_other_product)>0){
                    while($data_other_product=mysqli_fetch_assoc($result_other_product)){
                        $other_product_name=$data_other_product['other_product'];
                        $other_product_price=$data_other_product['other_pro_price'];
                        $other_product_date=$data_other_product['other_pro_date'];
                        echo'<tr><td>'.$other_product_name.'</td><td>'.$other_product_price.'</td><td>'.$other_product_date.'</td></tr>';
                    }
                }
                else{
                    echo'<tr><td colspan="3">No Other Products</td></tr>';
                }
                ?>



			</table>

			

			<br>


			<br>

			

			


		</div>








	</div><br><!--- row 1 ending --->



	

<!---
		<div style="padding: 10px" class="card ">

			<h5>Description</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem odio, pulvinar eu consequat eu, sollicitudin eget nibh. Pellentesque consectetur arcu dolor, vitae blandit est blandit elementum. Fusce vehicula in libero in euismod. In hac habitasse platea dictumst. Nullam feugiat convallis ex ac interdum. Cras ultricies consequat massa, vitae egestas eros commodo quis. Nullam at efficitur est, vel vulputate dui. Sed eleifend egestas tortor vitae laoreet. Curabitur ac ultricies leo. Suspendisse ut augue sit amet velit blandit hendrerit. Nullam a urna elit. Pellentesque tincidunt, ex sed egestas dapibus, purus mauris pharetra arcu, dictum suscipit mi odio at mi. Etiam tristique, augue sed pharetra feugiat, mauris ante tincidunt ex, dictum dapibus enim dolor id nisl. Praesent sit amet bibendum dolor. Ut a semper neque. Aenean vitae eros nisl.

					</p>


		</div>  --->












</div><!--- ending row margin --->








<?php include '../../footer.html';?>

</body>
</html>