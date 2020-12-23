<!DOCTYPE html>
<html>
<head>
	<title>Add To do</title>
</head>
<body>

	<?php include '../header.php';?>



<div class="rowmargin">
    <?php
        if($_SESSION['task_already_created']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['task_already_created'].'</label>
            </div>
        </div>';
            unset($_SESSION['task_already_created']);
        }

    if($_SESSION['task_notinsert']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['task_notinsert'].'</label>
            </div>
        </div>';
        unset($_SESSION['task_notinsert']);
    }
    if($_SESSION['task_insert']){
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['task_insert'].'</label>
            </div>
        </div>';
        unset($_SESSION['task_insert']);
    }?>
	

	<h3 style="width: 50%; margin: 0 auto; color: white" class="headingwhite; ">Add New To Do Task </h3><br>

	<form style="width: 50%; margin: 0 auto" action="server.php" method="post">
		

		<label for="taskname">Task Name</label>
		<input  type="text" id="taskname" class="form-control" name="task_name" placeholder="Enter Task Name" required><br>

		<label for="taskdate">Task Date and Time</label>
		<input  type="datetime-local" id="taskdate" class="form-control" name="task_date" placeholder="Enter task date" required><br>

<!--		<label for="tasktime">Task Time</label>-->
<!--		<input  type="date" id="tasktime" class="form-control" name="" placeholder="Enter Task Time"><br>-->

		<label for="taskdes">Task Description</label>
		<textarea id="taskdes" class="form-control" placeholder="Enter Task Description" name="description"></textarea><br><br>



		<center>
            <input type="hidden" name="cmd" value="add_todo">
				<button type="submit" class="btn formbtn"> Insert </button>

			</center>	




	</form>



</div>









	<?php include '../footer.html';?>

</body>
</html>