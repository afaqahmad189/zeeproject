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


	<title>Customer Details</title>
</head>
<body>



<?php include '../../header.php';
$customer_id = $_REQUEST['customer_id'];
$sql = "select * from customer where  id='$customer_id'";
$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_assoc($data);
    $customer_id = $row['id'];
    $shopname = $row['cus_shop_name'];
    $name = $row['cus_name'];
    $number= $row['cus_phone'];
    $address = $row['cus_address'];
	$fb=$row['cus_fb'];
	$twitter=$row['cus_twitter'];
    $tiktok=$row['cus_tiktok'];
    $web=$row['cus_web'];
    $youtube=$row['cus_youtube'];
    $insta=$row['cus_insta'];
    $mail_id=$row['cus_mail'];
    $other=$row['cus_other'];
    $reference=$row['cus_ref'];
    $cus_img=$row['cus_image'];
    $cus_rating=$row['cus_rating'];

}
else {
    echo "no data";
}

?>



<div class="rowmargin">
	


	<div class="row"> 

		<div style="padding: 10px; max-width: 30%" class="col card ">
			
			
			<center>

				<h1 title=" Shop Name"style="margin-bottom: 20px"><?php echo $shopname?></h1>
				<h1 title=" Customer Name" style="margin-bottom: 20px"><?php echo $name?></h1>
                <?php
                if($cus_img=='images/'){
                    echo'<img align="center" width="180px" src="https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png"><br></center><br>';
                }
                else{
                    echo'<img align="center" width="180px" height="150px" src="'.$cus_img.'"><br></center><br>';
                }
                ?>


			<table class="table text-center">

				<tr>

					<td>Ratings</td>
					<td><?php echo $cus_rating?></td>

				</tr>	
				
				

<!--				<tr>-->
<!---->
<!--					<td>Customer Type</td>-->
<!--					<td>Shopkepper</td>-->
<!---->
<!--				</tr>	-->

			</table>
			<br>

			

			<div  class="row"><!--- 1st social icons row--->

				
				<div class="col-md-3">
				<center>	
			<a style="color: white; " target="blank" href="<?php echo $fb?>" ><img width="85px" src="/zeeproject/media/images/facebook.png">
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
			<a style="color: white; " target="blank"  href="<?php echo $youtube?>" ><img width="85px" src="/zeeproject/media/images/youtube.png">
</a></center>

				</div>

				<div class="col-md-3">

			<center>		
			<a style="color: white; " target="blank"  href="<?php echo $insta?>" ><img width="85px" src="/zeeproject/media/images/instagram.png">
			
			</a></center>

				</div>


				<div class="col-md-3">

			<center>		
			<a style="color: white; " target="blank"  href="<?php echo $mail_id?>" ><img width="85px" src="/zeeproject/media/images/email.png">
			
			</a></center>

				</div>



				<div class="col-md-3">

			<center>	
			<a style="color: white; " target="blank"  href="<?php echo $other?>" ><img width="85px" src="/zeeproject/media/images/shopping-bag.png">
			
			</a></center>

				</div>


		</div><!--- second social icons row ending -->

			<br>
		
		<a style=" font-size: 24px; margin-bottom: 12px" class="btn btn-primary viewpagebtn" href="/zeeproject/crm/customers/edit_customer.php?customer_id=<?php echo $customer_id?>">Edit Customer</a>
		

		<a style=" font-size: 24px" class="btn btn-warning" href="/zeeproject/crm/customers/insert_khata.php?customer_id=1">View Khata</a>	

			

		</div>


		<div style="padding: 20px; margin-left: 15px" class="col card ">
			
			<center><h4>Customer Basic Info</h4></center>
			<table class="table text-center">
				

				<tr>
					<th>Shop Address</th>
					<th>Phone</th>
					<th>Reference Number</th>
					
				</tr>

				<tr>
					<td><?php echo $address?></td>
					<td><?php echo $number?></td>
					<td><?php echo $reference?></td>
					
				</tr>

				

			</table>

			<br>


				

			<a class="btn btn-primary" href="/zeeproject/sales/orders_by_customer.php">Show All</a>

			

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