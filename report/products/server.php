<?php
session_start();
include('../../connection.php');
$cmd=$_REQUEST['cmd'];

switch ($cmd){
      case'livesearch':{
        $key=$_REQUEST['key'];

        $sql="select * from add_product where name like '%$key%'";
        $row=mysqli_query($conn,$sql) or die("Something Went Wrong");
        if(mysqli_num_rows($row)>0){
            while ($data=mysqli_fetch_assoc($row)){
                $p_pic=$data['main_pic'];
                $p_name=$data['name'];
                $sale_price=$data['sale_price'];
                echo '<div class="col-md-3">
                     <div data-name="Orange" data-price="0.5" class="add-to-cart card poscards">';
                if($p_pic=='products/'){
                    echo'<img class="card-img-top" src="../../inventory/products/No-image-available.png" alt="Card image cap">';
                }
                else{
                    echo'<img class="card-img-top" src="../../inventory/'.$p_pic.'" alt="Card image cap">';
                }
                echo'
          
          <div class="card-block">
            <h4 class="card-title">'.$p_name.'</h4>
            <p class="card-text">Price: Rs '.$sale_price.'</p>
           <!--- <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
          </div>
        </div>
              </div>';

            }
        }
        else{
            echo"<label style='color: white'>No Data Found</label>";
        }
    }
    break;

    default:{
        echo"ERROR";
    }
        break;
}
?>