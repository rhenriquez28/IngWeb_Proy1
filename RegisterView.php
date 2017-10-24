<?php
require_once('View.php');
class RegisterView extends View{

public function __construct()
{
 parent::__construct();
 //$this->setHeader($this->getHeader().'<link rel="stylesheet" href="/css/master.css">');
 $tmp ='
      <h3>Registrate para poder comprar lo último de nuestro catalogo!</h3>
      <hr>
      <br>

      <form class="form register_form" method="get">
	<div class ="form-group">
<div class ="row">
<div class ="col">
         <input  type="hidden" name="action" value="showRegisterResult"> 
            <label>Nombre <span class="ast">*</span>:</label>
            <input class ="form-control"type="text" name="name" value="" placeholder="Carlos" required><br>
       </div>
<div class ="col">
            <label>Apellido <span class="ast">*</span>:</label>
            <input class="form-control" type="text" name="lastName" value="" placeholder="Barrera" required><br>
</div>	 
</div>
            <label>Email <span class="ast">*</span>:</label>
            <input class="form-control" type="email" name="email" value="" pattern="^[a-zA-Z0-9_+-]+@ingweb.com.pa$" placeholder="cbarrera@ingweb.com.pa" required ><br>
          
            <label>Direccion:</label>
            <input class="form-control" type="date" name="birthdate" value="" placeholder ="mm/dd/yyyy"><br>
            <label>Direccion:</label>
            <input class="form-control" type="text" name="address" value="" placeholder="Av. Voloshinov 5896"><br>
         <div class="row">
		<div class="col">     
	    <label>Ciudad:</label>
            <input class="form-control" type="text" name="city" value="" placeholder="Puerto Bondad"><br>
	  	</div>
	<div class="col">
            <label>Provincia/Estado:</label>
            <input class="form-control" type="text" name="province" value="" placeholder="Aguirre"><br>
          </div>
          <div class="col">
            <label>Pais <span class="ast">*</span>:</label>
            <select class="form-control" name="country">
              <option value="Otro">Otro</option>
              <option value="Panama">Panama</option>
	    </select>
	</div>
	</div>
<br>
          
            <label for="">Tarjeta de Credito <span class="ast">*</span>:</label>
            <input type="text" name="creditCard" value="" placeholder="XXXX-XXXX-XXXX-XXXX" required><br>
          
            <label for="">Intereses<span class="ast">*</span>:</label>
            <input type="checkbox" name="interests[]" value="gaming" >
            <input type="checkbox" name="interests[]" value="ofimatic" >
            <input type="checkbox" name="interests[]" value="video editting">
            <input type="checkbox" name="interests[]" value="internet">
            <p id="p2">Los campos marcados con (<span class="ast">*</span>) son obligatorios.</p>
          
          
            <button class="btn btn-primary" type="submit" name="button">Enviar</button>
      </div>
      </form>

';
	$this->setContent($tmp);

}


}
