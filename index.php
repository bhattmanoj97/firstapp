<?php
require_once("inc/functions.php");

$requests = $_GET;
$hmac = $_GET['hmac'];
$serializeArray = serialize($requests);
$requests = array_diff_key($requests, array('hmac' => ''));
ksort($requests);
echo $shop;
$token = "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";
$shop = "shopbhatt";

$collectionList = shopify_call($token, $shop, "/admin/api/2020-07/custom_collections.json", array(), 'GET');
$collectionList = json_decode($collectionList['response'], JSON_PRETTY_PRINT);
$collection_id = $collectionList['custom_collections'][0]['id'];

$array = array("collection_id"=>$collection_id);
$collects = shopify_call($token, $shop, "/admin/api/2020-07/products.json", $array, 'GET');
$collects = json_decode($collects['response'], JSON_PRETTY_PRINT);
print_r($collects);
?>
