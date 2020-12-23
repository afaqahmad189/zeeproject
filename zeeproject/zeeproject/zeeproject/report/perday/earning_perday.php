<!DOCTYPE html>
<html>
<head>
	<title>All Earnings</title>
</head>
<body>

	<?php include '../../header.php';?>

	<div class="rowmargin">
		

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
    
    				<h3 class="card-title"> Earnings </h3>
    				
    				

    				<table class="table">

    				
    					<tr>
    						
    						<th>ID</th>
    						<th>Date</th>
    						<th>Time</th>
    						<th>Earn Amount</th>
    						


    					</tr>


    					<tr>
    						<td>1</td>
    						<td>03/08/2020</td>
    						<td>12:37 PM</td>
    						<td>1589600 Rs</td>
    						


    					</tr>


    					<tr>
    						
    						<td>2</td>
    						<td>03/08/2020</td>
    						<td>12:37 PM</td>
    						<td>1589600 Rs</td>
    						


    					</tr>


    					<tr>
    						
    						<td>3</td>
    						<td>03/08/2020</td>
    						<td>12:37 PM</td>
    						<td>1589600 Rs</td>
    						


    					</tr>


    					<tr>
    						
    						<td>4</td>
    						<td>03/08/2020</td>
    						<td>12:37 PM</td>
    						<td>1589600 Rs</td>
    						


    					</tr>


    					<tr>
    						
    						<td>5</td>
    						<td>03/08/2020</td>
    						<td>12:37 PM</td>
    						<td>1589600 Rs</td>
    						


    					</tr>



						<tr>
    						
    						<td>6</td>
    						<td>03/08/2020</td>
    						<td>12:37 PM</td>
    						<td>1589600 Rs</td>
    						


    					</tr>



    				</table>



    				
    				
  	
  				</div>

  					

			</div>


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