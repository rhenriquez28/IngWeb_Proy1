<?php
require_once('View.php');
class ProductView extends View{
  private $product;
  public function __construct($product){
	  parent::__construct();
	  $this->product = $product;
$tmpContent =	  '
      <h2>'.$product->getName().'</h2>
      <img src="'.$product->imageURL().'">
      <p>Price: '.$product->getPrice().'</p>
<p>Category: '.$product->getCategory().'</p>
  <p>Description: '.$product->getDescription().'</p>
';
$this->setContent($tmpContent);
  }
}


 ?>
