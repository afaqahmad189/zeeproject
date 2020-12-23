<!DOCTYPE html>
<html>
<head>

	<style>
		
		


		.repeaterbtn{

	height: 40px;
    margin-top: 30px;
				
				}		

		
	</style>


	<title>Insert Employer</title>
</head>
<body>

	<?php include '../header.php';?>


<div class="container">

<div class="row" id="toast_cat" ></div>
        <?php
        if($_SESSION['Employee_insert']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['Employee_insert'].'</label>
            </div>
        </div>';
            unset($_SESSION['Employee_insert']);
        }
		if($_SESSION['employee_already_created']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['employee_already_created'].'</label>
            </div>
        </div>';
            unset($_SESSION['employee_already_created']);
        }
        ?>

		
		<h3 class="pageheading">Add Employee </h3>
		<br>


		<form action="server.php" method="post" enctype="multipart/form-data">

			<div class="row">
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empname">Employee Name</label>
				<input id="empname" type="text" class="form-control" placeholder="Enter Employee Name" name="Employeename">
				

				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					
				
				<label for="empphn">Employee Number</label>
				<input id="empphn" type="text" class="form-control" placeholder="Enter Employee Contact Number" name="Employeenum">
				

				</div>




			</div><!--- row 1 ending --->

			<br><br>


			<div class="row">
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empcnic">Employee CNIC</label>
				<input id="empname" type="text" class="form-control" placeholder="Enter Employee CNIC" name="Employeecnic">
				

				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					
				
				<label for="empage">Employee Age</label>
				<input id="empphn" type="text" class="form-control" placeholder="Enter Employee Age" name="Employeeage">
				

				</div>




			</div><!--- row 2 ending --->




			<br><br>

			<div class="row">
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empstrdate">Started Date</label>
				<input  id="empstrdate" type="date" class="form-control" placeholder="Enter Job Started Date" name="Employeestart">
				

				</div>


				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					

				<label for="empsalary">Employee Salary</label>
				<input id="empsalary" type="text" class="form-control" placeholder="Enter Employee Salary" name="Employeesalary">	
				
				
				

				</div>




			</div><!--- row 3 ending --->

			<br><br>

			<div class="row">
				
				
				<div style="padding: 0" class="col-md-6">
					
				
				<label for="empimg">Employee Picture</label>
				<input id="empimg" type="file" class="form-control" placeholder="Enter Employee Contact Number" name="Employeepic">
				

				</div>	


				
				<div style="padding: 0; padding-left: 15px" class="col-md-6">
					

				<label for="empaddress">Employee Address</label>
				<input style="height: 45px" id="empaddress" type="text" class="form-control" placeholder="Enter Employee Address" name="Employeeaddress">	
				
				
				

				</div>

				<br><br><br><br><br>

				<div class="row">
					
				<label for="emp">Reference Number</label>
				<input style="height: 45px" id="emprefnum" type="text" class="form-control" placeholder="Enter Employee Address" name="Employeeref">	


				</div>
				
				

				


				




			</div><!--- row 4 ending --->

			<br><br>

			
			
			

			<br><br>
			<center>

				<input type="hidden" name="cmd" value="add_employee">
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




	<?php include '../footer.html';?>

</body>
</html>