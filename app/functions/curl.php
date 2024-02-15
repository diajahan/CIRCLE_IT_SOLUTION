<?php

function connection($id){
// Create connection
$conn = new mysqli("localhost", "bdcleqiq_shuvo", "shuvo123@#","bdcleqiq_tukitaki");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}
// echo "Connected successfully";

$sql = "SELECT customer_name,phone,shipping_address,total_price,delivery_charge FROM orders where id = '$id'";
$query = $conn->query($sql) or die($conn->error);
$row = $query->fetch_assoc();

$item = "SELECT sku,qty,prod_size,unit_price FROM order_items where order_id='$id'";
$query2 = $conn->query($item) or die($conn->error);
$row2 = $query2->fetch_all(MYSQLI_ASSOC);



$form_data = array(
'customer_name' => $row['customer_name'],
'phone' => $row['phone'],
'shipping_address' => $row['shipping_address'],
'total_price' => $row['total_price'],
'delivery_charge' => $row['delivery_charge']
);

$itms=array();
foreach($row2 as $value){
    $itms [] = $value;
}
// echo '<pre>';
// print_r($itms);
// echo '</pre>';
$postfields = array_merge($form_data,$itms);
$str = http_build_query($postfields);
$ch=curl_init();
$options=array(
    CURLOPT_URL=>'https://supplier.circle.com.bd/app/functions/data.php',
    CURLOPT_POST=>1,
    CURLOPT_POSTFIELDS=> $str,
    CURLOPT_RETURNTRANSFER=>1

);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
curl_close($ch);
// // .......................................................................

}
?>
