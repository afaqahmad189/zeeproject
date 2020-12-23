<!DOCTYPE html>
<html>
<head>
	<title>Edit To do</title>
</head>
<?php include '../header.php';
$t_id=$_REQUEST['task_id'];
$sql="select * from add_todo where id=$t_id";
$data=mysqli_query($conn,$sql) or die(mysqli_error($conn));
if(mysqli_num_rows($data)>0){
    $row=mysqli_fetch_assoc($data);
    $t_id=$row['id'];
    $t_name=$row['task_name'];
    $t_date=$row['task_date'];
    $t_description=$row['task_description'];
}
?>
<body>




<div class="rowmargin">
	

	<h3 class="headingwhite">Edit To Do Task </h3><br>

	<form action="server.php" method="post">
		

		<label for="taskname">Task Name</label>
		<input  type="text" id="taskname" class="form-control" name="task_name" placeholder="Enter Task Name" value="<?php echo $t_name?>" required><br>

		<label for="taskdate">Task Date and Time</label>
		<input  type="datetime-local" id="taskdate" class="form-control" name="task_date" placeholder="Enter task date"  value="<?php echo $t_date?>" required><br>

<!--		<label for="tasktime">Task Time</label>-->
<!--		<input  type="date" id="tasktime" class="form-control" name="" placeholder="Enter Task Time"><br>-->

		<label for="taskdes">Task Description</label>
		<textarea id="taskdes" class="form-control"  placeholder="Enter Task Description" name="description"  ><?php echo $t_description?></textarea><br><br>



		<center>
            <input type="hidden" name="cmd" value="edit_task">
            <input type="hidden" name="id" value="<?php echo $t_id?>">
            <button type="submit" class="btn formbtn"> Update </button>

			</center>	




	</form>



</div>









	<?php include '../footer.html';?>

</body>
</html>