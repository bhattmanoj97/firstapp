<?php
foreach($collects as $collect){ 
    foreach($collect as $key => $value){ 
    	$products = shopify_call($token, $shop, "/admin/dd76b5b85b961b69a9277bf161232f30/2021-01/products/".$value['product_id'].".json", array(), 'GET');
		$products = json_decode($products['response'], JSON_PRETTY_PRINT);
		echo $products['product']['title'];
    }
}
?>
