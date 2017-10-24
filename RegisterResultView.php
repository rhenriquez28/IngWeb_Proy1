
<?php
require_once('View.php');
class RegisterResultView extends View{
  private $person;
  public function __construct($person){
	  parent::__construct();
	  $this->person = $person;
	  $tmpContent =	  '
<div class ="alert alert-success">
El registro fue un exito!
</div>
      <p>Nombre: '.$person->getName().'</p>
      <p>Apellido: '.$person->getLastName().'"</p>
<p>Pais: '.$person->getCountry().'</p>
<p>Province: '.$person->getProvince().'</p>
<p>City: '.$person->getCity().'</p>
      <p>Address: '.$person->getAddress().'</p>
  <p>Dia de nacimiento: '.$person->getBirthdate()->format("d-m-Y").'</p>
<p>Edad: '.$person->getAge().'</p>
<p>Sign: '.$person->getZodiacal().'</p>
<p>Interests</p>
<ul>
';
foreach($this->interests as $interest)
{
	$tmpContent .= '<li>'.$interest.'</li>';
}
$tmpContent .= '</ul>';
$this->setContent($tmpContent);
  }
}


 ?>
