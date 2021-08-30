<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "c684692cc46bd5be2c48cf4b800fb4e6";
$scopes = "read_orders,write_orders,read_products,write_products";
$redirect_uri = "http://localhost/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
