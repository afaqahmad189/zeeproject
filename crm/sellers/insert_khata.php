<!DOCTYPE html>
<html>
<head>




<style>
	
	.table{

		background-color: white;
	}

	th{
		width: 150px;
		height: 60px;
	}

	td{
		height: 40px;
	}

	.table > tbody > tr > td {
     vertical-align: middle;
}


	label{

		color: black!important;
	}


</style>


	<title>Seller Details</title>
</head>
<body>




<?php include '../../header.php';
$seller_id=$_REQUEST['seller_id'];
?>

<?php
    if ($_SESSION['khata_already_created']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['khata_already_created'] . '</label>
            </div>
        </div>';
        unset($_SESSION['khata_already_created']);
    }
    if ($_SESSION['khata_notinsert']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['khata_notinsert'] . '</label>
            </div>
        </div>';
        unset($_SESSION['khata_notinsert']);
    }
    if ($_SESSION['khata_insert']) {
        echo '<div class="row" id="toast">
            <div class="col-md-8"></div>
            <div class="col-md-4 toast" >
                <label>' . $_SESSION['khata_insert'] . '</label>
            </div>
        </div>';
        unset($_SESSION['khata_insert']);
    }

    ?>

<div class="rowmargin">

	
	<h4 class="headingwhite">Khata For 
	                   <?php 
$query ="SELECT id,name from seller where id = '$seller_id'";
$result = mysqli_query($conn,$query);
if($row = mysqli_fetch_assoc($result))
{
$t = $row['name'];
echo $t;
  
//this is to change the position of the quetion
}
?>
	</h4>

	<div class="row"> 
	
		<div style="padding: 20px" class="col-md-8 card">


		<button style="width:10%; margin-left: -5px" class="btn btn-primary" data-toggle="modal" data-target="#printingkhata">Print</button><br>



	<!-- Modal -->
<div class="modal fade" id="printingkhata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Date To Print Khata</h5>
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
        <button type="button" class="btn btn-primary">Print It</button>
      </div>
    </div>
  </div>
</div>


            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Khata Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <img src="" width="100%" height="200px"  id="get_khata_image">
                                </div>


                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                             </div>
                    </div>
                </div>
            </div>


	<!--- model ending --->	
		
		<table id="result_table" class="table table-bordered">

		</table>

	</div>	


		<div style="padding: 20px; " class="col-md-4 card ">
			
			
			<div class="row">

				<div class="col-md-3">
					
					<button style="width: 100%" class="btn btn-primary" id="btn1">Add</button>

				</div>

				<div class="col-md-3">

					<button style="width: 100%" class="btn btn-warning" id="btn2">Payment</button>
					
				</div>



				<div class="col-md-3">

					<button style="width: 100%" class="btn btn-info" id="btn3">Refund</button>
					
				</div>

				<div class="col-md-3">

					<button style="width: 100%; background-color: #ac6ae0; border-color: #ac6ae0" class="btn btn-info" id="btn4">Notification</button>
					
				</div>


			</div>

			<br>



			<div style="padding: 10px;" id="addform">
				
				<h3>Add Form</h3><br>

				<form method="post" action="server.php" enctype="multipart/form-data">

					
					<label style="color: black!important" for="adddate">Select Date</label>
					<input id="adddate" type="date" class="form-control" placeholder="Enter Date" name="date"><br>


					<!-- <label style="color: black!important" for="addname">Product Name</label>
					<input id="addname" type="text" class="form-control" placeholder="Enter Product Name" name="product_id"><br> -->

					<label style="color: black!important" for="seller_otherproduct">Enter Product</label>
                    <input id="seller_otherproduct" type="text" class="form-control" placeholder="Enter Product" name="seller_otherproduct"><br>
                    </br>


					<label style="color: black!important" for="addqty">Quantity</label>
					<input id="addqty" type="number" class="form-control" placeholder="Enter Product Quantity" name="quantity"><br>

					<label style="color: black!important" for="addrate">Rate</label>
					<input id="addrate" type="number" class="form-control" placeholder="Enter Product Rate" name="rate"><br>

					


					<br>
			<center>

				<input type="hidden" name="seller_id" value="<?php echo $seller_id?>">
				<input type="hidden" name="cmd" value="add_sellerkhata">
				<button type="submit" class="formbtn"> Insert </button>

			</center>	



				</form>


			</div>



			<div style="padding: 10px; display: none" id="paymentform">
				

				<h3>Payment Form</h3><br>


				<form  method="post" action="server.php" enctype="multipart/form-data">
				
					
					<label style="color: black!important" for="paymentdate">Select Date</label>
					<input id="paymentdate" type="date" class="form-control" placeholder="Enter Date" name="date"><br>


					<label style="color: black!important" for="paymentcashtype">Cash Type</label>
					<select class="form-control" id="paymentcashtype" name="cash_type">

						<option>Choose One...</option>
						<option>Net Payment</option>
						<option>Udhaar Payment</option>
						
					</select><br>



					<label style="color: black!important" for="paymentcashtotal">Cash Total</label>
					<input id="paymentcashtotal" type="number" class="form-control" placeholder="Enter Total Cash" name="cash_total"><br>

					
					<label style="color: black!important" for="ipic">Invoice Picture</label>
					<input style="height: 45px" type="file" class="form-control" name="pic" id="ipic"><br>




					<br>
			<center>
			<input type="hidden" name="seller_id" value="<?php echo $seller_id?>">
				<input type="hidden" name="cmd" value="add_sellerpayment">	
				<button type="submit" class="btn formbtn"> Insert </button>

			</center>	

			<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">


            <div class="modal-content">

                <div class="modal-body" id="showimage">
            <img src="" width="100%" height="100%" >
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


				</form>



			</div>


			<div style="padding: 10px; display: none" id="refundform">
				
				<h3>Refund Form</h3><br>

				<form method="post" action="server.php" enctype="multipart/form-data">

				
					
					<label style="color: black!important" for="refunddate">Select Date</label>
					<input id="refunddate" type="date" class="form-control" placeholder="Enter Date" name="date"><br>


					<!-- <label style="color: black!important" for="refundname">Product Name</label>
					<input id="addname" type="text" class="form-control" placeholder="Enter Product Name" name="product_id"><br> -->

					<label style="color: black!important" for="seller_otherproduct">Enter Product</label>
                    <input id="seller_otherproduct" type="text" class="form-control" placeholder="Enter Product" name="seller_otherproduct"><br>
                    </br>


					<label style="color: black!important" for="refundqty">Quantity</label>
					<input id="refundqty" type="number" class="form-control" placeholder="Enter Product Quantity" name="quantity"><br>

					<label style="color: black!important" for="addrate">Rate</label>
					<input id="refundrate" type="number" class="form-control" placeholder="Enter Product Rate" name="rate"><br>


					<br>
			<center>
			<input type="hidden" name="seller_id" value="<?php echo $seller_id?>">
			    <input type="hidden" name="cmd" value="add_sellerrefund">				
				<button type="submit" class="formbtn"> Insert </button>

			</center>	



				</form>




			</div>


			<!--- notification form box --->


			<div style="padding: 10px; display: none" id="notificationform">
				
				<h3>Add Notification</h3><br>

				<form method="post" action="server.php" enctype="multipart/form-data">
					
					<label style="color: black!important" for="adddate">Select Date</label>
					<input id="adddate" type="date" class="form-control" placeholder="Enter Date" name="date"><br>

					


					

					<label style="color: black!important" for="addrate">Rate</label>
					<input id="addrate" type="number" class="form-control" placeholder="Enter Product Rate" name="rate"><br>


					<br>
			<center>
			<input type="hidden" name="seller_id" value="<?php echo $seller_id?>">
				<input type="hidden" name="cmd" value="add_sellernotify">	
				<button type="submit" class="formbtn "> Insert </button>

			</center>	



				</form>


			</div>


			

			

			


		</div>








	</div><br><!--- row 1 ending --->
</div><!--- ending row margin --->


<script>

    //delete signup
    function deleterow(getid) {
        var getid=getid;
        if(confirm("Are You Sure to want Delete Product?")){
            $.ajax({
                url: "server.php",
                type: "post",
                data: {
                    "id": getid, "cmd": "delete_status"
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

$(document).ready(function(){
	$(function(){
		$('#btn1').trigger('click');
	})

		
  $("#btn1").click(function(){
    $("#addform").slideDown(500)
    $("#paymentform").slideUp(500)
    $("#refundform").slideUp(500)
    $("#notificationform").slideUp(500)
	
	$.ajax({url: 'server.php',
		data:{'cmd': 'get_khata',seller_id:<?php echo $seller_id?>},
		success: function(data){
			const header = '<tr><th>Type</th><th>Date</th><th>Productname</th><th>Quantity</th><th>Rate</th><th>Cash Type</th><th>Cash Total</th><th>Picture</th><th>Total</th><th>Status</th></tr>'
			$('#result_table').html(header + data)
		}, error : function(err){
			debugger
		}
	});
    
  });



  $("#btn2").click(function(){
	
    $("#addform").slideUp(500)
    $("#paymentform").slideDown(500)
    $("#refundform").slideUp(500)
    $("#notificationform").slideUp(500)
	$.ajax({url: 'server.php',
		data:{'cmd': 'get_khata',seller_id:<?php echo $seller_id?>},
		success: function(data){
            const header = '<tr><th>Type</th><th>Date</th><th>Productname</th><th>Quantity</th><th>Rate</th><th>Cash Type</th><th>Cash Total</th><th>Picture</th><th>Total</th><th>Status</th></tr>'
            $('#result_table').html(header + data)
		}, error : function(err){
			debugger
		}
	});
    
  });
  
  $("#btn3").click(function(){
    $("#addform").slideUp(500)
    $("#paymentform").slideUp(500)
    $("#refundform").slideDown(500)
    $("#notificationform").slideUp(500)
	$.ajax({url: 'server.php',
		data:{'cmd': 'get_khata',seller_id:<?php echo $seller_id?>},
		success: function(data){
            const header = '<tr><th>Type</th><th>Date</th><th>Productname</th><th>Quantity</th><th>Rate</th><th>Cash Type</th><th>Cash Total</th><th>Picture</th><th>Total</th><th>Status</th></tr>'
            $('#result_table').html(header + data)
		}, error : function(err){
			debugger
		}
	});
    
  });
  
  $("#btn4").click(function(){
    $("#addform").slideUp(500)
    $("#paymentform").slideUp(500)
    $("#refundform").slideUp(500)
    $("#notificationform").slideDown(500)
	$.ajax({url: 'server.php',
		data:{'cmd': 'get_notify',seller_id:<?php echo $seller_id?>},
		success: function(data){
            const header = '<tr><th>Type</th><th>Date</th><th>Quantity</th></tr>'
            $('#result_table').html(header + data)
		}, error : function(err){
			debugger
		}
	});
    
  });
 
})

   //get product product
   function getimage(getid) {
        var getid=getid;
            $.ajax({
                url: "server.php",
                type: "post",
                data: {
                    "id": getid, "cmd": "get_image"
                },
                success: function (data) {
                    $('#showimage').empty();
                    $('#showimage').append(data);
                }
            });
   }

   //get image khata on modal
    function getimage_modal(image) {
    $('#get_khata_image').attr("src",image);
    }

</script>

<br><br><br>

<?php include '../../footer.html';?>




	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>