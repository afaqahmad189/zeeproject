<!DOCTYPE html>
<html>
<head>




	<title>Generate Barcode</title>
</head>
<body>

	<?php include '../header.php';?>


	

<div  class="container">
	


	
	  <form style="width: 50%; margin: 0 auto">
	        <label>Select Product</label>
	        <select style="height: 150px!important" class="form-control select2">
	           <option>Select</option> 
	           <option>Car</option> 
	           <option>Bike</option> 
	           <option>Scooter</option> 
	           <option>Cycle</option> 
	           <option>Horse</option> 
	        </select>

	       
	       <br><br>

	       <input type="submit" class="btn btn-primary" value="Generate Barcode" name="">
	       

	      


	    </form><br><br>

	    <div style="width: 50%; margin: 0 auto" class="barcodediv">

	    <h4 class="headingwhite">  Barcode: 16554486 </h4>


	    <br>

	    <input type="button" class="btn btn-warning" value="Print Barcode" name="">


	    </div>








</div>


<br><br><br><br><br><br>

	<?php include '../footer.html';?>


	<script>
    $('.select2').select2();
</script>




</body>
</html>