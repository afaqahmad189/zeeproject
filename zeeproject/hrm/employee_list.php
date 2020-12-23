<!DOCTYPE html>
<html>
<head>
	<title>Employers List</title>
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
    <?php
    if($_SESSION['employee_update']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['employee_update'].'</label>
            </div>
        </div>';
        unset($_SESSION['employee_update']);
    }
    if($_SESSION['employee_notupdate']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['employee_notupdate'].'</label>
            </div>
        </div>';
        unset($_SESSION['employee_notupdate']);
    }
    ?>

	<a href="/zeeproject/hrm/insert_employee.php"><button class="btn formbtn">Add New Employer</button></a><br><br>





	

	<table style="padding: 50px; margin-top: 5px" class="table text-center" id="datatable">
        <thead>
		<tr class="headrow" style="margin-bottom: 5px">

			<th>ID</th>
			<th>Employer Name</th>
			<th>Age</th>
			<th>Phone Number</th>
			<th>CNIC/B-Form</th>
			<th>Address</th>
			<th>Salary</th>
			<th>Join Date</th>
			<th>Action</th>
			


		</tr>
        </thead>


		<?php
        $sql="select * from employee";
        $data=mysqli_query($conn,$sql);
        if(mysqli_num_rows($data)>0){
            $count=1;
        while($row=mysqli_fetch_assoc($data)){
            $employeeid=$row['id'];
            $employeename=$row['name'];
			$employeenum=$row['number'];
			$employeecnic=$row['cnic'];
			$employeeage=$row['age'];
			$empaddress=$row['address'];
			$employeestart=$row['started_date'];
			$employeesalary=$row['salary'];
			$employeeref=$row['ref_num'];
            echo'<tr><td>'.$count.'</td>';
            echo'<td>'.$employeename.'</td>';
            echo'<td>'.$employeeage.'</td>';
            echo'<td>'.$employeenum.'</td>';
            echo'<td>'.$employeecnic.'</td>';
            echo'<td>'.$empaddress.'</td>';
            echo'<td>'.$employeesalary.'</td>';
			echo'<td>'.$employeestart.'</td>';
            echo'<td>
                  
                <a href="/zeeproject/hrm/employee_view.php?emp_id='.$employeeid.'"><button class="btn btn-primary formbtn2"><i class="fas fa-eye"></i></button></a>';
            echo'<a href="/zeeproject/hrm/employee_edit.php?emp_id='.$employeeid.'"><button class="btn btn-warning formbtn2"><i class="far fa-edit"></i></button></a>';
			echo'<button class="btn btn-danger formbtn2" onclick="deleterow('.$employeeid.')"><i class="fas fa-trash-alt"></i></button></td></tr>';
            $count++;
        }
        }
        ?>




	</table>





</div>


	<?php include '../footer.html';?>


</body>
</html>

<script>
    //delete employee
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
</script>