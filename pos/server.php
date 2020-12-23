<?php
session_start();
include('../connection.php');
$cmd=$_REQUEST['cmd'];

switch ($cmd){
    case'get_cat_product':{
        $cat_id=$_REQUEST['cat_id'];
        if($cat_id=='all'){
            $sql="select * from category c,add_product p where p.cat_id=c.id";
            $row=mysqli_query($conn,$sql) or die("Something Went Wrong");
            if(mysqli_num_rows($row)>0){
                while ($data=mysqli_fetch_assoc($row)){
                    $p_pic=$data['main_pic'];
                    $p_name=$data['name'];
                    $sale_price=$data['sale_price'];
                    echo '<div class="col-md-3">
        <div data-name="Orange" data-price="0.5" class="add-to-cart card poscards">';
                    if($p_pic=='products/'){
                        echo'<img class="card-img-top" src="../inventory/products/No-image-available.png" alt="Card image cap">';
                    }
                    else{
                        echo'<img class="card-img-top" src="../inventory/'.$p_pic.'" alt="Card image cap">';
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
        }
        else {
            $sql = "select * from category c,add_product p where p.cat_id=c.id and c.id='$cat_id'";
            $row = mysqli_query($conn, $sql) or die("Something Went Wrong");
            if (mysqli_num_rows($row) > 0) {
                while ($data = mysqli_fetch_assoc($row)) {
                    $p_pic = $data['main_pic'];
                    $p_name = $data['name'];
                    $sale_price = $data['sale_price'];
                    echo '<div class="col-md-3">
        <div data-name="Orange" data-price="0.5" class="add-to-cart card poscards">';
                    if ($p_pic == 'products/') {
                        echo '<img class="card-img-top" src="../inventory/products/No-image-available.png" alt="Card image cap">';
                    } else {
                        echo '<img class="card-img-top" src="../inventory/' . $p_pic . '" alt="Card image cap">';
                    }
                    echo '
          
          <div class="card-block">
            <h4 class="card-title">' . $p_name . '</h4>
            <p class="card-text">Price: Rs ' . $sale_price . '</p>
           <!--- <a href="#" data-name="Orange" data-price="0.5" class="add-to-cart btn btn-primary">Add to cart</a>  --->
          </div>
        </div>
              </div>';

                }


            }
        }
    }
        break;
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
                    echo'<img class="card-img-top" src="../inventory/products/No-image-available.png" alt="Card image cap">';
                }
                else{
                    echo'<img class="card-img-top" src="../inventory/'.$p_pic.'" alt="Card image cap">';
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
    case'insert_pos':{
        $get_pos_detail=$_REQUEST['pos'];
        $customer_name=$_REQUEST['customer_name'];
        $bill_date=$_REQUEST['bill_date'];
        $invoice_num=$_REQUEST['invoice_num'];
        $status=$_REQUEST['status'];
        $total_bill = 0;
        foreach ($get_pos_detail as $item) {
            $sql="insert into sale_details  (invoice_num, status, product_id, product_name, price, quatity, total_price)
            VALUES ('".$invoice_num."','".$status."', '".$item['id']."', '".$item['name']."', '".$item['price']."', '".$item['count']."', '".$item['total']."')";
            mysqli_query($conn, $sql);
            $total_bill = $total_bill +  $item['total'];

            $sqlpro="select * from add_product where id='".$item['id']."'";
            $rowpro=mysqli_query($conn,$sqlpro) ;
            $datapro=mysqli_fetch_assoc($rowpro);

            $sqlupdatepro = "UPDATE add_product SET remiaing_qty='".($datapro['remiaing_qty'] - $item['count'])."' WHERE id='".$item['id']."'";
            mysqli_query($conn, $sqlupdatepro);
        }
        $sql="insert into sales  (invoice_num, cus_name, total_bill, bill_date, pay_amount, status)
        VALUES ('".$invoice_num."', '".$customer_name."', '".$total_bill."', '".$bill_date."' , '".$_REQUEST['pay_amount']."', '".$status."' )";
        mysqli_query($conn, $sql);

        if($_REQUEST['more_name']!="" && $_REQUEST['cus_existing']==""){
            $sqlcust="insert into customer (cus_name, cus_phone, cus_address)
            VALUES ('".$_REQUEST['more_name']."', '".$_REQUEST['more_contact']."', '".$_REQUEST['more_address']."')";
            mysqli_query($conn, $sqlcust);

        }

        $sqlpro="select cus_remaining_cash from customer WHERE id='3'";
        $rowpro=mysqli_query($conn,$sqlpro);
        $datacus=mysqli_fetch_assoc($rowpro);

        if($_REQUEST['more_name']!="" or $_REQUEST['cus_existing']!=""){
            $borrow = $total_bill - $_REQUEST['pay_amount'];
            if($borrow > 0)
                $recash = $datacus['cus_remaining_cash'] + $borrow;
            else
                $recash = $datacus['cus_remaining_cash'] + $borrow;

            $sqlupdatecus = "UPDATE customer SET cus_remaining_cash='".$recash."' WHERE id='".$_REQUEST['cus_existing']."'";
            mysqli_query($conn, $sqlupdatecus);
        }
        }
    break;
    case'pickup':{
        $get_pos_detail=$_REQUEST['pos'];
        $customer_name=$_REQUEST['pickup_customer_name'];
        $pickup_date=$_REQUEST['pickup_date'];
        $pickup_time=$_REQUEST['pickup_time'];
//        echo $status=$_REQUEST['status'];
        $total_bill = 0;
        foreach ($get_pos_detail as $item) {
            $sql="insert into pickup  ( product_id, product_name, price, quantity, total_price,cus_name,pickup_date,pickup_time)
            VALUES ( '".$item['id']."', '".$item['name']."', '".$item['price']."', '".$item['count']."', '".$item['total']."','".$customer_name."','".$pickup_date."','".$pickup_time."')";
           $query= mysqli_query($conn, $sql);
//            $total_bill = $total_bill +  $item['total'];
        }
        if(!$query){
            echo"Something Went Wrong";
        }
        else{

            echo'Pickup Order Successfully Added';
        }

    }
    break;

    default:{
        echo"ERROR";
    }
        break;
}
?>