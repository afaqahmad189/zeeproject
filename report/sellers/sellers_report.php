<!DOCTYPE html>
<html>
<head>

	<link rel = "stylesheet" type="text/css" href = "sellerreport.css"/>
	
<style>
	
	.h4, h4 {
    font-size: 20px!important;
}

img{

	cursor: pointer;
}


</style>	


	<title>Sellers Reports</title>
</head>
<body>

	<?php include '../../header.php';?>




<!-- Nav 
<nav class="navbar navbar-inverse bg-inverse fixed-top bg-faded">
    <div class="row">
        <div class="col">
          <button style="margin-right: 4px; background-color: #ac6ae0!important; border-color: #ac6ae0" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart">Cart (<span class="total-count"></span>)</button><button class="clear-cart btn btn-danger">Clear Cart</button></div>
    </div>
</nav>

-->

  
 <!-- Modal 
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="show-cart table">
          
        </table>
        <div>Total price: $<span class="total-cart"></span></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Order now</button>
      </div>
    </div>
  </div>
</div> 
-->

<!---- my custom --->

<div style="padding-left: 15px">
<h3 class="headingwhite">Seller Reports </h3>

</div>
		

<div class="row">
	

	<div class="col-md-8">

  <br>

<div style="    padding-left: 15px; padding-right: 15px; height: 50px; margin-top: -3%"
         class="input-group mb-3">

        <input type="text" class="form-control" placeholder="Search Here By Seller Name Or Code"
               aria-label="Recipient's username" aria-describedby="basic-addon2" id="livesearch"
               style="height: 38px">
    </div>

<br>

<div class="row" id="product"> <!--- row 1 --->
        <?php
        $sql = "select * from seller A JOIN seller_img B ON B.seller_id=A.id";
        $row = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if (mysqli_num_rows($row) > 0) {
            while ($data = mysqli_fetch_assoc($row)) {
                $p_id=$data['id'];
                 $p_pic = $data['seller_img'];
                $p_name = $data['name'];
       
                echo '  <div class="col">
            <div data-name="' . $p_name . '" data-id="'.$p_id.'" class="card add-to-cart poscards">';
                if ($p_pic == 'images/') {
                    echo '<img class="card-img-top" src="../../crm/sellers/images/No-image-available.png" alt="Card image cap">';
                } else {
                    echo '<img class="card-img-top" src="../../crm/sellers/' . $p_pic . '" alt="Card image cap">';
                }
                echo '<div class="card-block">
                    <h4 class="card-title">' . $p_name . '</h4>
                  
                   <!-- <- <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to
                        cart</a> ---!>
                </div>
            </div>
        </div>';
            }
        }
        ?>
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




	</div> <!--- ending first col --->




	<div class="col-md-4">
		
		<div class="card stickycart">
			
			<div class="card-header">
				<div>Selected Products</div>
			</div>

			<div class="card-body">
				
				 <table class="show-cart table">
          
       		
       			 </table>

       			 

       			
       			 <a href="/zeeproject/report/customers/report_result.php">
       			 <button style="background-color: #ac6ae0; border-color: #ac6ae0" class="btn btn-primary btn"> Check Report For Selected Products </button></a>
       			 
       			  

			</div>

		</div>







	</div> <!--- ending second col --->






</div>









	<?php include '../../footer.html';?>

	<script src="sellerreportjs.js"></script>


  <script>
 $('#livesearch').keyup(function () {

        let value = $(this).val();
        $.post('server.php', {
            key: value, cmd: 'livesearch'
        }, function (data) {
            $('#product').empty();
            $('#product').append(data);
        });
    });
  </script>

</body>
</html>