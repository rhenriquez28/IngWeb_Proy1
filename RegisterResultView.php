
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
<p>Edad: '.$person->getAge().'</p>
<p>Provincia: '.$person->getProvince().'</p>
<p>Ciudad: '.$person->getCity().'</p>
      <p>Direccion: '.$person->getAddress().'</p>
  <p>Fecha de Nacimiento: '.$person->getBirthdate()->format("d-m-Y").'</p>
<p>Tarjeta de Credito: '.$person->getCreditCard().'
<p>Signo Zodiacal: '.$person->getZodiacal().'</p>
<p>Interests</p>
<ul>
';
foreach($person->getInterests() as $interest)
{
	$tmpContent .= '<li>'.$interest.'</li>';
}
$tmpContent .= '</ul>
<a class="btn btn-success" href="productsController.php">Productos</a>';

$this->setContent($tmpContent);
  }
}


 ?>
