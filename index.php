<?php
foreach($collects as $collect){ 
    foreach($collect as $key => $value){ 
    	$products = shopify_call($token, $shop, "/admin/08b22714d544265d95b679ec26bdbcaf/2021-01/products/".$value['product_id'].".json", array(), 'GET');
		$products = json_decode($products['response'], JSON_PRETTY_PRINT);
		echo $products['product']['title'];
    }
}
?>
