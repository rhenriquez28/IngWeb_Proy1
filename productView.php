<?php
class ProductView extends View{
  private $product;
  public function __construct($product){
    $this->product = $product;
    $this->content = '
      <h2>'.product->getName().'</h2>
      <img src="'.product->imageURL().'">
      <p>'.$product->description.'</p>
      <p>Price: '.$product->price.'
        ';
  }
}


 ?>
