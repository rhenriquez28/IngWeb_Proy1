
<?php
require_once('View.php');
class ProductsGalleryView extends View{
  private $products;
  public function __construct($products){
	  parent::__construct();
	  $this->setProducts($products);
	  $this->setContent($this->generateProductCarousel());
	  $this->setContent($this->getContent().$this->generateCards());

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
			<a href="productsController.php?action=showProduct&productID='.$i.'"><img class="d-block img-fluid" src="'.$product->imageURL().'" alt ="'.$product->getName().'"></a>
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

  public function generateCards()
  {
	  $tmp="";
	  $products = $this->getProducts();
	  $iProduct = 0;
	  for($i=0;$i<round(count($products)/3,PHP_ROUND_HALF_ODD);$i++)
	  {
	  	$tmp .='<div class="row">';
	  	for($x=0;$x<4 && $iProduct < count($products);$x++)
		{
			$tmp .='<div class ="col">
			<div class="card card-product">
			<img class="card-img-top" src="'.$products[$iProduct]->imageURL().'" alt="img">
			<div class ="card-block">
			<h4 class ="card-title">'.$products[$iProduct]->getName().'</h4>
			<p class ="card-text">'.substr($products[$iProduct]->getDescription(),0,200).'...</p>
			<a style ="margin-left:20px;" class = "btn btn-primary" href="productsController.php?action=showProduct&productID='.$iProduct.'">Ver</a>
			</div>
			</div>
			</div>
			';
		$iProduct++;
		}
		$tmp .='</div>';
	  }
	return($tmp);
  
  }
}
