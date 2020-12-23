<!DOCTYPE html>
<html>




<head>
	<title>Edit Product</title>
</head>
<body>

	<?php include '../header.php';
	 $p_id=$_REQUEST['product_id'];
    $sql="select * from category c,add_product p 
                where p.id='$p_id' and c.id=p.cat_id ";
    //and pi.product_id=p.id and pi3d.product_id=p.id
    $data=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($data)>0){
        $row=mysqli_fetch_assoc($data);
//      $category_id=$row['c.id'];
        $p_id=$row['id'];
        $cat_id=$row['cat_id'];
        $p_name=$row['name'];
        $barcode=$row['barcode'];
        $affect=$row['affect'];
        $c_name=$row['cat_name'];
        $unit=$row['unit'];
        $p_qty=$row['qty'];
        $alert_stock=$row['alert_stock'];
        $product_cost=$row['product_cost'];
        $p_price=$row['sale_price'];
        $description=$row['description'];
        $product_place=$row['product_place'];
//        $warehouse_num=$row['warehouse_num'];
        $main_pic=$row['main_pic'];
        $pur_place=$row['pur_place'];
    }
	?>


	<div class="container">


		<h3 class="pageheading">Edit Product </h3>
		<br>

		<form method="post" action="server.php" enctype="multipart/form-data">

			<div class="row"> <!--- form row 1 ---> 
			
				<div class="col">
				
					<label for="productname">Product Name</label>
					<input value="<?php echo $p_name; ?>" type="text" id="productname" class="form-control" name="productname" placeholder="Enter Product Name" ><br>

					<label for="invetoryaffect">Invetory Affect</label>

					<select id="invetoryaffect"name="invetoryaffect" class="form-control">

                        <?php
                        if($affect==1){
                            echo'
                            <option selected value="'.$affect.'">Yes</option>
                            <option value="0">No</option>';
                        }
                        else{
                            echo'
                            <option selected value="'.$affect.'">No</option>
                            <option value="1">Yes</option>';
                        }
                        ?>
        			</select><br>



					

					<label for="unit">Unit</label>
<!--					<input value="--><?php //echo $unit?><!--" type="text" id="unit" class="form-control" name="" placeholder="Enter Unit"><br>-->
                    <select id="unit" class="form-control" name="unit" required>
                        <option selected value="<?php echo $unit?>"><?php echo $unit?></option>
                        <option value="Piece">Piece</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Pound">Pound</option>
                        <option value="grams">grams</option>
                        <option value="mili gram">mili gram</option>
                        <option value="ounce">ounce</option>
                        <option value="ozt">ozt</option>
                        <option value="mili liter">mili liter</option>
                        <option value="liter">liter</option>
                        <option value="jar">jar</option>
                        <option value="Box">Box</option>
                    </select>
					<label for="productcost" style="margin-top: 24px">Product Cost</label>
					<input value="<?php echo $product_cost?>" type="text" id="productcost" class="form-control" name="productcost" placeholder="Enter Product Cost"><br>



				</div><!--- ending first col for this form --->



				<div class="col">
				
					<label for="barcode">Barcode</label>
					<input value="<?php echo $barcode?>" type="text" id="barcode" class="form-control" name="barcode" placeholder="Enter Barcode"><br>


					<div class="row">

						<div style="padding: 0" class="col col-md-12 selectcatcol">

					<label for="selectcat">Select Category</label>
					<select id="selectcat" class="form-control" name="catselect" >
<!--        			<option >Choose...</option>-->
        			<option value="<?php echo $cat_id?>" selected><?php echo $c_name?></option>
                        <?php
                        $cat="select * from category where id!='$cat_id'" ;
                        $row_cat=mysqli_query($conn,$cat) or die(mysqli_error($conn));
                        if(mysqli_num_rows($row_cat)>0){
                            while ($data_cat=mysqli_fetch_assoc($row_cat)){
                                $cat_id=$data_cat['id'];
                                $catname=$data_cat['cat_name'];
                                echo '<option value="'.$cat_id.'">'.$catname.'</option>';

                            }
                        }
                        else{
                            echo"error";
                        }

                        ?>

      				</select>
                            <br>

      					 </div>



      				</div>


      				<div class="row">

      					<div style="padding: 0" class="col-md-6 qtycol">

      					<label for="quantity">Quantity</label>
						<input value="<?php echo $p_qty?>" type="number" id="quantity" class="form-control" name="quantity" placeholder="Enter Quantity"><br>

						</div>

						<div style="padding: 0; padding-left: 15px " class="col-md-6 alertstockcoledit">

      					<label for="alertstock">Alert Stock</label>
						<input value="<?php echo $alert_stock?>" type="number" id="alertstock" class="form-control" name="alertstock" placeholder="Enter Low Stock Alert"><br>

						</div>
      					


      				</div>

					



					<label for="saleprice">Sale Price</label>
					<input value="<?php echo $p_price?>" type="text" id="saleprice" class="form-control" name="saleprice"  placeholder="Enter Discount Price"><br>



				</div>


			</div>	<!--- ending form row 1 ---> 


			<div class="row"><!--- form row 2 ---> 
				
				<div class="col">
					
					<label for="description">Description</label>
					<textarea placeholder="Enter Product Description" rows="8" class="form-control" id="description" name="description"><?php echo $description?></textarea><br>


				</div>



			</div><!--- ending form row 2 ---> 

			<div class="row"> <!--- form row 3 --->
				
				<div class="col">
					
					<label for="productplace">Product Place/Rack</label>
					<input value="<?php echo $product_place?>" type="text" id="productplace" class="form-control" name="rack" placeholder="Enter Product Place"><br>

<!--				</div>-->
<!---->
<!---->
<!--				<div class="col">-->
<!--                    <div class="col">-->
<!---->
<!--                        <label for="productplace">Warehouse Number</label>-->
<!--                        <input type="text" id="productplace" class="form-control" name="warehoue_num" placeholder="Enter Product Place" value="--><?php //echo $warehouse_num?><!--"><br>-->
<!---->
<!--                    </div>-->
<!--				</div>-->
			</div>
            <!--- ending form row 3 --->
            <div class="row"> <!--- form row 3 --->

                <div class="col">
                    <label for="productplace">Product Place</label>
                    <input value="<?php echo $pur_place?>" type="text" id="productplace" class="form-control" name="productplace" placeholder="Enter Product Place"><br>
                </div>
            </div>
            <!--- ending form row 3 --->

			<div class="row">
				
				<div class="col">
					
					<label for="mainpic">Product Main Picture</label>

					<input style="height: 45px" type="file" class="form-control" name="mainpic" id="mainpic" value="<?php echo $main_pic?>"><br>


					<label for="otherpics">Product Other Pictures</label>
					<input style="height: 45px" type="file" class="form-control" name="otherpics[]" id="otherpics" multiple><br>


					<label for="3dpics">Product 3D Pictures</label>
					<input style="height: 45px" type="file" class="form-control" name="thirdpics[]" id="thirdpics" multiple><br>

				</div>




			</div>


			<br>
			<center>

                <input type="hidden" name="cmd" value="update_product">
                <input type="hidden" name="product_id" value="<?php echo $p_id;?>">
				<button type="submit" class="btn formbtn"> Update </button>

			</center>	






		</form>	


		





	</div>






<script>

$(document).ready(function(){
 $('#quantity').change(function () {
 //var job =  $('#quantity').val();
 $(".qtycol").removeClass("col");
 $(".qtycol").addClass("col-md-6");
 $('.alertstockcol').show();
})
})




</script>


<script>

$(document).ready(function(){
 $('#selectcat').change(function () {
 var job =  $('#selectcat').val();
 $(".selectcatcol").removeClass("col-md-12");
 $(".selectcatcol").addClass("col-md-6");
 $('.subcol').show();
})
})




</script>




	<?php include '../footer.html';?>

</body>
</html>