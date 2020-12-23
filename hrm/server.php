<?php
session_start();
include('../connection.php');
$cmd=$_REQUEST['cmd'];
switch ($cmd){
    case 'add_employee':{
    
		 $Employeename=$_REQUEST['Employeename'];
         $Employeenum=$_REQUEST['Employeenum'];
         $Employeecnic=$_REQUEST['Employeecnic'];
         $Employeeage=$_REQUEST['Employeeage'];
         $Employeestart=$_REQUEST['Employeestart'];
         $Employeesalary=$_REQUEST['Employeesalary'];
         $Employeeaddress=$_REQUEST['Employeeaddress'];
         $Employeeref=$_REQUEST['Employeeref'];

		$target_dir = "images/";
		$target_file_img1 = $target_dir . basename($_FILES["Employeepic"]["name"]);
		$uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["Employeepic"]["tmp_name"], $target_file_img1);


		$get="SELECT * FROM employee where name='$Employeename'";
		$getrow=mysqli_query($conn,$get);
		if(mysqli_num_rows($getrow)>0){
			$_SESSION['employee_already_created']="employee already created";
			header('location:insert_employee.php');
		}
		 else{
          $sql="insert into employee (name,number,cnic,age,started_date,salary, image , address,ref_number) 
                values('$Employeename','$Employeenum','$Employeecnic','$Employeeage','$Employeestart','$Employeesalary','$target_file_img1','$Employeeaddress','$Employeeref')";
       $query=mysqli_query($conn,$sql);
       if(!$query){
           $_SESSION['Employee_notinsert']="Employee not Created";
           header('location:insert_employee.php');
       }
       else{
           $_SESSION['Employee_insert']="Employee Created";
           header('location:insert_employee.php');
       }

	   }
    }
        break;

case 'update_employee': {
    $employee_id=$_REQUEST['emp_id'];
	$Employeename=$_REQUEST['Employeename'];
	$Employeenum=$_REQUEST['Employeenum'];
	$Employeecnic=$_REQUEST['Employeecnic'];
	$Employeeage=$_REQUEST['Employeeage'];
	$Employeestart=$_REQUEST['Employeestart'];
	$Employeesalary=$_REQUEST['Employeesalary'];
    $Employeeaddress=$_REQUEST['Employeeaddress'];
    $Employeeref=$_REQUEST['Employeeref'];
	$target_dir = "images/";
	$target_file_img1 = $target_dir . basename($_FILES["Employeepic"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["Employeepic"]["tmp_name"], $target_file_img1);
	if($target_file_img1=='images/'){
        $sql="UPDATE employee SET name ='$Employeename',number='$Employeenum',cnic='$Employeecnic',age='$Employeeage',
	started_date='$Employeestart',salary='$Employeesalary',address='$Employeeaddress',ref_number='$Employeeref'
											  WHERE id='$employee_id'";
        if(mysqli_query($conn,$sql)){
            $_SESSION['employee_update']="Employee Updated";
            header('location:employee_list.php');
        }
        else{
            $_SESSION['employee_notupdate']="Employee Not Updated";
            header('location:employee_list.php');
        }
    }
	else{
        $sql="UPDATE employee SET name ='$Employeename',number='$Employeenum',cnic='$Employeecnic',age='$Employeeage',
	started_date='$Employeestart',salary='$Employeesalary',image='$target_file_img1',address='$Employeeaddress',ref_number='$Employeeref'
											  WHERE id='$employee_id'";
        if(mysqli_query($conn,$sql) ){
            $_SESSION['employee_update']="Employee Updated";
            header('location:employee_list.php');
        }
        else{
            $_SESSION['employee_notupdate']="Employee Not Updated";
            header('location:employee_list.php');
        }
    }

}
break;

case'get_employee':{
	$sql="select * from employee";
	$row=mysqli_query($conn,$sql) or die("SomeThing Went Wrong.");
	if(mysqli_num_rows($row)>0){
		while ($data=mysqli_fetch_assoc($row)){
			$employeeid=$data['id'];
			$employeename=$data['name'];
			echo '<option value="'.$employeeid.'">'.$employeename.'</option>';

		}


	}
}
break;

case'delete_product':{
	$employeeid=$_REQUEST['id'];
	$sql="delete from employee where id=$employeeid";
	if(mysqli_query($conn,$sql)){
//            $_SESSION['p_delete']="Product Deleted";
		echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Product Deleted</label></div>';

	}
	else{
//            $_SESSION['p_notdelete']="Product not Deleted";
		echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Product not Deleted</label></div>';

	}
}
break;


case 'employee_edit':{
    $Employeeid=$_REQUEST['id'];
	$Employeename=$_REQUEST['name'];
	$Employeenum=$_REQUEST['number'];
	$Employeecnic=$_REQUEST['cnic'];
	$Employeeage=$_REQUEST['age'];
	$Employeestart=$_REQUEST['started_date'];
	$Employeesalary=$_REQUEST['salary'];
	$target_dir = "images/";
	$target_file_img1 = $target_dir . basename($_FILES["Employeepic"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["Employeepic"]["tmp_name"], $target_file_img1);
	$Employeeaddress=$_REQUEST['Employeeaddress'];
	$Employeeref=$_REQUEST['ref_number'];

	$sql="UPDATE add_employee SET name ='$Employeename',Employeenum='$Employeenum',Employeecnic='$Employeecnic',Employeeage='$Employeeage',
                Employeestart='$Employeestart',Employeesalary='$Employeesalary',Employeeaddress='$Employeeaddress',Employeeref='$Employeeref',Employeepic='$target_file_img1'
                                                          WHERE id='$employeeid'";
 if(mysqli_query($conn,$sql)){
	$_SESSION['employee_update']="Employee Updated";
	header('location:employee_edit.php');
}
else{
	$_SESSION['product_notupdate']="Product Not Updated";
	header('location:employee_edit.php');
}
}
break;

 default:{
        echo"ERROR";
    }
    break;
        }
?>