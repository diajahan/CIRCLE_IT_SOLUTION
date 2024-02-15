<?php

function insertProducts(){
    // // Create connection
    // $conn = new mysqli("localhost", "root", "","demo_project");
    // // Check connection
    // if ($conn->connect_error) {
    //   die("Connection failed: ". $conn->connect_error);
    // }
    // echo "Connected successfully";
   $ch = curl_init();
   $url ="https://supplier.circle.com.bd/api/product-api";
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

   $response = curl_exec($ch);

   if($e=curl_error($ch)){

    echo $e;

   }else{

    $decode= json_decode($response,true);

    print_r($decode);

    echo "Not Found";

   }
   curl_close($ch);

}
?>
