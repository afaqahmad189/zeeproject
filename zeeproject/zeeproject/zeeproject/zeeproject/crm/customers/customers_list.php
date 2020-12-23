<!DOCTYPE html>
<html>
<head>
	<title>Customers Lists</title>
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

	<?php include '../../header.php';?>

<div style="padding: 15px">
    <div class="row" id="toast_cat" ></div>
    <?php
    if ($_SESSION['customer_update']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['customer_update'] . '</label>
            </div>
        </div>';
        unset($_SESSION['customer_update']);
    }
    if ($_SESSION['customer_notupdate']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['customer_notupdate'] . '</label>
            </div>
        </div>';
        unset($_SESSION['customer_notupdate']);
    }
    ?>

	<a href="/zeeproject/crm/customers/insert_customer.php"><button class="btn formbtn">Add New Customer</button></a><br><br>

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
	<table style="padding: 50px; margin-top: 5px" class="table text-center" id="datatable">
        <thead>
		<tr class="headrow" style="margin-bottom: 5px">
			<th>ID</th>
			<th>Customer Type</th>
			<th>Customer Shop Name</th>
			<th>Khata</th>
			<th>Action</th>
		</tr>
        </thead>
        <tbody>
		<tr>
		<?php
            $sql="select * from customer ";
            $data=mysqli_query($conn,$sql);
            if(mysqli_num_rows($data)>0){
                $count=1;
                while($row=mysqli_fetch_assoc($data)){
                    $customer_id=$row['id'];
                    $shopname=$row['cus_shop_name'];
                    $name=$row['cus_name'];
                    echo'<tr><td>'.$count.'</td>';
                  
                    echo'<td>'.$shopname.'</td>';
					echo '<td>'.$name.'</td>';
					echo '<td><button class="btn btn-primary">View Pics</button></td>';
					
                  echo '<td>
               	<a href="/zeeproject/crm/customers/customer_view.php?customer_id='.$customer_id.'">
						<button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button>

						<a href="/zeeproject/crm/customers/edit_customer.php?customer_id='.$customer_id.'"><button class="btn btn-warning formbtn2"><i class="far fa-edit"></i></button></a>
						

						<button class="btn btn-danger formbtn2" onclick="deleterow('.$customer_id.')"><i class="fas fa-trash-alt"></i></button>';
                    $count++;
                }
            }
            ?>
		</tr>
        </tbody>
	</table>

	<br>

<nav style="padding: 15px" aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">1</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
  </ul>
</nav>




</div>


	<?php include '../../footer.html';?>


</body>
</html>

<script>
    //delete product
    function deleterow(getid) {
        var getid=getid;
        if(confirm("Are You Sure to want Delete customer?")){
            $.ajax({
                url: "server.php",
                type: "post",
                data: {
                    "id": getid, "cmd": "delete_customer"
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
</script>