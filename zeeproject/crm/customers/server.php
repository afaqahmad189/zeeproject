<?php
session_start();
include('../../connection.php');
$cmd=$_REQUEST['cmd'];

switch ($cmd){
    case 'add_customer':{
        $shopname=$_REQUEST['cus_shop_name'];
        $name=$_REQUEST['cus_name'];
        $number=$_REQUEST['cus_phone'];
        $address=$_REQUEST['cus_address'];
        $optradio=$_REQUEST['optradio'];
        $fb=$_REQUEST['cus_fb'];
        $twitter=$_REQUEST['cus_twitter'];
        $tiktok=$_REQUEST['cus_tiktok'];
        $web=$_REQUEST['cus_web'];
        $youtube=$_REQUEST['cus_youtube'];
        $insta=$_REQUEST['cus_insta'];
        $mail_id=$_REQUEST['cus_mail'];
        $other=$_REQUEST['cus_other'];
        $reference=$_REQUEST['cus_ref'];
        $target_dir = "images/";
        //images insert
        $target_file_img1 = $target_dir . basename($_FILES["cus_image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["cus_image"]["tmp_name"], $target_file_img1);

        //insert customer
        $get="SELECT * FROM customer where cus_shop_name='$shopname' && cus_name='$name'";
        $getrow=mysqli_query($conn,$get) or die(mysqli_error($conn));
        if(mysqli_num_rows($getrow)>0){
            $_SESSION['customer_already_created']="customer already Exist";
            header('location:insert_customer.php');

        }
        else{
            $sql="insert into customer (cus_shop_name,cus_name,cus_phone,cus_address,cus_rating,cus_fb,cus_image,cus_twitter,cus_tiktok,cus_web,cus_youtube,
            cus_insta,cus_mail,cus_other,cus_ref) 
                values('$shopname','$name','$number','$address','$optradio','$fb','$target_file_img1','$twitter',
                        '$tiktok','$web','$youtube','$insta','$mail_id','$other','$reference')";
            $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
            $seller_inserted_id=mysqli_insert_id($conn);
            if(!$query){
                $_SESSION['customer_notinsert']="customer not Inserted";
                header('location:insert_customer.php');
            }
            else{
              

                $_SESSION['customer_insert']="customer Inserted";
                header('location:insert_customer.php');
            }
        }

            //end of insert customer



    }
        break;


        case'get_customer':{
            $sql="select * from customer";
            $row=mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if(mysqli_num_rows($row)>0){
                while ($data=mysqli_fetch_assoc($row)){
                    $customer_id=$data['id'];
                    $shopname=$data['cus_shop_name'];
                    echo '<option value="'.$customer_id.'">'.$shopname.'</option>';
        
                }
        
        
            }
        }
        break;

        case'delete_customer':{
            $customer_id=$_REQUEST['id'];
            $sql="delete from customer where id=$customer_id";
            if(mysqli_query($conn,$sql)){
        //            $_SESSION['p_delete']="Product Deleted";
                echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>customer Deleted</label></div>';
        
            }
            else{
        //            $_SESSION['p_notdelete']="Product not Deleted";
                echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>customer not Deleted</label></div>';
        
            }
        }
        break;

        case 'update_customer':{
             $cus_id=$_REQUEST['cus_id'];
             $shopname=$_REQUEST['cus_shop_name'];
             $name=$_REQUEST['cus_name'];
             $number=$_REQUEST['cus_phone'];
             $address=$_REQUEST['cus_address'];
             $optradio=$_REQUEST['optradio'];
             $fb=$_REQUEST['cus_fb'];
             $twitter=$_REQUEST['cus_twitter'];
             $tiktok=$_REQUEST['cus_tiktok'];
             $web=$_REQUEST['cus_web'];
             $youtube=$_REQUEST['cus_youtube'];
             $insta=$_REQUEST['cus_insta'];
             $mail_id=$_REQUEST['cus_mail'];
             $other=$_REQUEST['cus_other'];
             $reference=$_REQUEST['cus_ref'];
            $target_dir = "images/";
            //images insert
            $target_file_img1 = $target_dir . basename($_FILES["cus_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["cus_image"]["tmp_name"], $target_file_img1);
            if($target_file_img1=='images/'){
                //update seller
                $sql="UPDATE customer SET cus_shop_name='$shopname', cus_name='$name',cus_phone='$number', cus_address='$address',
                cus_rating='$optradio',cus_fb='$fb',cus_twitter='$twitter', cus_tiktok='$tiktok',cus_web='$web',
                cus_youtube='$youtube',cus_insta='$insta',cus_mail='$mail_id', cus_other='$other',cus_ref='$reference' where id='$cus_id'";
                if(mysqli_query($conn,$sql) or die(mysqli_error($conn))){
                        $_SESSION['customer_update']="customer Updated";
                        header('location:customers_list.php');
                }
                else{
                    $_SESSION['customer_notupdate']="Customer Not Updated";
                    header('location:customers_list.php');
                }
            }
            else{
                    //update seller
                $sql="UPDATE customer SET cus_shop_name='$shopname', cus_name='$name',cus_phone='$number', cus_address='$address',
                cus_image='$target_file_img1',cus_rating='$optradio',cus_fb='$fb',cus_twitter='$twitter', cus_tiktok='$tiktok',cus_web='$web',
                cus_youtube='$youtube',cus_insta='$insta',cus_mail='$mail_id', cus_other='$other',cus_ref='$reference' where id='$cus_id'";
                if(mysqli_query($conn,$sql) or die(mysqli_error($conn))){
                    $_SESSION['customer_update']="customer Updated";
                    header('location:customers_list.php');
                }
                else{
                    $_SESSION['customer_notupdate']="Customer Not Updated";
                    header('location:customers_list.php');
                }
            }

            }
            break;
            
             default:{
                    echo"ERROR";
                }
                break;
                    }
            ?>
