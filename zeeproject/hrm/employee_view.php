<!DOCTYPE html>
<html>
<head>

<style>
	
	.table{

		background-color: white;
	}

	th{
		width: 150px;
	}


</style>


	<title>Employee Details</title>
</head>
<body>



<?php 
include '../header.php';
$employeeid = $_REQUEST['emp_id'];
$sql = "select * from employee where employee.id=$employeeid";
$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
if (mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_assoc($data);
//    $employeeid = $row['id'];
    $employeename = $row['name'];
    $employeenum = $row['number'];
    $employeecnic = $row['cnic'];
    $employeeage = $row['age'];
    $employeestart = $row['started_date'];
    $employeesalary = $row['salary'];
    $employeeref = $row['ref_number'];
    $empadress=$row['address'];
    $empimg=$row['image'];
    
} else {
    echo "no data";
}

?>



<div class="rowmargin">
	


	<div class="row"> 

		<div style="padding: 10px; max-width: 30%" class="col card ">
			
			
			<center>

				<h1 style="margin-bottom: 20px"> <?php echo $employeename;?></h1>
                <?php
                if($empimg=='images/'){
                    echo'<img align="center" width="180px" src="https://cdn1.iconfinder.com/data/icons/avatar-97/32/avatar-02-512.png"><br></center><br>';
                }
                else{
                    echo'<img align="center" width="180px" height="150px" src="'.$empimg.'"><br></center><br>';
                }
                ?>


			
			<br>

			<table class="table text-center">
				
				<tr>
					
					<td><b>Working Since</b></td>
					<td> <?php echo $employeestart;?></td>

				</tr>

				<tr>
					
					<td><b>Contact Number</b></td>
					<td> <?php echo $employeenum;?></td>

				</tr>

				<tr>
					
					<td><b>Age</b></td>
					<td> <?php echo $employeeage;?></td>

				</tr>



			</table>

			

		<!---	<div  class="row"> 1st social icons row

				
				<div class="col-md-3">
				<center>	
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/facebook.png">
</a></center>

				</div>

				<div class="col-md-3">

			<center>		
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/twitter.png">
			
			</a></center>

				</div>


				<div class="col-md-3">

			<center>		
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/tiktok.png">
			
			</a></center>

				</div>



				<div class="col-md-3">

			<center>	
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/url.png">
			
			</a></center>

				</div>


		</div>---><!--- 1st social icons row ending -->


		


		<!---<div  class="row"> second social icons row

				
				<div class="col-md-3">
				<center>	
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/youtube.png">
</a></center>

				</div>

				<div class="col-md-3">

			<center>		
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/instagram.png">
			
			</a></center>

				</div>


				<div class="col-md-3">

			<center>		
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/email.png">
			
			</a></center>

				</div>



				<div class="col-md-3">

			<center>	
			<a style="color: white; " href="#" ><img width="85px" src="/zeeproject/media/images/shopping-bag.png">
			
			</a></center>

				</div>


		</div>--> <!--- second social icons row ending -->

			<br>
		
		<a style=" font-size: 24px; margin-bottom: 5px" class="btn btn-primary viewpagebtn" href="employee_edit.php?emp_id=<?php echo $employeeid;?>">Edit Employer</a>
		

			

			

		</div>


		<div style="padding: 20px; margin-left: 15px" class="col card ">
			
			<center><h4>Employer Basic Info</h4></center>
			<table class="table text-center">
				

				<tr >
					<th >Home Address</th>
					<th>Salary</th>
					
					
				</tr>

				<tr>
					<td style="width:18px"><?php echo $empadress?></td>
					<td><?php echo $employeesalary;?></td>
					
					
				</tr>



				

			</table>



			<br>


			<table class="table text-center">
				

				<tr>
					<th>Ref Number</th>
					<th>CNIC</th>
					
					
				</tr>

				<tr>
					<td><?php echo $employeeref;?></td>
					<td><?php echo $employeecnic;?></td>
					
					
				</tr>

				

				

			</table>




			

			

			


		</div>








	</div><br><!--- row 1 ending --->



	

<!---
		<div style="padding: 10px" class="card ">

			<h5>Description</h5>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lorem odio, pulvinar eu consequat eu, sollicitudin eget nibh. Pellentesque consectetur arcu dolor, vitae blandit est blandit elementum. Fusce vehicula in libero in euismod. In hac habitasse platea dictumst. Nullam feugiat convallis ex ac interdum. Cras ultricies consequat massa, vitae egestas eros commodo quis. Nullam at efficitur est, vel vulputate dui. Sed eleifend egestas tortor vitae laoreet. Curabitur ac ultricies leo. Suspendisse ut augue sit amet velit blandit hendrerit. Nullam a urna elit. Pellentesque tincidunt, ex sed egestas dapibus, purus mauris pharetra arcu, dictum suscipit mi odio at mi. Etiam tristique, augue sed pharetra feugiat, mauris ante tincidunt ex, dictum dapibus enim dolor id nisl. Praesent sit amet bibendum dolor. Ut a semper neque. Aenean vitae eros nisl.

					</p>


		</div>  --->












</div><!--- ending row margin --->








<?php include '../footer.html';?>

</body>
</html>