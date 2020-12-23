

<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>
</head>
<style>

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



<body>

	<?php include '../header.php';?>


	

	

<div style="padding: 15px">
    <div class="row" id="toast_cat" ></div>
    <?php
    if($_SESSION['product_update']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['product_update'].'</label>
            </div>
        </div>';
        unset($_SESSION['product_update']);
    }
    if( $_SESSION['product_notupdate']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'. $_SESSION['product_notupdate'].'</label>
            </div>
        </div>';
        unset( $_SESSION['product_notupdate']);
    }
    ?>
	<a href="/zeeproject/inventory/add_product.php"><button class="btn formbtn">Add New Product</button></a><br><br>
	<table style="padding: 50px; margin-top: 5px" class="table text-center" id="datatable">
        <thead>
		<tr class="headrow" style="margin-bottom: 5px">
			<th>ID</th>
			<th>Item Name</th>
			<th>Category</th>
			<th>Picture</th>
			<th>Remaining</th>
			<th>Product Price</th>
			<th>Action</th>
		</tr>
        </thead>
        <tbody>
        <?php
        $sql="select * from category c,add_product p where p.cat_id=c.id";
        $data=mysqli_query($conn,$sql);
        if(mysqli_num_rows($data)>0){
            $count=1;
        while($row=mysqli_fetch_assoc($data)){
            $p_id=$row['id'];
            $p_name=$row['name'];
            $c_name=$row['cat_name'];
            $p_qty=$row['qty'];
            $r_qty=$row['remiaing_qty'];
            $p_price=$row['sale_price'];
            $p_image=$row['main_pic'];
            echo'<tr><td>'.$count.'</td>';
            echo'<td>'.$p_name.'</td>';
            echo'<td>'.$c_name.'</td>';
            echo'<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="getimage('.$p_id.')">View Pics</button></td>';
            echo'<td>'.$r_qty.'</td>';
            echo'<td>'.$p_price.'</td>';
            echo'<td>
                  
                <a href="/zeeproject/Inventory/view_product.php?product_id='.$p_id.'"><button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button></a>';
            echo'<a href="/zeeproject/Inventory/edit_product.php?product_id='.$p_id.'"><button class="btn btn-warning formbtn2"><i class="far fa-edit"></i></button></a>';
			echo'<button class="btn btn-danger formbtn2" onclick="deleterow('.$p_id.')"><i class="fas fa-trash-alt"></i></button></td></tr>';
            $count++;
        }
        }
        ?>
        </tbody>
    </table>

<!--	<br>-->
<!---->
<!--<nav style="padding: 15px" aria-label="...">-->
<!--  <ul class="pagination pagination-lg">-->
<!--    <li class="page-item disabled">-->
<!--      <a class="page-link" href="#" tabindex="-1">1</a>-->
<!--    </li>-->
<!--    <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--    <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--  </ul>-->
<!--</nav>-->



    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
<!--                    <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                    <h4 class="modal-title">Modal Header</h4>-->
                </div>
                <div class="modal-body" id="showimage">
<!--                    <img src="--><?php //echo'products/affiliate_marketing_amazon.jpg';?><!--" width="100%" height="100%" >-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of model-->
</div>


	<?php include '../footer.html';?>

</body>
</html>

<script>
    //delete product
    function deleterow(getid) {
        var getid=getid;
        if(confirm("Are You Sure to want Delete Product?")){
            $.ajax({
                url: "server.php",
                type: "post",
                data: {
                    "id": getid, "cmd": "delete_product"
                },
                success: function (data) {
                    location.reload();
                    $('#toast_cat').show();
                    $('#toast_cat').append(data);
                    //toast hide
                    setTimeout(function() {
                        $('.toast').fadeOut('fast');
                    }, 1000);
                }
            });
        }
    }

    //get product product
    function getimage(getid) {
        var getid=getid;
            $.ajax({
                url: "server.php",
                type: "post",
                data: {
                    "id": getid, "cmd": "get_image"
                },
                success: function (data) {
                    $('#showimage').empty();
                    $('#showimage').append(data);
                }
            });

    }
</script>