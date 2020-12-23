<?php
include('../connection.php');
$return_arr = array();
$sql="select * from sale_details where invoice_num='#".$_GET['value']."'";
$row=mysqli_query($conn,$sql) ;
while($data=mysqli_fetch_assoc($row)){
    $row_array['id'] = $data['product_id'];
    $row_array['name'] = $data['product_name'];
    $row_array['quatity'] = $data['quatity'];
    $row_array['price'] = $data['price'];
    $row_array['total_price'] = $data['total_price'];

    array_push($return_arr,$row_array);
}
echo json_encode($return_arr);
?>