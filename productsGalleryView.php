
<?php
require_once('View.php');
class ProductsGalleryView extends View{
  private $products;
  public function __construct($products){
	  parent::__construct();
	  $this->setProducts($products);
	  $this->setContent($this->generateProductCarousel());

  }
  public function setProducts($products)
  {
  	$this->products = $products;	
  }

  public function getProducts()
  {
  	return $this->products;
  }
  protected function generateProductCarousel()
  {
	  $tmp = '<div class ="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
';
	  $i =0;
foreach($this->getProducts() as $product)
{
	$tmp .= '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"';
		if($i==0){
			$tmp .=' class="active"';
		}       
	$tmp .= '></li>
';

$i = $i +1;
}
$tmp .='
</ol>
<div class ="carousel-inner">
';
	  $i = 0;
	  foreach($this->getProducts() as $product)
	  {
	  	$tmp .='<div class = "carousel-item';
		if($i ==0)
		{
			$tmp .= ' active';
		}
		$tmp .='">
			<img class="d-block w-100" src="img/test.jpg" alt ="'.$product->getName().'">
			<div class = "carousel-caption d-none d-md-block">
			<h3>'.$product->getName().'</h3>
			<p>'.$product->getPrice().'</p>';
			
	  $tmp .= '</div>
		  </div>';
$i = $i+1;
	  }
	  $tmp .='</div>
		   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
		  
		  </div></div>'; 
  	return($tmp);
  }
}
