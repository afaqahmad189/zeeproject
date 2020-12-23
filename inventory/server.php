<?php
session_start();
include('../connection.php');
$cmd=$_REQUEST['cmd'];

switch ($cmd){
    case 'add_product':{
       $productname=$_REQUEST['productname'];
       $invetoryaffect=$_REQUEST['invetoryaffect'];
       $unit=$_REQUEST['unit'];
       $productcost=$_REQUEST['productcost'];
       $barcode=$_REQUEST['barcode'];
       $catselect=$_REQUEST['catselect'];
       $quantity=$_REQUEST['quantity'];
       $alertstock=$_REQUEST['alertstock'];
       $saleprice=$_REQUEST['sale_price'];
       $description=$_REQUEST['description'];
       $rack_no=$_REQUEST['rack_no'];
//       $warehoue_num=$_REQUEST['warehoue_num'];
       $purchased_place=$_REQUEST['purchased_place'];

       $target_dir = "products/";
       //images insert
        $target_file_img1 = $target_dir . basename($_FILES["mainpic"]["name"]);
//       $target_file_img2 = $target_dir . basename($_FILES["otherpics"]["name"]);die();
//        $target_file_img3 = $target_dir . basename($_FILES["thirdpics"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["mainpic"]["tmp_name"], $target_file_img1);

//        move_uploaded_file($_FILES["otherpics"]["tmp_name"], $target_file_img2);
//        move_uploaded_file($_FILES["thirdpics"]["tmp_name"], $target_file_img3);

        $get="SELECT * FROM add_product where name='$productname'";
       $getrow=mysqli_query($conn,$get);
       if(mysqli_num_rows($getrow)>0){
//           $_SESSION['product_already_created']="Product already created";
           echo "Product_already_created";
//           header('location:add_product.php');
       }
       else{


          $sql="insert into add_product (name,barcode,affect ,cat_id,unit,qty,remiaing_qty,alert_stock,product_cost,sale_price,description,
                                            product_place,pur_place,main_pic) 
                values('$productname','$barcode','$invetoryaffect','$catselect','$unit','$quantity','$quantity','$alertstock','$productcost',
                        '$saleprice','$description','$rack_no','$purchased_place','$target_file_img1')";
       $query=mysqli_query($conn,$sql);
       if(!$query){
           $_SESSION['product_notinsert']="Product not Created";
           header('location:add_product.php');
       }
       else{
           $product_insert_id=mysqli_insert_id($conn);
           //other_image_upload
           $total = count($_FILES['otherpics']['name']);
           for($i=0; $i<$total; $i++){  
               $tmpFilePath=$_FILES['otherpics']['tmp_name'][$i];
               if($tmpFilePath != ""){


                   $img_name = $_FILES['otherpics']['name'][$i];
                   $image_path="products/" .$img_name;
                   $path= move_uploaded_file($_FILES["otherpics"]["tmp_name"][$i], $image_path);


                   $pro_img="INSERT INTO product_images (pro_other_img,product_id) value ('$image_path','$product_insert_id')";

                   if(mysqli_query($conn,$pro_img)){}
               }
           }
           //3d image
           //other_image_upload
           $total_3d = count($_FILES['thirdpics']['name']);
           for($s=0; $s<$total_3d; $s++){
               $tmpFilePath_3d=$_FILES['thirdpics']['tmp_name'][$s];
               if($tmpFilePath_3d != ""){


                   $img_name3d = $_FILES['thirdpics']['name'][$s];
                   $image_path3d="products/" .$img_name3d;
                   $path= move_uploaded_file($_FILES["thirdpics"]["tmp_name"][$s], $image_path3d);


                   $pro_img_3d="INSERT INTO product_3d_img (3d_img,product_id) value ('$image_path3d','$product_insert_id')";

                   if(mysqli_query($conn,$pro_img_3d)){}
               }
           }


//           $_SESSION['product_insert']="Product Created";
//           header('location:add_product.php');
           echo'product_created';
       }

       }


    }
    break;
    case 'add_category':{
        $cat_name=$_REQUEST['cat_name'];
        $sql="select * from category where cat_name='$cat_name'";
        $row=mysqli_query($conn,$sql) ;
        if(mysqli_num_rows($row)>0){
            echo"Already Created";
        }
        else{
            $query="INSERT INTO category (cat_name)
                VALUES ('$cat_name')";
            if(mysqli_query($conn,$query)){


                $sql="select id,cat_name from category";
                $row=mysqli_query($conn,$sql) or die("Something Went Wrong");
                if(mysqli_num_rows($row)>0){
                    while ($data=mysqli_fetch_assoc($row)){
                        $cat_id=$data['id'];
                        $catname=$data['cat_name'];
                        echo '<option value="'.$cat_id.'">'.$catname.'</option>';
                    }
                }
            }
            else{
                echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Category not Created</label></div>';

            }
            }
    }
    break;
    case'delete_product':{
        $p_id=$_REQUEST['id'];

        $sql="delete from add_product where id=$p_id";


        if(mysqli_query($conn,$sql)){

            $pr_3d="delete from product_3d_img where product_id='$p_id'";
            mysqli_query($conn,$pr_3d);

            $pr_other="delete from product_images where product_id='$p_id'";
            mysqli_query($conn,$pr_other);
//            $_SESSION['p_delete']="Product Deleted";
            echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Product Deleted</label></div>';

        }
        else{
//            $_SESSION['p_notdelete']="Product not Deleted";
            echo '<div class="col-md-8"></div><div class="col-md-4 toast" ><label>Product not Deleted</label></div>';

        }
    }
    break;
    case'update_product':{
        $product_id=$_REQUEST['product_id'];
        $productname=$_REQUEST['productname'];
        $invetoryaffect=$_REQUEST['invetoryaffect'];
        $unit=$_REQUEST['unit'];
        $productcost=$_REQUEST['productcost'];
        $barcode=$_REQUEST['barcode'];
        $catselect=$_REQUEST['catselect'];
        $quantity=$_REQUEST['quantity'];
        $alertstock=$_REQUEST['alertstock'];
        $saleprice=$_REQUEST['saleprice'];
        $description=$_REQUEST['description'];
        $rack=$_REQUEST['rack'];
//        $warehoue_num=$_REQUEST['warehoue_num'];
        $productplace=$_REQUEST['productplace'];
        $target_dir = "products/";
        //images insert
        $target_file_img1 = $target_dir . basename($_FILES["mainpic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file_img1,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["mainpic"]["tmp_name"], $target_file_img1);

        if($target_file_img1=='products/'){
            $sql="UPDATE add_product SET name ='$productname',barcode='$barcode',affect='$invetoryaffect',cat_id='$catselect',
                unit='$unit',qty='$quantity',remiaing_qty='$quantity',alert_stock='$alertstock',product_cost='$productcost',sale_price='$saleprice',
                description='$description',product_place='$rack',pur_place='$productplace'                                                          WHERE id='$product_id'";
            if(mysqli_query($conn,$sql)){
                //other_image_upload
                $total = count($_FILES['otherpics']['name']);
                $tmpFilePathcheck=$_FILES['otherpics']['tmp_name'];
                if($total >=1 && $tmpFilePathcheck[0]!=""){
                    $del_img="DELETE FROM product_images where product_id='$product_id'";
                    if(mysqli_query($conn,$del_img)or die("Something Went Wrong")){
                        for($i=0; $i<$total; $i++){
                            $tmpFilePath=$_FILES['otherpics']['tmp_name'][$i];
                            if($tmpFilePath != ""){
                                $img_name = $_FILES['otherpics']['name'][$i];
                                $image_path="products/" .$img_name;
                                $path= move_uploaded_file($_FILES["otherpics"]["tmp_name"][$i], $image_path);
                                $pro_img="insert into product_images (pro_other_img,product_id) values('$image_path','$product_id')";
                                if(mysqli_query($conn,$pro_img)or die("Something Went Wrong")){}
                            }
                        }
                    }
                }
                //end of other images uploading
                //3d_image_upload
                $total_3d = count($_FILES['thirdpics']['name']);
                $tmpFilePathcheck_3d=$_FILES['thirdpics']['tmp_name'];
                if($total_3d >=1 && $tmpFilePathcheck_3d[0]!=""){
                    $del_img_3d="DELETE FROM product_3d_img where product_id='$product_id'";
                    if(mysqli_query($conn,$del_img_3d)or die("Something Went Wrong")){
                        for($t=0; $t<$total_3d; $t++){
                            $tmpFilePath_3d=$_FILES['thirdpics']['tmp_name'][$t];
                            if($tmpFilePath_3d != ""){
                                $img_name_3d = $_FILES['thirdpics']['name'][$t];
                                $image_path_3d="products/" .$img_name_3d;
                                $path_3d= move_uploaded_file($_FILES["thirdpics"]["tmp_name"][$t], $image_path_3d);
                                $pro_img_3d="insert into product_3d_img (3d_img,product_id) values('$image_path_3d','$product_id')";
                                mysqli_query($conn,$pro_img_3d);
                            }
                        }
                    }
                }
                //ed images uploading
                $_SESSION['product_update']="Product Updated";
                header('location:inventory.php');
            }
            else{
                $_SESSION['product_notupdate']="Product Not Updated";
                header('location:inventory.php');
            }
        }
        else{
            $sql="UPDATE add_product SET name ='$productname',barcode='$barcode',affect='$invetoryaffect',cat_id='$catselect',
                unit='$unit',qty='$quantity',remiaing_qty='$quantity',alert_stock='$alertstock',product_cost='$productcost',sale_price='$saleprice',
                description='$description',product_place='$rack',pur_place='$productplace',main_pic='$target_file_img1'
                                                          WHERE id='$product_id'";
            if(mysqli_query($conn,$sql)){
                //other_image_upload
                $total = count($_FILES['otherpics']['name']);
                $tmpFilePathcheck=$_FILES['otherpics']['tmp_name'];
                if($total >=1 && $tmpFilePathcheck[0]!=""){
                    $del_img="DELETE FROM product_images where product_id='$product_id'";
                    if(mysqli_query($conn,$del_img)or die("Something Went Wrong")){
                        for($i=0; $i<$total; $i++){
                            $tmpFilePath=$_FILES['otherpics']['tmp_name'][$i];
                            if($tmpFilePath != ""){
                                $img_name = $_FILES['otherpics']['name'][$i];
                                $image_path="products/" .$img_name;
                                $path= move_uploaded_file($_FILES["otherpics"]["tmp_name"][$i], $image_path);
                                $pro_img="insert into product_images (pro_other_img,product_id) values('$image_path','$product_id')";
                                mysqli_query($conn,$pro_img);
                            }
                        }
                    }
                }
                //end of other images uploading
                //3d_image_upload
                $total_3d = count($_FILES['thirdpics']['name']);
                $tmpFilePathcheck_3d=$_FILES['thirdpics']['tmp_name'];
                if($total_3d >=1 && $tmpFilePathcheck_3d[0]!=""){
                    $del_img_3d="DELETE FROM product_3d_img where product_id='$product_id'";
                    if(mysqli_query($conn,$del_img_3d)or die("Something Went Wrong")){
                        for($t=0; $t<$total_3d; $t++){
                            $tmpFilePath_3d=$_FILES['thirdpics']['tmp_name'][$t];
                            if($tmpFilePath_3d != ""){
                                $img_name_3d = $_FILES['thirdpics']['name'][$t];
                                $image_path_3d="products/" .$img_name_3d;
                                $path_3d= move_uploaded_file($_FILES["thirdpics"]["tmp_name"][$t], $image_path_3d);
                                $pro_img_3d="insert into product_3d_img (3d_img,product_id) values('$image_path_3d','$product_id')";
                                mysqli_query($conn,$pro_img_3d);
                            }
                        }
                    }
                }
                //ed images uploading
                $_SESSION['product_update']="Product Updated";
                header('location:inventory.php');
            }
            else{
                $_SESSION['product_notupdate']="Product Not Updated";
                header('location:inventory.php');
            }
        }

    }
    break;
    case 'get_select':{
        $select=$_REQUEST['value'];
//        for($i=0;$i<count($select);$i++){
       $ids = join(",",$select);
        $sql="select * from seller where id not in ($ids)";
            $data=mysqli_query($conn,$sql);
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_assoc($data))
                {
                    $seller_id=$row['id'];
                    $name=$row['name'];
                    echo'<option value="'.$seller_id.'">'.$name.'</option>';
                }
            }
//        }
    }
    break;
    case 'get_all_select':{
//        for($i=0;$i<count($select);$i++){
        $ids = join(",",$select);
        $sql="select * from seller";
        $data=mysqli_query($conn,$sql);
        if(mysqli_num_rows($data)>0){
            while($row=mysqli_fetch_assoc($data))
            {
                $seller_id=$row['id'];
                $name=$row['name'];
                echo'<option value="'.$seller_id.'">'.$name.'</option>';
            }
        }
//        }
    }
        break;
    case'get_image':{
        $p_id=$_REQUEST['id'];
        $sql="select * from add_product where id ='$p_id'";
        $data=mysqli_query($conn,$sql);
        if(mysqli_num_rows($data)>0){
            $row=mysqli_fetch_assoc($data);
            $p_image=$row['main_pic'];
            if($p_image=='products/'){
                echo '<img src="products/No-image-available.png" width="100%" height="200px" >';
            }
            else {
                echo '<img src="' . $p_image . '" width="100%" height="200px" >';
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