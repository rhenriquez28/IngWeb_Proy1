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
      <p>Precio: '.$product->getPrice().'</p>
<p><span class="bold">Categoria</span>: '.$product->getCategory().'</p>
<div class="card">
  <div class="card-header">
    Descripccion
  </div>
  <div class="card-block">
    <p class="card-text">'.$product->getDescription().'</p>
  </div>
</div>
<br>
    <a href="#" class="btn btn-success">Comprar!</a>
';
$this->setContent($tmpContent);
  }
}


 ?>
