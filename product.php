<?php
class Product {
  private $name;
  private $price;
  private $description;
  private $image;
  private $category;
  protected $imgsLocation = "/img/";

  public function withJSON($jsonObj){
    $this->name = $jsonObj["name"];
    $this->price = $jsonObj["price"];
    $this->description = $jsonObj["description"];
    $this->image = $jsonObj["image"];
    $this->category = $jsonObj["category"];
  }

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

  public function imageURL(){
    return $imgsLocation.$image;
  }
}
 ?>
