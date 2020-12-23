<!DOCTYPE html>
<html ng-app="chromeTabsApp">
<head>



	<link rel = "stylesheet" type="text/css" href = "posstyle.css"/>

  
	
<style>
	
	.h4, h4 {
    font-size: 20px!important;
}

.table > tbody > tr > td {
     vertical-align: middle;
}

img{

	cursor: pointer;
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 38px!important;
    user-select: none;
    -webkit-user-select: none;
    background-color: white;
}


</style>	


	<title>Products Reports</title>
</head>
<body ng-controller="AppCtrl">

	<?php include '../header.php';?>




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

--> <!--- pos header cart ending --->

<!---- my custom --->


		

<div style="margin-top: -15px" class="row">
	

	<div class="col-md-8">

		<br>

		<div style="    padding-left: 15px; padding-right: 15px; height: 50px; margin-top: -3%" class="input-group mb-3">

   <div class="input-group-prepend">

    <select style="height:50px !important;background-color: #ac6ae0!important; color: white; border-color: #ac6ae0!important" class="form-control select2" id="get_product">
        <option value="all">All Categories</option>
          <?php
          $sql="select * from category";
          $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
          if(mysqli_num_rows($row)>0){
              while ($data=mysqli_fetch_assoc($row)){
                  $cat_id=$data['id'];
                  $catname=$data['cat_name'];
                  echo '<option value="'.$cat_id.'">'.$catname.'</option>';

              }
          }
          ?>
    </select>

  </div>    
      
  <input type="text" class="form-control" placeholder="Search Here By Product Name Or Code" aria-label="Recipient's username" aria-describedby="basic-addon2" id="livesearch" style="height: 38px">
<!--  <div class="input-group-append">-->
<!--    <button style="background-color: #ac6ae0!important; border-color: #ac6ae0" class="btn btn-primary" type="button">Search</button>-->
<!--  </div>-->
</div>

		<br>
		
		<div class="row" id="product"> <!--- row 1 --->
            <?php
            $sql="select * from add_product ";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if(mysqli_num_rows($row)>0){
                while ($data=mysqli_fetch_assoc($row)) {
                    $p_pic = $data['main_pic'];
                    $p_name = $data['name'];
                    $sale_price = $data['sale_price'];
                    echo '  <div class="col-md-3">
                <div data-name="Banana" data-price="1.22" class="card add-to-cart poscards">';
                 if($p_pic=='products'){
                    echo'<img class="card-img-top" src="../inventory/products/No-image-available.png" alt="Card image cap">';
                }
                else{
                    echo'<img class="card-img-top" src="../inventory/'.$p_pic.'" alt="Card image cap">';
                }
                echo'<div class="card-block">
                        <h4 class="card-title">'.$p_name.'</h4>
                        <p class="card-text">Price: Rs '.$sale_price.'</p>
                       <!-- <- <a href="#" data-name="Banana" data-price="1.22" class="add-to-cart btn btn-primary">Add to
                            cart</a> ---!>
                    </div>
                </div>
            </div>';
                }
            }
                ?>

    </div>
        <!--- row 1 ending --->


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


<!--- second column --->

	<div style="margin-top: -15px; " class="col-md-4">

      <!--- bootstrap tabs --->

      <div  >

      <button class="btn cbutton" style="background-color: white; border-color: white" data-toggle="collapse" data-target="#demo">Page 1</button>

      <button class="btn cbutton" style="background-color: white; border-color: white" data-toggle="collapse" data-target="#demo2">Page 2</button>

      <button class="btn cbutton" style="background-color: white; border-color: white" data-toggle="collapse" data-target="#demo3">Page 3</button>

      <button class="btn cbutton" style="background-color: white; border-color: white" data-toggle="collapse" data-target="#demo4">Page 4</button>

      <button class="btn cbutton" style="background-color: white; border-color: white" data-toggle="collapse" data-target="#demo3">Page 5</button>

      <button class="btn cbutton" style="background-color: white; border-color: white" data-toggle="collapse" data-target="#demo3">Page 6</button>

     

      <button class="btn " style="background-color: white; border-color: white">Add Tab</button>

      </div>

      <br><br>

      <div id="demo" class="collapse show"><!--- collapse 1 --->
        
      


      


      <!--- bootstrap tabs ending --->





     <!--- cart top buttons --->


        <div style="margin-left: -5%" class="row">
          
          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

          </div>

          <div class="col-2">
            
            <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">Special<br> Customer</button>

          </div>

          <div class="col-2">
            
            <button data-toggle="modal" data-target="#returnorder" class="btn btn-primary btn-primary1">Return<br> Order</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

          </div>

          <div class="col-2">
            
            <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br> Up</button>

          </div>



        </div><br>







        <!--- cart top buttons ending --->


		
		<div style="margin-left: -20px; width: 100%!important; display:table;" class="card ">
			
			<div class="card-header">

       
        <div class="row">
          
          <div class="col-md-3 align-middle">
            
            <h5 align-middle>#46001</h5>

          </div>

           <div class="col-md-5">
            
           <input style="width: 100%" type="text" class="form-control" placeholder="Enter Customer Name" name="">

          </div>

          <div class="col-md-4">
            
           <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

          </div>



        </div>




				
			</div>

			<div class="card-body">
				
				 <table class="show-cart table table-bordered">
          
       		
       			 </table>
             <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span class="total-cart"></span></h2></div>

             <div class="row">

              <div style="padding: 0" class="col-md-6">

             <input type="text" placeholder="Payment Amount" class="form-control" name="">

             </div>


             <div style="padding: 0; padding-left: 15px" class="col-md-6">

             <h5>Remaining: 500 Rs</h5>

             </div>


             </div><br>
       			 

       			<center>

       			 <a href="#">
       			 <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn"> Pick Up Order </button></a>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " class="btn btn-primary btn"> Full Payment Print </button></a>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn"> More Options </button></a>
       			 
       			  </center>

			</div>

		</div>


</div><!--- ending collapse 1 --->




 <div id="demo2" class="collapse"><!--- collapse 2 --->
        
      


      


      <!--- bootstrap tabs ending --->





     <!--- cart top buttons --->


        <div style="margin-left: -5%" class="row">
          
          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

          </div>

          <div class="col-2">
            
            <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">Special<br> Customer</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Return<br> Order</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

          </div>

          <div class="col-2">
            
            <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br> Up</button>

          </div>



        </div><br>







        <!--- cart top buttons ending --->


    
    <div class="card ">
      
      <div class="card-header">

       
        <div class="row">
          
          <div class="col-md-3 align-middle">
            
            <h5 align-middle>#46001</h5>

          </div>

           <div class="col-md-5">
            
           <input style="width: 100%" type="text" class="form-control" placeholder="Enter Customer Name" name="">

          </div>

          <div class="col-md-4">
            
           <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

          </div>



        </div>




        
      </div>

      <div class="card-body">
        
         <table class="show-cart table">
          
          
             </table>
             <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span class="total-cart"></span></h2></div>
             

            <center>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn"> Pick Up Order </button></a>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " class="btn btn-primary btn"> Full Payment Print </button></a>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn"> More Options </button></a>
             
              </center>

      </div>

    </div>


</div><!--- ending collapse 2 --->




<div id="demo3" class="collapse"><!--- collapse 3 --->
        
      


      


      <!--- bootstrap tabs ending --->





     <!--- cart top buttons --->


        <div style="margin-left: -5%" class="row">
          
          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Simple<br> Bill</button>

          </div>

          <div class="col-2">
            
            <button data-toggle="modal" data-target="#specialcustomer" class="btn btn-primary btn-primary1">Special<br> Customer</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Return<br> Order</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Price<br> Checker</button>

          </div>

          <div class="col-2">
            
            <button class="btn btn-primary btn-primary1">Make<br> Gurrantee</button>

          </div>

          <div class="col-2">
            
            <button data-toggle="modal" data-target="#pickuporderstop" class="btn btn-primary btn-primary1">Pick<br> Up</button>

          </div>



        </div><br>







        <!--- cart top buttons ending --->


    
    <div class="card stickycart">
      
      <div class="card-header">

       
        <div class="row">
          
          <div class="col-md-3 align-middle">
            
            <h5 align-middle>#46001</h5>

          </div>

           <div class="col-md-5">
            
           <input style="width: 100%" type="text" class="form-control" placeholder="Enter Customer Name" name="">

          </div>

          <div class="col-md-4">
            
           <input type="date" class="form-control" placeholder="Enter Customer Name" name="">

          </div>



        </div>




        
      </div>

      <div class="card-body">
        
         <table class="show-cart table">
          
          
             </table>
             <div style="margin-top: 45px; margin-bottom: 25px"><h2>Total Price: Rs <span class="total-cart"></span></h2></div>
             

            <center>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal" data-target="#pickupordersbottom" class="btn btn-primary btn"> Pick Up Order </button></a>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " class="btn btn-primary btn"> Full Payment Print </button></a>

             <a href="#">
             <button style="width: 30%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn"> More Options </button></a>
             
              </center>

      </div>

    </div>


</div><!--- ending collapse 3 ---> 







	</div> <!--- ending second col --->






</div>




<!--- all modals --->



<!-- More options modal -->
<div class="modal fade" id="moreoptionsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">More Options</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>

        Customer Name
        <input type="text" placeholder="Customer Name" class="form-control" name=""><br>

        Customer Contact Number
        <input type="text" placeholder="Customer Number" class="form-control" name=""><br>

        Customer Address
        <input type="text" placeholder="Customer Address" class="form-control" name=""><br>

        <div class="row">
          
          <div style="padding: 0;" class="col-md-6">
            
         Total Price
        <input type="text" value="1700 Rs" placeholder="Customer Address" class="form-control" name="">

          </div>

          <div style="padding: 0; padding-left: 15px" class="col-md-6">
            
         On Spot Payment
        <input type="text"  placeholder="Enter On The Spot Payment" class="form-control" name="">

          </div>


        </div><br>

        Date Of Payment
        <input type="date" class="form-control" name="">




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Print and Save</button>
      </div></form>
    </div>
  </div>
</div>


<!--- more options modal ending --->



<!--- pickup orders(top buttons) modal --->



<div class="modal fade" id="pickuporderstop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div style="width: 760px" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pick Up Orders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        
        <table class="table">
            
            <tr>
              
              <th>ID</th>
              <th>Customer</th>
              <th>items</th>
              <th>Date/Time</th>
              <th>Action</th>


            </tr>

            <tr>
              
              <td>1</td>
              <td>Hassan</td>
              <td>Switch, Wallpaper</td>
              <td>09/12/2020 (02:32 am)</td>
              <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button></button></td>


            </tr>

            <tr>
              
              <td>2</td>
              <td>Hassan</td>
              <td>Switch, Wallpaper</td>
              <td>09/12/2020 (02:32 am)</td>
              <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button></button></td>



            </tr>

            <tr>
              
              <td>3</td>
              <td>Hassan</td>
              <td>Switch, Wallpaper, Wires, Magnets, Sockets</td>
              <td>09/12/2020 (02:32 am)</td>
              <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button></button></td>



            </tr>

            <tr>
              
              <td>4</td>
              <td>Hassan</td>
              <td>Switch, Wallpaper</td>
              <td>09/12/2020 (02:32 am)</td>
              <td><button class="btn btn-primary"><i class="fas fa-eye"></i></button></button></td>



            </tr>



        </table>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>






<!--- ending pickup orders (top buttons) modal ---> 




<!--- pickup orders(bottom button) modal --->



<div class="modal fade" id="pickupordersbottom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pick Up Orders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        
       <form>
         
        Order Date 
        <input type="date" class="form-control" placeholder="" name=""><br>

        Order Time 
        <input type="time" class="form-control" placeholder="" name=""><br>

        Customer Name 
        <input type="text" class="form-control" placeholder="Enter Customer Name" name=""><br>



       </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>






<!--- ending pickup orders (bottom button) modal ---> 




<!--- special customer modal --->



<div  class="modal fade" id="specialcustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div  class="modal-dialog" role="document">
    <div style="width: 800px" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pick Up Orders</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        
       <form>
         
        
        <input type="text" class="form-control" placeholder="Search By Name" name="">

       </form><br>

       <div class="row">
         
      <div class="col-md-3">
            
          <div style="cursor: pointer;" onclick="window.location='#';" class="card" style="width: 18rem;">
            
            <img style="height: 150px; border-radius: 0px!important" class="card-img-top" src="https://ichef.bbci.co.uk/images/ic/400xn/p0784g6m.jpg" alt="Customer Image">
            
              <div class="card-body">
              
              <h5 class="card-title">Customer 1</h5>
              
        

            </div>
          </div>


      </div>



      <div class="col-md-3">
            
          <div style="cursor: pointer;" onclick="window.location='#';" class="card" style="width: 18rem;">
            
            <img style="height: 150px; border-radius: 0px!important" class="card-img-top" src="https://ichef.bbci.co.uk/images/ic/400xn/p0784g6m.jpg" alt="Customer Image">
            
              <div class="card-body">
              
              <h5 class="card-title">Customer 2</h5>
              
        

            </div>
          </div>


      </div>


      <div class="col-md-3">
            
          <div style="cursor: pointer;" onclick="window.location='#';" class="card" style="width: 18rem;">
            
            <img style="height: 150px; border-radius: 0px!important" class="card-img-top" src="https://ichef.bbci.co.uk/images/ic/400xn/p0784g6m.jpg" alt="Customer Image">
            
              <div class="card-body">
              
              <h5 class="card-title">Customer 3</h5>
              
        

            </div>
          </div>


      </div>


      <div class="col-md-3">
            
          <div style="cursor: pointer;" onclick="window.location='#';" class="card" style="width: 18rem;">
            
            <img style="height: 150px; border-radius: 0px!important" class="card-img-top" src="https://ichef.bbci.co.uk/images/ic/400xn/p0784g6m.jpg" alt="Customer Image">
            
              <div class="card-body">
              
              <h5 class="card-title">Customer 4</h5>
              
        

            </div>
          </div>


      </div>




       </div><!--- row ending for cards --->

       <br>

       <center>
       <button style="width: 100%; background-color: #ac6ae0; border-color: #ac6ae0; " data-toggle="modal" data-target="#moreoptionsmodal" class="btn btn-primary btn"> Proceed To Bill </button>
       </center>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       <!--- <button type="button" class="btn btn-primary">Select</button> --->
      </div>
    </div>
  </div>
</div>






<!--- ending special customer modal ---> 






<!-- return order modal -->
<div class="modal fade" id="returnorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">More Options</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>

        Previous Invoice Number
      <div class="input-group mb-3">
        
        <input type="text" class="form-control" placeholder="Enter Invoice Number" aria-label="Previous Invoice" aria-describedby="basic-addon2">
        
          <div class="input-group-append">
            
             <button  class="btn btn-primary">Fetch</button>
          </div>

      </div>
      <br>

     

      <table class="table">
        

        <tr>
          
          <th>ID</th>
          <th>Item Name</th>
          <th>Change Quantity</th>
          <th>Remove</th>


        </tr>

        <tr>
          
          <td>1</td>
          <td>Wire</td>
          <td> <input type="text" placeholder="New Quantity" value="5 M" class="form-control" name=""> </td>

          <td> <button class="btn-danger btn">Remove</button> </td>


        </tr>

        <tr>
          
          <td>2</td>
          <td>Glass</td>
          <td> <input type="text" placeholder="New Quantity" value="7 pcs" class="form-control" name=""> </td>

          <td> <button class="btn-danger btn">Remove</button> </td>


        </tr>


         <tr>
          
          <td>3</td>
          <td>Switch</td>
          <td> <input type="text" placeholder="New Quantity" value="2 pcs" class="form-control" name=""> </td>

          <td> <button class="btn-danger btn">Remove</button> </td>


        </tr>



      </table>

     


      <br>



       
        Date Of New Payment
        <input type="date" class="form-control" name="">
        <br>

        <h2>Payment To Return: 560 Rs</h2>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Print and Save</button>
      </div></form>
    </div>
  </div>
</div>


<!--- more options modal ending --->





<!--- all modals ending --->
	<script src="posjs.js"></script>



<script>
    $('#get_product').change(function () {
        let cat_id=$(this).val();
        $.post('server.php',{
            cmd:'get_cat_product',cat_id:cat_id
        },function(data){
            $('#product').empty();
            $('#product').append(data);
            //toast hide

        });
    });

jQuery('.cbutton').click( function(e) {
    jQuery('.collapse').collapse('hide');
});


// $(document).ready(function () {
//     $('.input-group-prepend').children('span').children('.selection').children('span').css("height","50px !important");
// });


//live search
    $('#livesearch').keyup(function () {
        let value=$(this).val();
        $.post('server.php',{
            key:value,cmd:'livesearch'
        },function (data) {
            $('#product').empty();
            $('#product').append(data);
        });
    });
</script>


  
<?php include '../footer.html';?>

</body>
</html>