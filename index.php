<?php
$shop_domain = 'https://shopbhatt.myshopify.com';
$token = 'e4c17832f092a9041cbba1065e9dacaa';
$key = '08b22714d544265d95b679ec26bdbcaf';
$secret = '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';

$client = new ShopifyClient($shop_domain, $token, $api_key, $secret);

print_r($client);
?>
