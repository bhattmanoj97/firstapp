<?php
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	if (!defined('08b22714d544265d95b679ec26bdbcaf') || !defined('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') || isEmpty(API_KEY) || isEmpty(SECRET)) die('Both constants API_KEY and SECRET must be defined in the config file.');
		
	/* GET VARIABLES */
	$url = (isset($_GET['shop'])) ? mysql_escape_string($_GET['shop']) : '';
	$token = (isset($_GET['t'])) ? mysql_escape_string($_GET['t']) : '';
	$timestamp = (isset($_GET['timestamp'])) ? mysql_escape_string($_GET['timestamp']) : '';
	$signature = (isset($_GET['signature'])) ? mysql_escape_string($_GET['signature']) : '';
	$params = array('timestamp' => $timestamp, 'signature' => $signature);
	$url = 'shopbhatt.myshopify.com';
	
	
	$api = new Session($url, $token, API_KEY, SECRET, true);
	

	//if the Shopify connection is valid
	if ($api->valid()){
		if (isEmpty($token)){
			echo("Empty Token");			
		}
		
		echo("<br>Shopify Connection Valid");
				
		//Testing retrieval of some information...
		$storeProducts = $api->product->get();
		foreach ($storeProducts as $product){
      		echo $product['title'].'<br />';
		}	
			
	}
	else	{
		echo("<br>Warning: API Object Connection Not Valid!!!<br>");
	}	
	
?>
