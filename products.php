<?php

$api_url = 'https://7a859ffcc3961df6e1c52d6dc93cf672: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@yourlibaasuae.myshopify.com';
$products_obj_url = $api_url .'/admin/api/2021-10/products.json';
$products_content = @file_get_contents( $products_obj_url );
$products_json = json_decode($products_content, true );
$products = $products_json['products'];
?>