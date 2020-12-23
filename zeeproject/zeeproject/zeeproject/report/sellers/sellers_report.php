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


	<title>Customers Reports</title>
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

		<div style="    padding-left: 15px; padding-right: 15px; height: 50px;" class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search Here By Product Name Or Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button style="background-color: #ac6ae0!important; border-color: #ac6ae0" class="btn btn-primary" type="button">Search</button>
  </div>
</div>

		<br>
		
		<div class="row"> <!--- row 1 --->
      <div class="col">
        <div data-name="Orange" data-price="0.5" class="add-to-cart card poscards">
  <img class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Orange</h4>
    <p class="card-text">Price: $0.5</p>
   <!--- <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Banana" data-price="1.22" class="card add-to-cart poscards" >
  <img class="card-img-top" src="http://images.all-free-download.com/images/graphicthumb/vector_illustration_of_ripe_bananas_567893.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Banana</h4>
    <p class="card-text">Price: $1.22</p>
  <!---  <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a> --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Lemon" data-price="5" class="card add-to-cart poscards" >
  <img class="card-img-top" src="https://3.imimg.com/data3/IC/JO/MY-9839190/organic-lemon-250x250.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Lemon</h4>
    <p class="card-text">Price: $5</p>
   <!--- <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Head_phonewith_mouse" data-price="40" class="card add-to-cart poscards" >
  <img class="card-img-top" src="https://media.naheed.pk/catalog/product/cache/fd6f1e57839b9b324771e8de21428b3f/1/2/1202969-1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Headphone with mouse</h4>
    <p class="card-text">Price: $40</p>
   <!--- <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Headphone 1" data-price="25" class="card poscards add-to-cart" >
  <img class="card-img-top" src="https://media.naheed.pk/catalog/product/cache/fd6f1e57839b9b324771e8de21428b3f/1/1/1190678-1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Headphone 1</h4>
    <p class="card-text">Price: $25</p>
   <!--- <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>



    </div> <!--- row 1 ending --->


    <div class="row">
      <div class="col">
        <div data-name="Orange" data-price="0.5" class="add-to-cart card poscards">
  <img class="card-img-top" src="http://www.azspagirls.com/files/2010/09/orange.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Orange</h4>
    <p class="card-text">Price: $0.5</p>
   <!--- <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Banana" data-price="1.22" class="card add-to-cart poscards" >
  <img class="card-img-top" src="http://images.all-free-download.com/images/graphicthumb/vector_illustration_of_ripe_bananas_567893.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Banana</h4>
    <p class="card-text">Price: $1.22</p>
  <!---  <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to cart</a> --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Lemon" data-price="5" class="card add-to-cart poscards" >
  <img class="card-img-top" src="https://3.imimg.com/data3/IC/JO/MY-9839190/organic-lemon-250x250.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Lemon</h4>
    <p class="card-text">Price: $5</p>
   <!--- <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Head_phone-with_mouse" data-price="40" class="card add-to-cart poscards" >
  <img class="card-img-top" src="https://media.naheed.pk/catalog/product/cache/fd6f1e57839b9b324771e8de21428b3f/1/2/1202969-1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Headphone with mouse</h4>
    <p class="card-text">Price: $40</p>
   <!--- <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>


      <div class="col">
        <div data-name="Headphone_1" data-price="25" class="card poscards add-to-cart" >
  <img class="card-img-top" src="https://media.naheed.pk/catalog/product/cache/fd6f1e57839b9b324771e8de21428b3f/1/1/1190678-1.jpg" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Headphone 1</h4>
    <p class="card-text">Price: $25</p>
   <!--- <a href="#" data-name="Lemon" data-price="5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
  </div>
</div>
      </div>



    </div> <!--- row 2 ending --->




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

</body>
</html>