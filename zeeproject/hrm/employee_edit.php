<!DOCTYPE html>
<html>
<head>

	<style>
		
		


		.repeaterbtn{

	height: 40px;
    margin-top: 30px;
				
				}		

		
	</style>


	<title>Update Employer</title>
</head>
<body>

	<?php include '../header.php';
	 $Employeeid=$_REQUEST['emp_id'];
	 $sql="select * from employee where id='$Employeeid'";
	 $data=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	 if(mysqli_num_rows($data)>0){
		 $row=mysqli_fetch_assoc($data);
	   echo 
		 $Employeeid=$row['id'];
		 $Employeename=$row['name'];
		 $Employeenum=$row['number'];
		 $Employeecnic=$row['cnic'];
		 $Employeeage=$row['age'];
		 $Employeestart=$row['started_date'];
		 $Employeesalary=$row['salary'];
		 $Employeepic=$row['image'];
		 $Employeeaddress=$row['address'];
		 $Employeeref=$row['ref_number'];
	 }
	 else{
		 echo "no data";
	 }
	
	
	
	?>


<div class="container">


		
		<h3 class="pageheading">Update Employee </h3>
		<br>


		<form action="server.php" method="post" enctype="multipart/form-data">

			<div class="row">
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empname">Employee Name</label>
				<input id="empname" type="text" value="<?php echo $Employeename ?>" class="form-control" placeholder="Enter Employee Name" name="Employeename">
				

				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					
				
				<label for="empphn">Employee Number</label>
				<input id="empphn" type="text" value="<?php  echo $Employeenum?> "class="form-control" placeholder="Enter Employee Contact Number" name="Employeenum">
				

				</div>




			</div><!--- row 1 ending --->

			<br><br>


			<div class="row">
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empcnic">Employee CNIC</label>
				<input id="empname" type="text" value="<?php  echo $Employeecnic?>" class="form-control" placeholder="Enter Employee CNIC" name="Employeecnic">
				

				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					
				
				<label for="empage">Employee Age</label>
				<input id="empphn" type="text" value="<?php  echo $Employeeage?>" class="form-control" placeholder="Enter Employee Age" name="Employeeage">
				

				</div>




			</div><!--- row 2 ending --->




			<br><br>

			<div class="row">
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empstrdate">Started Date</label>
				<input  id="empstrdate" type="date" value="<?php  echo $Employeestart?>" class="form-control" placeholder="Enter Job Started Date" name="Employeestart">
				

				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					

				<label for="empsalary">Employee Salary</label>
				<input id="empsalary" type="text" value="<?php  echo $Employeesalary?>" class="form-control" placeholder="Enter Employee Salary" name="Employeesalary">
				
				
				

				</div>




			</div><!--- row 3 ending --->

			<br><br>

			<div class="row">
				
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empimg">Employee Picture</label>
				<input id="empimg" type="file" value="<?php  echo $Employeepic?>" class="form-control" placeholder="Enter Employee Contact Number" name="Employeepic">
				

				</div>	


				
				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					

				<label for="empaddress">Employee Address</label>
				<input style="height: 45px" id="empaddress" type="text" class="form-control" placeholder="Enter Employee Address" name="Employeeaddress" value="<?php echo $Employeeaddress?>">
				
				
				

				</div>

				<br><br><br><br><br>

				<div class="row">
					
				<label for="emp">Reference Number</label>
				<input style="height: 45px" id="emprefnum" value="<?php  echo $Employeeref?>" type="text" class="form-control" placeholder="Enter Employee Ref Number" name="Employeeref">


				</div>
				
				

				


				




			</div><!--- row 4 ending --->

			<br><br>

			
			
			

			<br><br>
			<center>
                <input type="hidden" name="cmd" value="update_employee">
                <input type="hidden" name="emp_id" value="<?php echo $Employeeid?>">
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




	<?php include '../footer.html';?>

</body>
</html>