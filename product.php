<?php
class Product {
  private $name;
          $price;
          $description;
          $image;
          $category;
  protected $imgsLocation;

  public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getImage(){
		return $this->image;
	}

	public function setImage($image){
		$this->image = $image;
	}

  public function getCategory(){
    return $this->category;
  }

  public function setCategory($category){
    $this->category = $category;
  }
}
 ?>
