<?php
foreach($collects as $collect){ 
    foreach($collect as $key => $value){ 
    	$products = shopify_call($token, $shop, "/admin/c684692cc46bd5be2c48cf4b800fb4e6/2021-01/products/".$value['product_id'].".json", array(), 'GET');
		$products = json_decode($products['response'], JSON_PRETTY_PRINT);
		echo $products['product']['title'];
    }
}
?>
