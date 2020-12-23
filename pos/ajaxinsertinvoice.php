<?php
include('../connection.php');
$arrobj = $_GET['pos'];

$invoice_num= $_GET['invoice'];
$status="return";
$total_bill = $_GET['total_amount'];
$jsonobj = json_decode($arrobj, true);

$numItems = count($jsonobj);
$i = 0;
foreach($jsonobj as $key => $item ) {
    if(++$i < $numItems) {
        $sql = "insert into sale_details  (invoice_num, status, product_id, product_name, price, quatity, total_price)
            VALUES ('#" . $invoice_num . "','" . $status . "' ,'" . $item['product_id'] . "', '" . $item['name'] . "', '" . $item['price'] . "', '" . $item['quantity'] . "', '" . $item['total'] . "')";
        mysqli_query($conn, $sql);

        $sqlpro = "select * from add_product where id='".$item['product_id']."'";
        $rowpro = mysqli_query($conn, $sqlpro);
        $datapro = mysqli_fetch_assoc($rowpro);

        $sqlupdatepro = "UPDATE add_product SET remiaing_qty='".($datapro['remiaing_qty'] + $item['quantity'])."' WHERE id='".$item['product_id']."'";
        mysqli_query($conn, $sqlupdatepro);
    }
}
$sql="insert into sales  (invoice_num, total_bill, bill_date, status)
        VALUES ('#".$invoice_num."', '".$total_bill."', '".$bill_date."' , '".$status."')";
mysqli_query($conn, $sql);
//echo $_GET['pos'];
?>