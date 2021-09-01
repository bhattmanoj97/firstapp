<?php
require_once("inc/functions.php");

$requests = $_GET;
$hmac = $_GET['hmac'];
$serializeArray = serialize($requests);
$requests = array_diff_key($requests, array('hmac' => ''));
ksort($requests);
// echo $shop;
$token = "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";
$shop = "shopbhatt";

// $collectionList = shopify_call($token, $shop, "/admin/api/2020-07/custom_collections.json", array(), 'GET');
// $collectionList = json_decode($collectionList['response'], JSON_PRETTY_PRINT);
// $collection_id = $collectionList['custom_collections'][0]['id'];

// $array = array("collection_id"=>$collection_id);
// $collects = shopify_call($token, $shop, "/admin/api/2020-07/products.json", $array, 'GET');
// $collects = json_decode($collects['response'], JSON_PRETTY_PRINT);
// print_r($collects);

$collection_id = 276995047597;
$array = array("collection_id"=>$collection_id);
$collects = shopify_call($token, $shop, "/admin/api/2020-07/collects.json", $array, 'GET');
$collects = json_decode($collects['response'], JSON_PRETTY_PRINT); ?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table>
	<tr>
	  <th>Product Id </th>
	  <th>Product Title </th>
          <th>Price </th>
          <th>Product Vendor </th>
	 </tr>
<?php
foreach($collects as $collect){
    foreach($collect as $key => $value){
    	$products = shopify_call($token, $shop, "/admin/api/2019-07/products/".$value['product_id'].".json", array(), 'GET');
		$products = json_decode($products['response'], JSON_PRETTY_PRINT); ?>
                print_r($products['product']);
         <tr>
	  <td> <?php echo $products['product']['id'];    ?> </td>
	  <td> <?php echo $products['product']['title']; ?> </td>
          <td> <?php echo $products['product']['price']; ?> </td>
          <td> <?php echo $products['product']['vendor']; ?> </td>
          </tr>

    <?php }
} ?>
</table>

<?php 

?>
