<!DOCTYPE html>
<html>
<head>

	<style>
		
		


		.repeaterbtn{

	height: 40px;
    margin-top: 30px;
				
				}		

		
	</style>


	<title>Insert Customer</title>
</head>
<body>

	<?php include '../../header.php';?>


<div class="container">

<?php
        if($_SESSION['customer_already_created']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['customer_already_created'].'</label>
            </div>
        </div>';
            unset($_SESSION['customer_already_created']);
        }
    if($_SESSION['customer_notinsert']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['customer_notinsert'].'</label>
            </div>
        </div>';
        unset($_SESSION['customer_notinsert']);
    }
    if($_SESSION['customer_insert']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['customer_insert'].'</label>
            </div>
        </div>';
        unset($_SESSION['customer_insert']);
    }

        ?>
		
		<h3 class="pageheading">Add Customer </h3>
		<br>


		<form method="post" action="server.php" enctype="multipart/form-data">
			
			
			<div class="row"><!--- row 1 --->
					

			<div style="padding: 0" class="col-md-6">

				<label for="shopname">Enter Shopname</label>
				<input id="shopname" type="text" class="form-control" placeholder="Enter Customer Shop Name" name="cus_shop_name" required>

			</div>	


			<div style="padding: 0; padding-left: 15px" class="col-md-6">

				<label for="cusname">Enter Name</label>
				<input id="cusname" type="text" class="form-control" placeholder="Enter Customer Name" name="cus_name" required>

			</div>	



			</div><!--- ending row 1 --->

			<br><br>


			<div class="row"><!--- row 2 --->
					

			<div style="padding: 0" class="col-md-6">

				<label for="shopname">Enter Number</label>
				<input id="shopname" type="text" class="form-control" placeholder="Enter Customer Phone Number" name="cus_phone"required>

			</div>	


			<div style="padding: 0; padding-left: 15px" class="col-md-6">

				<label for="cusname">Enter Address</label>
				<input id="cusname" type="text" class="form-control" placeholder="Enter Shop Address" name="cus_address"required>

			</div>	



			</div><!--- ending row 2 --->
<br><br>

			<div class="row"><!--- row 3 --->

				<div style="padding: 0" class="col-md-6">

			<label for="cuspic">Customer Picture</label>
					<input style="height: 45px" type="file" class="form-control" name="cus_image" id="cuspic">


				</div>

				<div style="padding: 0; padding-left: 15px" class="col-md-6">

				<label for="cusname">Enter Address</label>
				<!--- star ratings  --->

					<label style="margin-bottom: 20px">Rating</label><br>
					<label class="radio-inline">
      				<input type="radio" name="optradio" value="Rating 1" checked> Rate 1
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" value="Rating 2"name="optradio"> Rate 2
    				</label>
    				<label class="radio-inline">
      				<input  style="margin-left: 30px;"  type="radio" value="Rating 3" name="optradio"> Rate 3
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio"  value="Rating 4"name="optradio"> Rate 4
    				</label>
    				<label class="radio-inline">
      				<input style="margin-left: 30px;" type="radio" value="Rating 5" name="optradio"> Rate 5
    				</label>



                   <!--- star ratings ending --->   

			</div>	


		</div><!--- ending row 3 --->


			


			

<br><br>


			<div class="row">
				

				<div style="padding: 0" class="col-md-3">
					
					<label for="fbfield">Facebook URL</label>
					<input placeholder="Enter Facebook Id Url" type="web" class="form-control" name="cus_fb" id="fbfield">


				</div>



				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="twitfield">Twitter URL</label>
					<input placeholder="Enter Twitter Id Url" type="web" class="form-control" name="cus_twitter" id="twitfield">


				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="tikfield">Tiktok URL</label>
					<input placeholder="Enter Tiktok Id Url" type="web" class="form-control" name="cus_tiktok" id="tikfield">


				</div>

				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="webfield">Website URL</label>
					<input placeholder="Enter Website Url" type="web" class="form-control" name="cus_web" id="webfield">


				</div>





			</div><!--- row 6 ending --->
<br>

			<div class="row">
				

				<div style="padding: 0" class="col-md-3">
					
					<label for="fbfield">Youtube URL</label>
					<input placeholder="Enter Youtube Channel Id Url" type="web" class="form-control" name="cus_youtube" id="fbfield">


				</div>



				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="twitfield">Instagram URL</label>
					<input placeholder="Enter Insta Id Url" type="web" class="form-control" name="cus_insta" id="twitfield">


				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="tikfield">Email Id</label>
					<input placeholder="Enter Email Id" type="web" class="form-control" name="cus_mail" id="tikfield">


				</div>

				<div style="padding: 0; padding-left: 15px" class="col-md-3">
					
					<label for="webfield">Other</label>
					<input placeholder="Other Website Url i.e. OLX, Daraz.pk" type="web" class="form-control" name="cus_other" id="webfield">


				</div>





			</div><!--- row 7 ending --->
			<br><br>

			<label for="refnum">Reference Number</label>
			<input class="form-control" placeholder="Enter Reference Number" type="text" id="refnum" name="cus_ref">





			<br><br>
			<center>

				<input type="hidden" name="cmd" value="add_customer">
				<button type="submit" class="btn formbtn"> Insert </button>

			</center>	






			





		</form>




</div>	



<script src="jquery.ac-form-field-repeater.js"></script>




<script>
	

	$(document).ready(function(){
    // Change text of input button
    $("#acAdder0").prop("value", "Input New Text");
    
    // Change text of button element
    $("#acAdder0").html("Add More");
});


$(document).ready(function(){
    // Change text of input button
   
    
    // Change text of button element
    $(".repeaterbtn").html("Add More");
});

</script>




	<?php include '../../footer.html';?>

</body>
</html>