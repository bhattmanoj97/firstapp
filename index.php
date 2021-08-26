<?php
 
$url = "https://08b22714d544265d95b679ec26bdbcaf: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@shopbhatt.myshopify.com/admin/api/2021-07/products.json";
 
$shopcurl = curl_init();
curl_setopt($shopcurl, CURLOPT_URL, $url);
curl_setopt($shopcurl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($shopcurl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($shopcurl, CURLOPT_VERBOSE, 0);
curl_setopt($shopcurl, CURLOPT_HEADER, 1);
curl_setopt($shopcurl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($shopcurl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec ($shopcurl);
curl_close ($shopcurl);
echo "<pre>";
print_r($response);
 
?>
