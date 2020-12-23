<!DOCTYPE html>
<html>
<head>
	<title>All Tasks</title>
</head>
<body>

	<?php include '../header.php';?>

	<div class="rowmargin">
        <div class="row" id="toast_cat" ></div>
        <?php
        if($_SESSION['task_update']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['task_update'].'</label>
            </div>
        </div>';
            unset($_SESSION['task_update']);
        }

        if($_SESSION['task_notupdate']){
            echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>'.$_SESSION['task_notupdate'].'</label>
            </div>
        </div>';
            unset($_SESSION['task_notupdate']);
        }
       ?>

		<div class="row">

	

	<div style="padding: 10px;  " class="col align-middle">

	
	<button style="width:99%; margin: 10px;  " class="btn btn-primary" data-toggle="modal" data-target="#filterit">Filter By Date</button>



	<!-- Modal -->
<div class="modal fade" id="filterit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Date To Filter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

      	<div class="row">
      		
      		<div class="col-md-6">  


      			<label style="color: black!important" for="startdate">Starting Date</label>
				<input id="startdate" type="date" class="form-control" placeholder="Enter Date" name=""><br>

      		</div>


      		<div class="col-md-6">  


      			<label style="color: black!important" for="enddate">Ending Date</label>
				<input id="enddate" type="date" class="form-control" placeholder="Enter Date" name=""><br>

      		</div>


      	</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Filter It</button>
      </div>
    </div>
  </div>
</div>



	<!--- model ending --->


	</div>

	



	</div><!--- filter button row ending --->



		<div class="card  text-center">
  				
  				<div class="card-body">
    
    				<h3 class="card-title"> Tasks </h3>
    				
    				

    				<table class="table" id="datatable">
                        <thead>
    					<tr>
    						
    						<th>ID</th>
    						<th>Task Title</th>
    						<th>Date and Time</th>
<!--    						<th>Time</th>-->
                            <th>Description</th>
    						<th>Action</th>
    						


    					</tr>
                        </thead>
                        <tbody>

                        <?php
                        $sql="select * from add_todo";
                        $data=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($data)>0){
                            $count=1;
                            while($row=mysqli_fetch_assoc($data)){
                                $t_id=$row['id'];
                                $t_name=$row['task_name'];
                                $t_date=$row['task_date'];
                                $t_description=$row['task_description'];
                                echo'<tr><td>'.$count.'</td>';
                                echo'<td>'.$t_name.'</td>';
                                echo'<td>'.date("Y-m-d h:i:A", strtotime($t_date)).'</td>';
                                echo'<td>'.$t_description.'</td>';
                                echo'<td>
                           <a href="/zeeproject/todo/edit_todo.php?task_id='.$t_id.'"><button class="btn btn-warning formbtn2"><i class="far fa-edit"></i></button></a>
						

						<button class="btn btn-danger formbtn2" onclick="deleterow('.$t_id.')"><i class="fas fa-trash-alt"></i></button>';
                                $count++;
                            }
                        }
                        ?>
                        </tbody>
    				</table>	
    				
    				
  	
  				</div>

  					

			</div>












	</div>



<?php include '../footer.html';?>
</body>
</html>
<script>
    function deleterow(getid) {
        var getid=getid;
        if(confirm("Are You Sure to want Delete Task?")){
            $.ajax({
                url: "server.php",
                type: "post",
                data: {
                    "id": getid, "cmd": "delete_task"
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