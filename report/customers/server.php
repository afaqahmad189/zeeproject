<?php
session_start();
include('../../connection.php');
$cmd=$_REQUEST['cmd'];

switch ($cmd){
      case'livesearch':{
        $key=$_REQUEST['key'];

        $sql="select * from customer where cus_name like '%$key%'";
        $row=mysqli_query($conn,$sql) or die("Something Went Wrong");
        if(mysqli_num_rows($row)>0){
            while ($data=mysqli_fetch_assoc($row)){
                $p_pic=$data['cus_image'];
                $p_name=$data['cus_name'];
                
                echo '<div class="col-md-3">
                     <div data-name="Orange" data-price="0.5" class="add-to-cart card poscards">';
                if($p_pic=='images/'){
                    echo'<img class="card-img-top" src="../../hrm/images/No-image-available.png" alt="Card image cap">';
                }
                else{
                    echo'<img class="card-img-top" src="../../hrm/'.$p_pic.'" alt="Card image cap">';
                }
                echo'
          
          <div class="card-block">
            <h4 class="card-title">'.$p_name.'</h4>
          
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