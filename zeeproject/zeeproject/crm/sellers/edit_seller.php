
<!DOCTYPE html>
<html>
<head>

	<style>
		
		


		.repeaterbtn{

	height: 40px;
    margin-top: 30px;
				
				}		

		
	</style>


	<title>Edit Seller</title>
</head>
<body>

	<?php include '../../header.php';
    $s_id=$_REQUEST['seller_id'];
    $get_seller_detail="select * from seller s
            where s.id='$s_id'";
    $result_detail=mysqli_query($conn,$get_seller_detail);
    if(mysqli_num_rows($result_detail)>0){
        $row_details=mysqli_fetch_assoc($result_detail);
        $s_type=$row_details['type'];
        $s_name=$row_details['name'];
        $s_des=$row_details['description'];
        $s_cat=$row_details['seller_cat'];
        $s_rating=$row_details['rating'];
        $s_ref=$row_details['refrence_num'];
        $s_fb=$row_details['fb'];
        $s_twitter=$row_details['twitter'];
        $s_tiktok=$row_details['tiktok'];
        $s_web=$row_details['web'];
        $s_youtube=$row_details['youtube'];
        $s_insta=$row_details['insta'];
        $s_mail=$row_details['mail_id'];
        $s_other=$row_details['other'];
        $seller_num=$row_details['seller_phone'];
        $seller_account=$row_details['seller_account'];

    }
    ?>


<div class="container">
		<h3 class="pageheading">Edit Seller </h3>
		<br>


		<form method="post" action="server.php" enctype="multipart/form-data">
			
			<label for="sellertype">Select Seller Type</label>
			<select id="sellertype" class="form-control" name="type">
                <?php
                if($s_type=='1'){
                    echo'
                      <option value="1">Seller</option>
                      <option value="2">Active Seller</option>';
                }
                else{
                    echo'
                      <option value="2">Active Seller</option>
                      <option value="1"> Seller</option>';
                }

                ?>



			</select><br>

			<label for="sellercompanyname">Enter Company/Seller Name</label>
			<input value="<?php echo $s_name?>" id="sellercompanyname" type="text" class="form-control" placeholder="Enter Seller/Company Name" name="sellername" ><br>
            <label for="sellercompanyname">Phone Number</label>
            <input id="sellercompanyname" type="text" class="form-control" placeholder="Enter Phone Number"
                   name="sellernum" value="<?php echo $seller_num?>" required><br>
            <label for="sellercompanyname">Account Number</label>
            <input id="sellercompanyname" type="text" class="form-control" placeholder="Enter Account Number"
                   name="selleracc" value="<?php echo $seller_account?>" required><br>

            <div id="choose_product" style="display: none">
            <label class="control-label" for="ourField">Choose Products</label>
            <select id="purchasedfrom" name="fields[]"class="select2 form-control" multiple>
                <?php
                $s_product="select * from seller_active_pro sap,add_product p where sap.seller_id='$s_id' and sap.product_id=p.id";
                $row_product=mysqli_query($conn,$s_product);
                if(mysqli_num_rows($row_product)>0){
                while($get_product=mysqli_fetch_assoc($row_product)) {
                    $pro_id=$get_product['product_id'];
                    $pro_name=$get_product['name'];
                    echo '<option value="'.$pro_id.'" selected>'.$pro_name.'</option>';
                }
                }
                ?>
                <?php
                $get_product="select * from add_product ";
                $get_result=mysqli_query($conn,$get_product);
                if(mysqli_num_rows($get_result)>0){
                    while($row=mysqli_fetch_assoc($get_result)) {
                        $product_id = $row['id'];
                        $name = $row['name'];
                        $main_pic = $row['main_pic'];
                        echo' <option value="'.$product_id.'">'.$name.'</option>';
                    }
                }
                ?>

            </select>
            </div>
            <div id="myRepeatingFields5" style="display: none">
                <div class="entry input-group col-xs-3">
                    <div class="row">
                    <?php
                    $s_inactiveproduct="select * from sellerinactive_products sip,add_product p where sip.seller_id='$s_id' and sip.inactive_pro_id=p.id";
                    $row_inactiveproduct=mysqli_query($conn,$s_inactiveproduct);
                    if($count=mysqli_num_rows($row_inactiveproduct)>0){
                        while($get_inactiveproduct=mysqli_fetch_assoc($row_inactiveproduct)) {
                            $pro_inactive_id=$get_inactiveproduct['product_id'];
                            $pro_inavtive_name=$get_inactiveproduct['name'];
                            $pro_inactive_price=$get_inactiveproduct['inactive_pro_price'];
                            $pro_inavtive_date=$get_inactiveproduct['inactive_pro_phone'];
                            echo '<div class="col">
                            <label for="seller_otherproduct">Enter Product</label>
                            <select id="seller_otherproduct" name="seller_otherproduct[]"class=" form-control">
                              <option value="'.$pro_inactive_id.'">'.$pro_inavtive_name.'</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>';
                <?php
                $s_inactiveprice="select * from sellerinactive_products sip,add_product p where sip.seller_id='$s_id' and sip.inactive_pro_id=p.id";
                $row_inactiveprice=mysqli_query($conn,$s_inactiveprice)or die(mysqli_error($conn));
                if(mysqli_num_rows($row_inactiveprice)>0){
                while($get_inactiveprice=mysqli_fetch_assoc($row_inactiveprice)) {
                    $p_inactive_pro=$get_inactiveprice['inactive_pro_price'];
                    $phone_inactive_pro=$get_inactiveprice['inactive_pro_phone'];
                    echo' <div class="col">
                            <label for="pprice">Price</label>
                            <input id="pprice" name="seller_otherproduct_price[]" type="text" placeholder="Enter Price"
                                   class="form-control" value="'.$p_inactive_pro.'">
                        </div>
                        <div class="col">

                            <label for="pdate">Enter phone</label>
                            <input id="pdate" name="seller_otherproduct_phone[]" type="text" placeholder="Enter Phone Number" class="form-control" value="'.$phone_inactive_pro.'">

                        </div>
                        <div style="max-width: 5%!important; margin-top: 25px;" class="col">
                            <button type="button" class="btn btn-success btn-lg btn-add5">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>';
                }
                }
                ?>
                         </div>
                </div>
            </div>
			<!--- location dynamic fields --->
            <label class="control-label" for="ourField">Enter Location</label>

            <?php
            $s_loc="select * from seller_location where seller_id='$s_id'";
            $row_loc=mysqli_query($conn,$s_loc);
            if(mysqli_num_rows($row_loc)>0){
                while($get_loc=mysqli_fetch_assoc($row_loc)){
                    $loc=$get_loc['seller_loc'];
                    echo'<div id="myRepeatingFields2">
                <div class="entry input-group col-xs-3">
                    <input class="form-control" name="seller_location[]" type="text" placeholder="Enter Location Name" value="'.$loc.'"/>
                      <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add2">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </span>             
                </div>
            </div>';
                }
            }
            else{
                echo'<div id="myRepeatingFields2">
                <div class="entry input-group col-xs-3">
                    <input class="form-control" name="seller_location[]" type="text" placeholder="Enter Location Name"/>
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add2">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </span>
                </div>
            </div>';
            }
            ?>
            <br><br>
			<!--- ending products dynamic --->
			<div  class="row"><!--- row 3 --->
				
				
				

				<div style="padding: 0; padding-left: 10px" class="col">
					
					<label for="sellerdescription">Enter Description</label>
					<textarea id="sellerdescription" class="form-control" placeholder="Enter Description" rows="8" name="s_description"><?php echo $s_des?></textarea><br>


				</div>


			</div><br><!--- row 3 ending --->

			<div class="row">
				<div style="padding: 0px" class="col">
					<label for="dealercat">Dealer Category</label>
					<input value="<?php echo $s_cat?>" type="text" id="dealercat" class="form-control" name="dealer_cat" placeholder="Enter Dealer Category Name"><br>
				</div>
				
				<div style="padding: 0px; padding-left: 20px;" class="col">
					<!--- star ratings  --->
                    <?php
                    if($s_rating=='Rating 1'){
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
                    elseif($s_rating=='Rating 2'){
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
                    elseif($s_rating=='Rating 3'){
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
                    elseif($s_rating=='Rating 4'){
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
      				<input style="margin-left: 30px;" type="radio" name="optradio"value="Rating 5" checked> Rate 5
    				</label>';
                    }
                        ?>
                   <!--- star ratings ending --->
				</div>





			</div><!--- row 4 ending  --->

			<br>

            <div class="row">

                <div style="padding: 0" class="col-md-6">

                    <label for="dealerpics">Dealer Pictures</label>
                    <input style="height: 45px" type="file" class="form-control" name="seller_pic[]" id="dealerpics"
                           multiple>


                </div>


                <div style="padding: 0; padding-left: 15px" class="col-md-6">

                    <label for="refnum">Reference Number</label>
                    <input placeholder="Enter other contact number" style="height: 45px" type="text" class="form-control"
                           name="seller_ref_num" id="refnum" value="<?php echo $s_ref?>">


                </div>


            </div><!--- row 5 ending  --->

            <br><br>


            <!--- products dynamic fields --->


            <label class="control-label" for="ourField">Other Products (without inventory)</label>
            <?php
            $s_other_pro="select * from seller_other_product where seller_id='$s_id'";
            $row_other=mysqli_query($conn,$s_other_pro);
            if(mysqli_num_rows($row_other)>0){
                while($get_other=mysqli_fetch_assoc($row_other)) {
                    $other_p = $get_other['other_product'];
                    $other_price = $get_other['other_pro_price'];
                    $other_date = $get_other['other_pro_date'];
                    echo'
                    <div id="myRepeatingFields3">
                <div class="entry input-group col-xs-3">

                    <div class="row">


                        <div class="col">

                            <label for="pname">Enter Product</label>
                            <input id="pname" name="seller_product_name[]" type="text" placeholder="Enter Product Name"
                                   class="form-control" value="'.$other_p.'">

                        </div>

                        <div class="col">

                            <label for="pprice">Price</label>
                            <input id="pprice" name="seller_product_price[]" type="text" placeholder="Enter Price"
                                   class="form-control"  value="'.$other_price.'">

                        </div>

                        <div class="col">

                            <label for="pdate">Enter Date</label>
                            <input id="pdate" name="seller_product_date[]" type="date" class="form-control"  value="'.$other_date.'">

                        </div>

                        <div style="max-width: 5%!important; margin-top: 25px;" class="col">


                            <button type="button" class="btn btn-success btn-lg btn-add3">
                                <i class="fa fa-plus" aria-hidden="true"></i>

                            </button>


                        </div>


                    </div>


                </div>
            </div>
            ';
                }
            }
            else{
                echo'
            <div id="myRepeatingFields3">
                <div class="entry input-group col-xs-3">

                    <div class="row">


                        <div class="col">

                            <label for="pname">Enter Product</label>
                            <input id="pname" name="seller_product_name[]" type="text" placeholder="Enter Product Name"
                                   class="form-control">

                        </div>

                        <div class="col">

                            <label for="pprice">Price</label>
                            <input id="pprice" name="seller_product_price[]" type="text" placeholder="Enter Price"
                                   class="form-control">

                        </div>

                        <div class="col">

                            <label for="pdate">Enter Date</label>
                            <input id="pdate" name="seller_product_date[]" type="date" class="form-control">

                        </div>

                        <div style="max-width: 5%!important; margin-top: 25px;" class="col">


                            <button type="button" class="btn btn-success btn-lg btn-add3">
                                <i class="fa fa-plus" aria-hidden="true"></i>

                            </button>


                        </div>


                    </div>


                </div>
            </div>';
            }
                    ?>




            <br>
            <small>Press <i class="fa fa-plus" aria-hidden="true"></i>
                for another field</small>


            <br>


            <div class="row">


                <div style="padding: 0" class="col-md-3">

                    <label for="fbfield">Facebook URL</label>
                    <input placeholder="Enter Facebook Id Url" type="text" class="form-control" name="fb" id="fbfield" value="<?php echo $s_fb?>">


                </div>


                <div style="padding: 0; padding-left: 15px" class="col-md-3">

                    <label for="twitfield">Twitter URL</label>
                    <input placeholder="Enter Twitter Id Url" type="text" class="form-control" name="twitter"
                           id="twitfield"value="<?php echo $s_twitter?>">


                </div>


                <div style="padding: 0; padding-left: 15px" class="col-md-3">

                    <label for="tikfield">Tiktok URL</label>
                    <input placeholder="Enter Tiktok Id Url" type="text" class="form-control" name="tiktok" id="tikfield" value="<?php echo $s_tiktok?>">


                </div>

                <div style="padding: 0; padding-left: 15px" class="col-md-3">

                    <label for="webfield">Website URL</label>
                    <input placeholder="Enter Website Url" type="text" class="form-control" name="web" id="webfield" value="<?php echo $s_web?>">


                </div>


            </div><!--- row 6 ending --->
            <br>

            <div class="row">


                <div style="padding: 0" class="col-md-3">

                    <label for="fbfield">Youtube URL</label>
                    <input placeholder="Enter Youtube Channel Id Url" type="text" class="form-control" name="youtube"
                           id="fbfield" value="<?php echo $s_youtube?>">


                </div>


                <div style="padding: 0; padding-left: 15px" class="col-md-3">

                    <label for="twitfield">Instagram URL</label>
                    <input placeholder="Enter Insta Id Url" type="text" class="form-control" name="insta" id="twitfield" value="<?php echo $s_insta?>">


                </div>


                <div style="padding: 0; padding-left: 15px" class="col-md-3">

                    <label for="tikfield">Email Id</label>
                    <input placeholder="Enter Email Id" type="text" class="form-control" name="mail" id="tikfield" value="<?php echo $s_mail?>">


                </div>

                <div style="padding: 0; padding-left: 15px" class="col-md-3">

                    <label for="webfield">Other</label>
                    <input placeholder="Other Website Url i.e. OLX, Daraz.pk" type="text" class="form-control" name="other"
                           id="webfield" value="<?php echo $s_other?>">


                </div>


            </div><!--- row 7 ending --->
            <br><br>
			<center>
                <input type="hidden" name="cmd" value="update_seller">
                <input type="hidden" name="seller_id" value="<?php echo $s_id?>">
				<button type="submit" class="btn formbtn"> Update </button>

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
<script>


    $(function () {
        $(document).on('click', '.btn-add2', function (e) {
            e.preventDefault();
            var controlForm = $('#myRepeatingFields2:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('');
            var val = $("input[name='seller_location[]']").map(function () {
                return $(this).val();
            }).get();
            ;
            controlForm.find('.entry:not(:last) .btn-add2')
                .removeClass('btn-add2').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<i class="fa fa-times" aria-hidden="true"></i>');
        }).on('click', '.btn-remove', function (e) {
            e.preventDefault();
            $(this).parents('.entry:first').remove();
            return false;
        });
    });

</script>
<script>


    $(function () {
        $(document).on('click', '.btn-add3', function (e) {
            e.preventDefault();
            var controlForm = $('#myRepeatingFields3:first'),
                currentEntry = $(this).parents('.entry:first'),
                newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input').val('');
            controlForm.find('.entry:not(:last) .btn-add3')
                .removeClass('btn-add3').addClass('btn-remove')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<i class="fa fa-times" aria-hidden="true"></i>');
        }).on('click', '.btn-remove', function (e) {
            e.preventDefault();
            $(this).parents('.entry:first').remove();
            return false;
        });
    });


    $(document).ready(function () {
        let seller_type=<?php echo $s_type?>;
        if(seller_type=='1'){
            $('#choose_product').hide();
            $('#myRepeatingFields5').show();
        }
        else{
            $('#choose_product').show();
            $('#myRepeatingFields5').hide();
        }

        $('#sellertype').change(function () {
            let seller_type=$(this).val();
            if(seller_type=='1'){
                $('#myRepeatingFields5').show();
                $('#choose_product').hide();
            }
            else{
                $('#choose_product').show();
                $('#myRepeatingFields5').hide();
            }
        });
    });
</script>