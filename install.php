<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "08b22714d544265d95b679ec26bdbcaf";
$scopes = "read_orders,write_orders,read_products,write_products";
$redirect_uri = "http://localhost/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
