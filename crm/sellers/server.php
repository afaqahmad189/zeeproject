<?php
session_start();
include('../../connection.php');
$cmd=$_REQUEST['cmd'];

switch ($cmd){
    case 'add_seller':{
         $type=$_REQUEST['type'];
         $sellername=$_REQUEST['sellername'];
         $description=$_REQUEST['seller_description'];
         $seller_cat=$_REQUEST['dealer_cat'];
         $optradio=$_REQUEST['optradio'];
         $ref_no=$_REQUEST['seller_ref_num'];
         $fb=$_REQUEST['fb'];
         $twitter=$_REQUEST['twitter'];
         $tiktok=$_REQUEST['tiktok'];
         $web=$_REQUEST['web'];
         $youtube=$_REQUEST['youtube'];
         $insta=$_REQUEST['insta'];
         $mail_id=$_REQUEST['mail'];
         $other=$_REQUEST['other'];
         $sellernum=$_REQUEST['sellernum'];
         $selleracc=$_REQUEST['selleracc'];
        $seller_dealer_name=$_REQUEST['s_dealer_name'];
        $seller_dealer_contact=$_REQUEST['s_dealer_contact'];
        $seller_dealer_account=$_REQUEST['s_dealer_account'];
        $seller_location = $_REQUEST['seller_location'];

        //products
        $seller_product_name=$_REQUEST['seller_product_name'];
        $seller_product_price=$_REQUEST['seller_product_price'];
        $seller_product_date=$_REQUEST['seller_product_date'];


        //insert seller
        $get="SELECT * FROM seller where name='$sellername'";
        $getrow=mysqli_query($conn,$get);
        if(mysqli_num_rows($getrow)>0){
//            $_SESSION['seller_already_created']="Seller already Exist";
//            header('location:insert_seller.php');
            echo "seller_already_created";

        }
        else{
            $sql="insert into seller (type,name,seller_phone,seller_account,description ,seller_cat,rating,refrence_num,fb,twitter,tiktok,
                                            web,youtube,insta,mail_id,other) 
                values('$type','$sellername','$sellernum','$selleracc','$description','$seller_cat','$optradio','$ref_no','$fb',
                        '$twitter','$tiktok','$web','$youtube','$insta','$mail_id','$other')";
            $query=mysqli_query($conn,$sql);
            $seller_inserted_id=mysqli_insert_id($conn);
            if(!$query){
                $_SESSION['seller_notinsert']="Seller not Inserted";
                header('location:insert_seller.php');
            }
            else{
                //insert seller images
                $seller_img = count($_FILES['seller_pic']['name']);
                for($s=0; $s<$seller_img; $s++){
                    $tmpFilePath_seller=$_FILES['seller_pic']['tmp_name'][$s];
                    if($tmpFilePath_seller != ""){
                        $img_name3d = $_FILES['seller_pic']['name'][$s];
                        $image_path3d="images/" .$img_name3d;
                        $path= move_uploaded_file($_FILES["seller_pic"]["tmp_name"][$s], $image_path3d);
                        $pro_img_3d="INSERT INTO seller_img (seller_id,seller_img) value ('$seller_inserted_id','$image_path3d')";
                        mysqli_query($conn,$pro_img_3d);
                    }
                }
                //end of images section

                //insert seller sub detail location
                for($i=0;$i<count($seller_location);$i++){

                    $sql_delear = "INSERT INTO seller_location
                                                        (seller_loc,seller_id)
                                                    VALUES ('$seller_location[$i]','$seller_inserted_id')";
                    mysqli_query($conn,$sql_delear)or die("SomeThing Went Wrong.");
                }

                //insert seller other products
                for($t=0;$t<count($seller_product_name);$t++){

                    $sql_pro = "INSERT INTO seller_other_product
                                                        (other_product,other_pro_price,other_pro_date,seller_id)
                                                    VALUES ('$seller_product_name[$t]','$seller_product_price[$t]','$seller_product_date[$t]','$seller_inserted_id')";
                    mysqli_query($conn,$sql_pro)or die("SomeThing Went Wrong.");
                }

                //end of seller sub detail product wies

                //insert seller dealer detail
                for($u=0;$u<count($seller_dealer_name);$u++){

                    $sql_dealer = "INSERT INTO seller_dealer
                                                        (s_dealer_name,s_contact_number,s_account_number,seller_id)
                                                    VALUES ('$seller_dealer_name[$u]','$seller_dealer_contact[$u]','$seller_dealer_account[$u]','$seller_inserted_id')";
                   mysqli_query($conn,$sql_dealer)or die("SomeThing Went Wrong.");
                }
                //end of seller dealer detail

                if($type=='2'){
                    //active product
                    $activeproducts=$_REQUEST['fields'];
                    //insert seller sub detail location
                    for($a=0;$a<count($activeproducts);$a++){
                        $sql_active = "INSERT INTO seller_active_pro 
                                                        (seller_id,product_id)
                                                    VALUES ('$seller_inserted_id','$activeproducts[$a]')";
                        mysqli_query($conn,$sql_active);
                    }
                    //insert seller sub detail product wies
                }

                else{
                    //seller other products
                    $seller_otherproduct=$_REQUEST['seller_otherproduct'];
                    $seller_otherproduct_price=$_REQUEST['seller_otherproduct_price'];
                    $seller_otherproduct_phone=$_REQUEST['seller_otherproduct_phone'];
                    for($n=0;$n<count($seller_otherproduct);$n++){
                        $sql_other = "INSERT INTO sellerinactive_products 
                                                        (inactive_pro_id,inactive_pro_price,inactive_pro_phone,seller_id)
                                                    VALUES ('$seller_otherproduct[$n]','$seller_otherproduct_price[$n]','$seller_otherproduct_phone[$n]','$seller_inserted_id')";
                        mysqli_query($conn,$sql_other);
                    }
                }


//                $_SESSION['seller_insert']="Seller added";
//                header('location:insert_seller.php');
                echo'seller_insert';
            }
        }

            //end of insert seller



    }
        break;
    case'delete_seller':{
        $seller_id=$_REQUEST['id'];
        $sql="delete from seller where id=$seller_id";
        if(mysqli_query($conn,$sql)){
            //delete dealer against seller
            $sql_dealer="delete from seller_active_pro where seller_id=$seller_id";
            mysqli_query($conn,$sql_dealer);
            //end delete dealer against seller
            //delete location against seller
            $sql_location="delete from seller_img where seller_id=$seller_id";
            mysqli_query($conn,$sql_location);
            //end delete location against seller
            //delete product against seller
            $sql_product="delete from seller_location where seller_id=$seller_id";
            mysqli_query($conn,$sql_product);
            //delete product against seller
            //delete product against seller
            $sql_other_product="delete from seller_other_product where seller_id=$seller_id";
            mysqli_query($conn,$sql_other_product);
            //delete product against seller

            echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Seller Deleted</label></div>';

        }
        else{
            echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Seller not Deleted</label></div>';

        }

    }
    break;
    case'update_seller':{
        $seller_id=$_REQUEST['seller_id'];
        $type=$_REQUEST['type'];
        $sellername=$_REQUEST['sellername'];
        $s_description=$_REQUEST['s_description'];
        $dealer_cat=$_REQUEST['dealer_cat'];
        $optradio=$_REQUEST['optradio'];
        $seller_ref_num=$_REQUEST['seller_ref_num'];
        $fb=$_REQUEST['fb'];
        $twitter=$_REQUEST['twitter'];
        $tiktok=$_REQUEST['tiktok'];
        $web=$_REQUEST['web'];
        $youtube=$_REQUEST['youtube'];
        $insta=$_REQUEST['insta'];
        $mail_id=$_REQUEST['mail'];
        $other=$_REQUEST['other'];
        $sellernum=$_REQUEST['sellernum'];
        $selleracc=$_REQUEST['selleracc'];

        $seller_dealer_name=$_REQUEST['s_dealer_name'];
        $seller_dealer_contact=$_REQUEST['s_dealer_contact'];
        $seller_dealer_account=$_REQUEST['s_dealer_account'];


        $seller_location=$_REQUEST['seller_location'];


        $seller_product_name=$_REQUEST['seller_product_name'];
        $seller_product_price=$_REQUEST['seller_product_price'];
        $seller_product_date=$_REQUEST['seller_product_date'];



        //update seller
        $sql="UPDATE seller SET type='$type', name='$sellername',seller_phone='$sellernum',seller_account='$selleracc',description='$s_description', seller_cat='$dealer_cat',
                rating='$optradio',refrence_num='$seller_ref_num',fb='$fb',twitter='$twitter', tiktok='$tiktok',web='$web',
                youtube='$youtube',insta='$insta',mail_id='$mail_id', other='$other' where id='$seller_id'";
        if(mysqli_query($conn,$sql)){
            //other_image_upload
            $total = count($_FILES['seller_pic']['name']);
            $tmpFilePathcheck=$_FILES['seller_pic']['tmp_name'];

            if($total >=1 && $tmpFilePathcheck[0]!=""){
                $del_img="DELETE FROM seller_img where seller_id='$seller_id'";
                if(mysqli_query($conn,$del_img)or die(mysqli_error($conn))){
                    for($i=0; $i<$total; $i++){
                        $tmpFilePath=$_FILES['seller_pic']['tmp_name'][$i];
                        if($tmpFilePath != ""){
                            $img_name = $_FILES['seller_pic']['name'][$i];
                            $image_path="images/" .$img_name;
                            $path= move_uploaded_file($_FILES["seller_pic"]["tmp_name"][$i], $image_path);
                            $pro_img="insert into seller_img (seller_id,seller_img) values('$seller_id','$image_path')";
                            mysqli_query($conn,$pro_img)or die("SomeThing Went Wrong.");
                        }
                    }
                }
            }
            //end of other images uploading
            //enter location
            //insert seller sub detail location
            $del_loc="DELETE FROM seller_location where seller_id='$seller_id'";
                if(mysqli_query($conn,$del_loc)){
                    for($i=0;$i<count($seller_location);$i++){

                        $sql_loc = "INSERT INTO seller_location
                                                        (seller_loc,seller_id)
                                                    VALUES ('$seller_location[$i]','$seller_id')";
                        mysqli_query($conn,$sql_loc)or die("SomeThing Went Wrong.");
                    }
                }
            //end of location

             //insert seller products
            $del_pro="DELETE FROM seller_other_product where seller_id='$seller_id'";
                if(mysqli_query($conn,$del_pro)){
                    for($t=0;$t<count($seller_product_name);$t++){

                        $sql_other_pro = "INSERT INTO seller_other_product
                                                        (other_product,other_pro_price,other_pro_date,seller_id)
                                                    VALUES ('$seller_product_name[$t]','$seller_product_price[$t]','$seller_product_date[$t]','$seller_id')";
                        mysqli_query($conn,$sql_other_pro)or die("SomeThing Went Wrong.");
                    }
                }

            //end of location
            //insert dealer
            $s_dealer_del="DELETE FROM seller_dealer where seller_id='$seller_id'";
            if(mysqli_query($conn,$s_dealer_del)){
                for($l=0;$l<count($seller_dealer_name);$l++){

                    $sql_dealer = "INSERT INTO seller_dealer
                                                        (s_dealer_name,s_contact_number,s_account_number,seller_id)
                                                    VALUES ('$seller_dealer_name[$l]','$seller_dealer_contact[$l]','$seller_dealer_account[$l]','$seller_id')";
                    mysqli_query($conn,$sql_dealer)or die("SomeThing Went Wrong.");
                }
            }

            //end of dealer


            if($type=='2'){
                //active product
                $fields=$_REQUEST['fields'];
                //insert seller sub detail location

                $sel_del_inactive="DELETE FROM sellerinactive_products where seller_id='$seller_id'";
                if(mysqli_query($conn,$sel_del_inactive)){
                    $sel_pro="DELETE FROM seller_active_pro where seller_id='$seller_id'";
                    if(mysqli_query($conn,$sel_pro)){
                        for($u=0;$u<count($fields);$u++){

                            $sel_pro_insert = "INSERT INTO seller_active_pro
                                                        (seller_id,product_id)
                                                    VALUES ('$seller_id','$fields[$u]')";
                            mysqli_query($conn,$sel_pro_insert)or die(mysqli_error($conn));
                        }
                    }
                }

            }
            else{
                //seller other products
                $seller_otherproduct=$_REQUEST['seller_otherproduct'];
                $seller_otherproduct_price=$_REQUEST['seller_otherproduct_price'];
                $seller_otherproduct_phone=$_REQUEST['seller_otherproduct_phone'];

                $sel_del_active="DELETE FROM seller_active_pro where seller_id='$seller_id'";
                if(mysqli_query($conn,$sel_del_active)){
                    $sel_active_pro="DELETE FROM sellerinactive_products where seller_id='$seller_id'";
                    if(mysqli_query($conn,$sel_active_pro)){
                        for($u=0;$u<count($seller_otherproduct);$u++){
                            $sel_inactivepro_insert = "INSERT INTO sellerinactive_products
                                                        (inactive_pro_id,inactive_pro_price,inactive_pro_phone,seller_id)
                                                    VALUES ('$seller_otherproduct[$u]','$seller_otherproduct_price[$u]','$seller_otherproduct_phone[$u]','$seller_id')";
                            mysqli_query($conn,$sel_inactivepro_insert)or die("SomeThing Went Wrong.");
                        }
                    }
                }
            }

            //end of location

            $_SESSION['seller_update']="Seller Updated";
            header('location:sellers_list.php');
        }
        else{
            $_SESSION['seller_notupdate']="Seller Not Updated";
            header('location:sellers_list.php');
        }


    }
    break;
       // insert seller khata 
       case 'add_sellerkhata':{
           $seller_id=$_REQUEST['seller_id'];
        $date=$_REQUEST['date'];
        $product_id=$_REQUEST['seller_otherproduct'];
        $quantity=$_REQUEST['quantity'];
        $rate=$_REQUEST['rate'];
        $total=$quantity*$rate;

          //insert seller khata
        
            $sql="insert into seller_khata(seller_id,date,product_id,quantity,rate,type_add,total,r_total)
                values('$seller_id','$date','$product_id','$quantity' ,'$rate','Add','$total','$total')";
            $query=mysqli_query($conn,$sql);
            $seller_inserted_id=mysqli_insert_id($conn);
            if(!$query){
                $_SESSION['Khata_notinsert']="Khata not Inserted";
                header('location:insert_khata.php?seller_id='.$seller_id);
            }

            else{
                $_SESSION['Khata_insert']="Khata Created";
                header('location:insert_Khata.php?seller_id='.$seller_id);
            }

        
    }
        break;

    case'get_khata':{
        $seller_id=$_REQUEST['seller_id'];
            $sql="select *,seller_khata.id as khata_id,seller.name as s_name from seller_khata
        join seller on seller_khata.seller_id=seller.id
        where seller_khata.seller_id='$seller_id'";
        $row=mysqli_query($conn,$sql) or die("SomeThing Went Wrong.");
        if(mysqli_num_rows($row)>0){
            while ($data=mysqli_fetch_assoc($row)){
                $id=$data['khata_id'];
                $type=$data['type_add'];
                $date=$data['date'];
                $product_id=$data['product_id'];
                $quantity=$data['quantity'];
                $rate=$data['rate'];
                $cash_type=$data['cash_type'];
                $cash_total=$data['cash_total'];
                $picture=$data['picture'];
                $total=$data['total'];
                echo '<tr><td>'.$type.'</td><td>'.$date.'</td><td>'.$product_id.'</td><td>'.$quantity.'</td><td>'.$rate.'</td><td>'.$cash_type.'</td><td>'.$cash_total.'</td>';
                if($picture=='' || $picture=='images/'){
                    echo'<td></td><td>'.$total.'</td> <td><button class="btn btn-md btn-danger" onclick="deleterow('.$id.')">Delete</button> </td></tr>';
                }
                else{
                    echo'<td><button class="btn btn-success" onclick="getimage_modal(\''.$picture.'\')"   data-toggle="modal" data-target="#myModal"> View Pic</button></td><td>'.$total.'</td> <td><button class="btn btn-md btn-danger" onclick="deleterow('.$id.')">Delete</button> </td></tr>';
                }
            }


        }
    }
break;

case'delete_status':{
	$id=$_REQUEST['id'];
    $sql="delete from seller_khata where id=$id";
    mysqli_query($conn,$sql);
}
break;

// insert seller refund 
case 'add_sellerrefund':{
    $seller_id=$_REQUEST['seller_id'];
    $date=$_REQUEST['date'];
    $product_id=$_REQUEST['seller_otherproduct'];
    $quantity=$_REQUEST['quantity'];
    $rate=$_REQUEST['rate'];

      //insert seller refund

      $select="select * from seller_Khata where seller_id=$seller_id order by id desc";
      $get_re=mysqli_query($conn,$select);
      if(mysqli_num_rows($get_re)>0){
          $result_re=mysqli_fetch_assoc($get_re);
          $remianing_total=$result_re['r_total'];
          $net_total=$remianing_total-($quantity*$rate);
    
        $sql="insert into seller_khata(seller_id,date,product_id,quantity,rate,type_add,total,r_total)
            values('$seller_id','$date','$product_id','$quantity' ,'$rate','Refund','$net_total','$net_total')";
        $query=mysqli_query($conn,$sql);
        $seller_inserted_id=mysqli_insert_id($conn);
        if(!$query){
            $_SESSION['Khata_notinsert']="Khata not Inserted";
            header('location:insert_khata.php?seller_id='.$seller_id);
        }

        else{
            $_SESSION['Khata_insert']="Khata Created";
            header('location:insert_Khata.php?seller_id='.$seller_id);
        }

}
}
    break;

case 'add_sellerpayment':{
    $seller_id=$_REQUEST['seller_id'];
    $date=$_REQUEST['date'];
    $cash_type=$_REQUEST['cash_type'];
    $cash_total=$_REQUEST['cash_total'];
    // $total=$cash_total-$r_total;
    $target_dir = "images/";
	$target_file_img1 = $target_dir . basename($_FILES["pic"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
    $path= move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file_img1);

      //insert seller payment
        $select="select * from seller_Khata where seller_id=$seller_id order by id desc";
        $get_re=mysqli_query($conn,$select);
        if(mysqli_num_rows($get_re)>0){
            $result_re=mysqli_fetch_assoc($get_re);
            $remianing_total=$result_re['r_total'];
            $net_total=$remianing_total-$cash_total;

            $sql="insert into seller_khata(seller_id,date,cash_type,cash_total,picture,type_add,total,r_total)
            values('$seller_id','$date','$cash_type','$cash_total' ,'$target_file_img1','Payment','$net_total','$net_total')";
        $query=mysqli_query($conn,$sql)or die(mysqli_error($conn));
        $seller_inserted_id=mysqli_insert_id($conn);
        if(!$query){
            $_SESSION['Khata_notinsert']="Khata not Inserted";
            header('location:insert_khata.php?seller_id='.$seller_id);
        }

        else{
            $_SESSION['Khata_insert']="Khata Created";
            header('location:insert_Khata.php?seller_id='.$seller_id);
        }
        }

        

    
}
    break;
    case'get_payment':{
        $seller_id=$_REQUEST['seller_id'];
        $sql="select * from seller_payment
        join seller on seller_payment.seller_id=seller.id
        where seller_payment.seller_id='$seller_id'";
        $row=mysqli_query($conn,$sql) or die("SomeThing Went Wrong.");
        if(mysqli_num_rows($row)>0){
            while ($data=mysqli_fetch_assoc($row)){
                $seller_name=$data['name'];
                $date=$data['date'];
                $cash_type=$data['cash_type'];
                $cash_total=$data['cash_total'];
                $target_file_img1=$data['pic'];
         
                echo '<tr><td>'.payment.'</td><td>'.$seller_name.'</td><td>'.$date.'</td><td>'.$cash_type.'</td><td>'.$cash_total.'</td><td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="getimage('.$target_file_img1.')">View Pics</button></td><td>'.$total.'</td>/tr>';
            }


        }
    }
break;
// insert seller notification
case 'add_sellernotify':{
    $seller_id=$_REQUEST['seller_id'];
    $date=$_REQUEST['date'];
    $rate=$_REQUEST['rate'];

      //insert seller notification
    
        $sql="insert into seller_notify(seller_id,date,rate)
            values('$seller_id','$date','$rate')";
        $query=mysqli_query($conn,$sql);
        $seller_inserted_id=mysqli_insert_id($conn);
        if(!$query){
            $_SESSION['Khata_notinsert']="Khata not Inserted";
            header('location:insert_khata.php?seller_id='.$seller_id);
        }

        else{
            $_SESSION['Khata_insert']="Khata Created";
            header('location:insert_Khata.php?seller_id='.$seller_id);
        }

    
}
    break;

    case'get_notify':{
        $seller_id=$_REQUEST['seller_id'];
        $sql="select * from seller_notify
        join seller on seller_notify.seller_id=seller.id
        where seller_notify.seller_id='$seller_id'";
        $row=mysqli_query($conn,$sql) or die("SomeThing Went Wrong.");
        if(mysqli_num_rows($row)>0){
            while ($data=mysqli_fetch_assoc($row)){
                $seller_name=$data['name'];
                $date=$data['date'];
                $rate=$data['rate'];
                echo '<tr><td>'.Notification.'</td><td>'.$date.'</td><td>'.$rate.'</td></tr>';
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