
<?php
require_once('View.php');
class RegisterResultView extends View{
  private $person;
  public function __construct($person){
	  parent::__construct();
	  $this->person = $person;
$tmpContent =	  '
      <h2>'.$person->getName().'</h2>
      <img src="'.$person->getLastName().'">
      <p>Price: '.$person->getAddress().'</p>
<p>Category: '.$person->getCountry().'</p>
  <p>Description: '.$person->getBirthdate().'</p>
';
$this->setContent($tmpContent);
  }
}


 ?>
