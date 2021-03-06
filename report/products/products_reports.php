<!DOCTYPE html>
<html>
<head>

	<link rel = "stylesheet" type="text/css" href = "productsreport.css"/>
	
<style>
	
	.h4, h4 {
    font-size: 20px!important;
}

img{

	cursor: pointer;
}


</style>	


	<title>Products Reports</title>
</head>
<body style="padding-top:0;">

	<?php include '../../header.php';?>



  
 <!-- Modal -->
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


<!---- my custom --->

<div style="padding-left: 15px">
<h3 class="headingwhite">Product Report </h3>

</div>

		

<div class="row">
	

	<div class="col-md-8">

		<br>

    <div style="    padding-left: 15px; padding-right: 15px; height: 50px; margin-top: -3%"
             class="input-group mb-3">

            <input type="text" class="form-control" placeholder="Search Here By Product Name Or Code"
                   aria-label="Recipient's username" aria-describedby="basic-addon2" id="livesearch"
                   style="height: 38px">
        </div>

		<br>
		
    <div class="row" id="product"> <!--- row 1 --->
            <?php
            $sql = "select * from add_product ";
            $row = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            if (mysqli_num_rows($row) > 0) {
                while ($data = mysqli_fetch_assoc($row)) {
                    $p_id=$data['id'];
                    $p_pic = $data['main_pic'];
                    $p_name = $data['name'];
                    $sale_price = $data['sale_price'];
                    echo '  <div class="col">
                <div data-name="' . $p_name . '" data-price="' . $sale_price . '" data-id="'.$p_id.'" class="card add-to-cart poscards">';
                    if ($p_pic == 'products/') {
                        echo '<img class="card-img-top" src="../../inventory/products/No-image-available.png" alt="Card image cap">';
                    } else {
                        echo '<img class="card-img-top" src="../../inventory/' . $p_pic . '" alt="Card image cap">';
                    }
                    echo '<div class="card-block">
                        <h4 class="card-title">' . $p_name . '</h4>
                        <p class="card-text">Price: Rs ' . $sale_price . '</p>
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

       			 

       			
       			 <a href="/zeeproject/report/products/report_resultm.php">
       			 <button style="background-color: #ac6ae0; border-color: #ac6ae0" class="btn btn-primary btn"> Check Report For Selected Products </button></a>
       			 
       			  <a href="/zeeproject/report/products/report_resultm.php">
       			 <button style="background-color: #ac6ae0; border-color: #ac6ae0" class="btn btn-primary btn"> Check Report For All Products </button>
       			 </a>

			</div>

		</div>

        </div>








	</div> <!--- ending second col --->






</div>









	<?php include '../../footer.html';?>

	<script src="productsreportjs.js"></script>

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