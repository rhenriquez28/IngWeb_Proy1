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
if(isset($_GET["action"]))
{
	$action = $_GET["action"];
}
else
{
	$action = "gallery";
}
switch($action)
{
	case "gallery":
	$pView = new ProductsGalleryView($products);
	$pView->render();
	break;
	case "showProduct":
		$productID = 0;
		if(isset($_GET["productID"]))
		{
			$productID = intval($_GET["productID"]);
		}
	$pView = new ProductView($products[$productID]);
	$pView->render();
	break;
	case "search":
		$q="";
		if(isset($_GET["q"]))
		{
		 $q = $_GET["q"];
		}
		$q = strtolower($q);
		$len=strlen($q);
		$hint = "";
		$i=0;
		$productID=0;
    		foreach($products as $product) {
			if (stristr($product->getName(), $q)) {
				$productID=$i;
				$hint = $product->getName();
				}
			$i=$i+1;
			    }
		if ($hint=="") {
  $response="no suggestion";
} else {
  $response='<a style="color:grey" href=productsController.php?action=showProduct&productID='.$productID.'>'.$hint.'</a>';
}

//output the response
echo '<p style="color:grey">'.$response.'</p>';
		break;
}

?>
