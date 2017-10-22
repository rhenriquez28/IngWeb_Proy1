<?php
require('product.php');
define("PRODUCTS_DEF_FILE","");

$tmpJsonObjs = json_decode(file_get_contents(PRODUCTS_DEF_FILE),true);
$products = array();
foreach($tmpJsonObjs->products as $tmpJsonProduct)
{
  $tmpProduct = new Product();
  $tmpProduct->withJSON($tmpJsonProduct);
  array_push($products,$tmpProduct);
}



?>
