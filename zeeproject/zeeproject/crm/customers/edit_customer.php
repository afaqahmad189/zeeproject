<!DOCTYPE html>
<html>
<head>

	<style>
		
		


		.repeaterbtn{

	height: 40px;
    margin-top: 30px;
				
				}		

		
	</style>


	<title>Edit Customer</title>
</head>
<body>


	<?php include '../../header.php';
	
	 $customer_id=$_REQUEST['customer_id'];
	 $sql="select * from customer where id='$customer_id'";
	 $data=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	 if(mysqli_num_rows($data)>0){
		 $row=mysqli_fetch_assoc($data);
	   $shopname=$row['cus_shop_name'];
	   $name=$row['cus_name'];
	   $number=$row['cus_phone'];
	   $address=$row['cus_address'];
	   $fb=$row['cus_fb'];
	   $twitter=$row['cus_twitter'];
	   $tiktok=$row['cus_tiktok'];
	   $web=$row['cus_web'];
	   $youtube=$row['cus_youtube'];
	   $insta=$row['cus_insta'];
	   $mail_id=$row['cus_mail'];
	   $other=$row['cus_other'];
	   $reference=$row['cus_ref'];
	   $c_cus_rating=$row['cus_rating'];
	 }
	 else{
		 echo "no data";
	 }
	?>


<div class="container">


		
		<h3 class="pageheading">Edit Customer </h3>
		<br>


		<form method="post" action="server.php" enctype="multipart/form-data">
			
			
			<div class="row"><!--- row 1 --->
					

			<div style="padding: 0" class="col-md-6">

				<label for="shopname">Enter Shopname</label>
				<input id="shopname" type="text" value="<?php echo $shopname ?>" class="form-control" placeholder="Enter Customer Shop Name" name="cus_shop_name">

			</div>	


			<div style="padding: 0; padding-left: 15px" class="col-md-6">

				<label for="cusname">Enter Name</label>
				<input id="cusname" type="text" value="<?php echo $name ?>" class="form-control" placeholder="Enter Customer Name" name="cus_name">

			</div>	



			</div><!--- ending row 1 --->

			<br><br>


			<div class="row"><!--- row 2 --->
					

			<div style="padding: 0" class="col-md-6">

				<label for="shopname">Enter Number</label>
				<input id="shopname" type="text" value="<?php echo $number ?>" class="form-control" placeholder="Enter Customer Phone Number" name="cus_phone">

			</div>	


			<div style="padding: 0; padding-left: 15px" class="col-md-6">

				<label for="cusname">Enter Address</label>
				<input id="cusname" type="text" value="<?php echo $address ?>"class="form-control" placeholder="Enter Shop Address" name="cus_address">

			</div>	



			</div><!--- ending row 2 --->
<br><br>

			<div class="row"><!--- row 3 --->

				<div style="padding: 0" class="col-md-6">

			<label for="cuspic">Customer Pictures</label>
					<input style="height: 45px" type="file" class="form-control" name="cus_image" id="cuspic">


				</div>

				<div style="padding: 0; padding-left: 15px" class="col-md-6">

				<label for="cusname">Enter Address</label>
				<!--- star ratings  --->


                    <?php
                    if($c_cus_rating=='Rating 1'){
                        echo'<label style="margin-bottom: 20px">Rating</label><br>
					<label class="radio-inline">
      				<input type="radio" name="optradio" value="Rating 1"checked>Rate 1
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 2"> Rate 2
    				</label>
    				<label class="radio-inline">
      				<input  style="margin-left: 30px;"  type="radio" name="optradio"value="Rating 3"> Rate 3
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 4"> Rate 4
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 5"> Rate 5
    				</label>';
                    }
                    elseif($c_cus_rating=='Rating 2'){
                        echo'<label style="margin-bottom: 20px">Rating</label><br>
					<label class="radio-inline">
      				<input type="radio" name="optradio" value="Rating 1">Rate 1
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 2"checked> Rate 2
    				</label>
    				<label class="radio-inline">
      				<input  style="margin-left: 30px;"  type="radio" name="optradio"value="Rating 3"> Rate 3
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 4"> Rate 4
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 5"> Rate 5
    				</label>';
                    }
                    elseif($c_cus_rating=='Rating 3'){
                        echo'<label style="margin-bottom: 20px">Rating</label><br>
					<label class="radio-inline">
      				<input type="radio" name="optradio" value="Rating 1">Rate 1
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 2"> Rate 2
    				</label>
    				<label class="radio-inline">
      				<input  style="margin-left: 30px;"  type="radio" name="optradio"value="Rating 3" checked> Rate 3
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 4"> Rate 4
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 5"> Rate 5
    				</label>';
                    }
                    elseif($c_cus_rating=='Rating 4'){
                        echo'<label style="margin-bottom: 20px">Rating</label><br>
					<label class="radio-inline">
      				<input type="radio" name="optradio" value="Rating 1">Rate 1
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 2"> Rate 2
    				</label>
    				<label class="radio-inline">
      				<input  style="margin-left: 30px;"  type="radio" name="optradio"value="Rating 3"> Rate 3
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 4"checked> Rate 4
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 5"> Rate 5
    				</label>';
                    }
                    else{
                        echo'<label style="margin-bottom: 20px">Rating</label><br>
					<label class="radio-inline">
      				<input type="radio" name="optradio" value="Rating 1" >Rate 1
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 2"> Rate 2
    				</label>
    				<label class="radio-inline">
      				<input  style="margin-left: 30px;"  type="radio" name="optradio"value="Rating 3"> Rate 3
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 4"> Rate 4
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 5"checked> Rate 5
    				</label>';
                    }
                    ?>

                   <!--- star ratings ending --->   

			</div>	


		</div><!--- ending row 3 --->


			


			

<br><br>


			<div class="row">
				

				<div style="padding: 0" class="col-md-3">
					
					<label for="fbfield">Facebook URL</label>
					<input placeholder="Enter Facebook Id Url" type="text" value="<?php echo $fb ?>" class="form-control" name="cus_fb" id="fbfield">


				</div>



				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="twitfield">Twitter URL</label>
					<input placeholder="Enter Twitter Id Url" type="text" value="<?php echo $twitter ?>" class="form-control" name="cus_twitter" id="twitfield">


				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="tikfield">Tiktok URL</label>
					<input placeholder="Enter Tiktok Id Url" type="text" value="<?php echo $tiktok ?>" class="form-control" name="cus_tiktok" id="tikfield">


				</div>

				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="webfield">Website URL</label>
					<input placeholder="Enter Website Url" type="text" value="<?php echo $web ?>" class="form-control" name="cus_web" id="webfield">


				</div>





			</div><!--- row 6 ending --->
<br>

			<div class="row">
				

				<div style="padding: 0" class="col-md-3">
					
					<label for="fbfield">Youtube URL</label>
					<input placeholder="Enter Youtube Channel Id Url" type="text" value="<?php echo $youtube ?>" class="form-control" name="cus_youtube" id="fbfield">


				</div>



				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="twitfield">Instagram URL</label>
					<input placeholder="Enter Insta Id Url" type="text"  value="<?php echo $insta ?>"class="form-control" name="cus_insta" id="twitfield">


				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="tikfield">Email Id</label>
					<input placeholder="Enter Email Id" type="text" value="<?php echo $mail_id ?>" class="form-control" name="cus_mail" id="tikfield">


				</div>

				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="webfield">Other</label>
					<input placeholder="Other Website Url i.e. OLX, Daraz.pk"  type="text" value="<?php echo $other ?>" class="form-control" name="cus_other" id="webfield">


				</div>





			</div><!--- row 7 ending --->
			<br><br>

			<label for="refnum">Reference Number</label>
			<input class="form-control" placeholder="Enter Reference Number" type="text" value="<?php echo $reference ?>" id="refnum" name="cus_ref">





			<br><br>
			<center>
                <input type="hidden" name="cus_id" value="<?php echo $customer_id?>">
                <input type="hidden" name="cmd" value="update_customer">
				<button type="submit" class="btn formbtn"> Update </button>

			</center>	






			





		</form>




</div>	



<script src="jquery.ac-form-field-repeater.js"></script>









	<?php include '../../footer.html';?>

</body>
</html>