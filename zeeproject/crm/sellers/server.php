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

         //
        $seller_location = $_REQUEST['seller_location'];
//        print_r($_REQUEST);
//        foreach ($location as $key => $val ){
////            print_r(  $seller_location=$_REQUEST['seller_location']);
//            print $val;
//        }
//        echo "<pre>";
        //products
        $seller_product_name=$_REQUEST['seller_product_name'];
        $seller_product_price=$_REQUEST['seller_product_price'];
        $seller_product_date=$_REQUEST['seller_product_date'];


        //insert seller
        $get="SELECT * FROM seller where name='$sellername'";
        $getrow=mysqli_query($conn,$get) or die(mysqli_error($conn));
        if(mysqli_num_rows($getrow)>0){
            $_SESSION['seller_already_created']="Seller already Exist";
            header('location:insert_seller.php');

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

                        if(mysqli_query($conn,$pro_img_3d)or die(mysqli_error($conn))){}
                    }
                }
                //end of images section

                //insert seller sub detail location
                for($i=0;$i<count($seller_location);$i++){

                    $sql_delear = "INSERT INTO seller_location
                                                        (seller_loc,seller_id)
                                                    VALUES ('$seller_location[$i]','$seller_inserted_id')";
                    mysqli_query($conn,$sql_delear)or die(mysqli_error($conn));
                }
                for($t=0;$t<count($seller_product_name);$t++){

                    $sql_pro = "INSERT INTO seller_other_product
                                                        (other_product,other_pro_price,other_pro_date,seller_id)
                                                    VALUES ('$seller_product_name[$t]','$seller_product_price[$t]','$seller_product_date[$t]','$seller_inserted_id')";
                    mysqli_query($conn,$sql_pro)or die(mysqli_error($conn));
                }
                //end of seller sub detail product wies

                //end of seller sub detail dealer wies
                if($type=='2'){
                    //active product
                    $activeproducts=$_REQUEST['fields'];
                    //insert seller sub detail location
                    for($a=0;$a<count($activeproducts);$a++){

                        $sql_active = "INSERT INTO seller_active_pro 
                                                        (seller_id,product_id)
                                                    VALUES ('$seller_inserted_id','$activeproducts[$a]')";
                        mysqli_query($conn,$sql_active)or die(mysqli_error($conn));
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
                                                    VALUES ('$seller_otherproduct[$n]','$seller_otherproduct_price[$n]',$seller_otherproduct_phone[$n],'$seller_inserted_id')";
                        mysqli_query($conn,$sql_other)or die(mysqli_error($conn));
                    }
                }


                $_SESSION['seller_insert']="Seller added";
                header('location:insert_seller.php');
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
        $selleracc=$_REQUEST['selleracc'];
        $sellernum=$_REQUEST['sellernum'];


        $seller_location=$_REQUEST['seller_location'];


        $seller_product_name=$_REQUEST['seller_product_name'];
        $seller_product_price=$_REQUEST['seller_product_price'];
        $seller_product_date=$_REQUEST['seller_product_date'];



        //update seller
        $sql="UPDATE seller SET type='$type', name='$sellername',seller_phone='$sellernum',seller_account='$selleracc',description='$s_description', seller_cat='$dealer_cat',
                rating='$optradio',refrence_num='$seller_ref_num',fb='$fb',twitter='$twitter', tiktok='$tiktok',web='$web',
                youtube='$youtube',insta='$insta',mail_id='$mail_id', other='$other' where id='$seller_id'";
        if(mysqli_query($conn,$sql) or die(mysqli_error($conn))){
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
                            if(mysqli_query($conn,$pro_img)or die(mysqli_error($conn,$pro_img))){}
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

                        $sql_delear = "INSERT INTO seller_location
                                                        (seller_loc,seller_id)
                                                    VALUES ('$seller_location[$i]','$seller_id')";
                        mysqli_query($conn,$sql_delear)or die(mysqli_error($conn));
                    }
                }
            //end of location
             //insert seller products
            $del_pro="DELETE FROM seller_other_product where seller_id='$seller_id'";
                if(mysqli_query($conn,$del_pro)){
                    for($t=0;$t<count($seller_product_name);$t++){

                        $sql_delear = "INSERT INTO seller_other_product
                                                        (other_product,other_pro_price,other_pro_date,seller_id)
                                                    VALUES ('$seller_product_name[$t]','$seller_product_price[$t]','$seller_product_date[$t]','$seller_id')";
                        mysqli_query($conn,$sql_delear)or die(mysqli_error($conn));
                    }
                }

            //end of location


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
                            mysqli_query($conn,$sel_inactivepro_insert)or die(mysqli_error($conn));
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
    default:{
        echo"ERROR";
    }
        break;
}
?>