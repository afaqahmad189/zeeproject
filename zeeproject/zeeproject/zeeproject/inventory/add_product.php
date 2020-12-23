<?php include '../header.php';?>
<!DOCTYPE html>
<html>
<head>
    <style>

</style>
	<title>Add Product</title>
</head>
<body>




	<div class="container">

        <div class="row" id="toast_cat" ></div>
        <?php
        if($_SESSION['product_already_created']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['product_already_created'].'</label>
            </div>
        </div>';
            unset($_SESSION['product_already_created']);
        }
        if($_SESSION['product_notinsert']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['product_notinsert'].'</label>
            </div>
        </div>';
            unset($_SESSION['product_notinsert']);
        }
        if( $_SESSION['product_insert']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'. $_SESSION['product_insert'].'</label>
            </div>
        </div>';
            unset($_SESSION['product_insert']);
        }
        ?>
		<h3 class="pageheading">Add Products </h3>
		<br>


		<div class="row">
		<div class="col-md-8">
		<form method="post" action="server.php" enctype="multipart/form-data">
			<div class="row"> <!--- form row 1 --->
				<div class="col">
				
					<label for="productname">Product Name</label>
					<input type="text" id="productname" class="form-control" name="productname" placeholder="Enter Product Name" required><br>

					<label for="invetoryaffect">Invetory Affect</label>

					<select id="invetoryaffect" name="invetoryaffect" class="form-control" required>
        			<option selected>Choose...</option>
        			<option value="1">Yes</option>
        			<option value="0">No</option>

        			</select>



					

					<label style="margin-top: 23px" for="unit">Unit</label>
<!--					<input type="number" id="unit" class="form-control" name="unit" placeholder="Enter Unit" required>-->
                    <br>
                    <select id="unit" class="form-control" name="unit" required>
                        <option selected>Choose...</option>
                        <option value="Piece">Piece</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Pound">Pound</option>
                        <option value="grams">grams</option>
                        <option value="mili gram">mili gram</option>
                        <option value="ounce">ounce</option>
                        <option value="ozt">ozt</option>
                        <option value="mili lite">mili liter</option>
                        <option value="liter">liter</option>
                    </select>

					<label for="productcost" style="margin-top: 23px">Product Cost</label>
					<input type="number" id="productcost" class="form-control" name="productcost" placeholder="Enter Product Cost" required><br>



				</div><!--- ending first col for this form --->



				<div class="col">
				
					<label for="barcode">Barcode</label>
					<input type="text" id="barcode" class="form-control" name="barcode" placeholder="Enter Barcode" ><br>


					<div class="row">

						<div style="padding: 0" class="col col-md-12 selectcatcol">

					<label for="catselect">Select Category</label>
					
					

				<select id="catselect" name="catselect" class="form-control select2" required>
        			<option selected>Choose...</option>

      				</select>
      				<br>

      					 </div>

      				</div>

      				<br>
      				<div class="row">

      					<div style="padding: 0" class="col qtycol">

      					<label for="quantity">Quantity</label>
						<input type="number" id="quantity" class="form-control" name="quantity" placeholder="Enter Quantity" required><br>

						</div>

						<div class="col-md-6 alertstockcol">

      					<label for="alertstock">Alert Stock</label>
						<input type="number" id="alertstock" class="form-control" name="alertstock" placeholder="Enter Low Stock Alert" required><br>

						</div>
      					


      				</div>

					



					<label for="saleprice">Sale Price</label>
					<input type="number" id="productcost" class="form-control" name="productcost" placeholder="Enter Discount Price" required><br>



				</div>


			</div>	<!--- ending form row 1 ---> 


			<div class="row"><!--- form row 2 ---> 
				
				<div class="col">
					
					<label for="description">Description</label>
					<textarea placeholder="Enter Product Description" rows="8" class="form-control" id="description" name="description"></textarea><br>


				</div>



			</div><!--- ending form row 2 ---> 

			<div class="row"> <!--- form row 3 --->
				
				<div class="col">
					
					<label for="productplace">Product Place/Rack</label>
					<input type="text" id="productplace" class="form-control" name="rack_no" placeholder="Enter Product Place"><br>

				</div>
            </div>
           <div class="row"> <!--- form row 3 --->
                
                <div class="col">
                    
                    <label for="productplace">Warehouse Number</label>
                    <input type="text" id="productplace" class="form-control" name="warehoue_num" placeholder="Enter Product Place"><br>

                </div>


                <div class="col">
                    
                    <label for="purchasedfrom">Product Place</label>
                    <input type="text" id="productplace" class="form-control" name="purchased_place" placeholder="Enter Product Place"><br>

                <!---   <input type="text" id="purchasedfrom" class="form-control" name="" placeholder="Enter Purchased From">---> <br>
                    
                </div> 




            </div> <!--- ending form row 3 --->

			<div class="row">
				
				<div class="col">
					
					<label for="mainpic">Product Main Picture</label>
					<input style="height: 45px" type="file" class="form-control" name="mainpic" id="mainpic"><br>


					<label for="otherpics">Product Other Pictures</label>
					<input style="height: 45px" type="file" class="form-control" name="otherpics[]" id="otherpics" multiple><br>


					<label for="3dpics">Product 3D Pictures</label>
					<input style="height: 45px" type="file" class="form-control" name="thirdpics[]" id="thirdpics" multiple><br>

				</div>




			</div>


			<br>
			<center>

                <input type="hidden" name="cmd" value="add_product">
				<button type="submit" class="btn formbtn"> Insert </button>

			</center>	






		</form>	


	</div><!--- col 1 ending main row --->



	<div class="col-md-4">
				
				<div class="card">

					<div class="card-header">
						
						<h4>Create Category</h4>

					</div>

				<form style="margin: 10px">
					

					
					<input style="width: 98%;  margin-top: 25px" type="text" id="catname" class="form-control" name="" placeholder="Enter Category Name"><br>
                    <input type="hidden" name="cmd" id="cmd" value="add_category">
					<input type="button" value="Insert" class="btn btn-primary" name="cat_name" id="cat_name" required>



				</form>


				</div>



			</div><!--- col 2s ending main row --->


		

</div><!--- ending main row --->



	</div>






<script>

$(document).ready(function(){
 $('#quantity').change(function () {
 //var job =  $('#quantity').val();
 $(".qtycol").removeClass("col");
 $(".qtycol").addClass("col-md-6");
 $('.alertstockcol').show();
})

    //add category
    $('#cat_name').click(function () {
        var cmd=$('#cmd').val();
        var catname=$('#catname').val();
        $.post('server.php',{
                    cmd:cmd,cat_name:catname
                },function(data){
            $('#toast_cat').show();
            $('#toast_cat').append(data);
            $('#catname').val('');
        });
        // toast hide
        setTimeout(function() {
            $('.toast').fadeOut('fast');
        }, 1000);
});

    $('.select2').click(function () {
        $.post('server.php',{
            cmd:'get_cat'
        },function(data){
            $('#catselect').empty();
           $('#catselect').append(data);
            //toast hide

        });
    });
});
//select one remove from other
$("#purchasedfrom").change(function(e){
    let value=$(this).val();
    if(value==''){
        $.post('server.php',{
            cmd:'get_all_select'
        },function (data) {
            $('#passiveseller').empty();
            $('#passiveseller').append(data);

        });
    }
    else{
    $.post('server.php',{
        cmd:'get_select',value:value
    },function (data) {
        $('#passiveseller').empty();
        $('#passiveseller').append(data);

    });
        }
});








</script>

	<?php include '../footer.html';?>

<!--</body>-->
<!--</html>-->