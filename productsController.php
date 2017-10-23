<?php
require_once('product.php');
require_once('productView.php');
require_once('productsGalleryView.php');
define("PRODUCTS_DEF_FILE","products.json");
$tmpJsonObjs = json_decode(file_get_contents(PRODUCTS_DEF_FILE),true);
$products = array();
foreach($tmpJsonObjs["products"] as $tmpJsonProduct)
{
  $tmpProduct = new Product();
  $tmpProduct->withJSON($tmpJsonProduct);
  array_push($products,$tmpProduct);
}
//$pView = new ProductView($products[0]);
$pView = new ProductsGalleryView($products);
$pView->render();


?>
