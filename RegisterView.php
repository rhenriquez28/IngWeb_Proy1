<?php
require_once('View.php');
class RegisterView extends View{

public function __construct()
{
 parent::__construct();
 $this->setHeader($this->getHeader().'<link rel="stylesheet" href="/css/master.css">');
 $tmp ='
      <h3>Registrate para poder comprar lo último de nuestro catalogo!</h3>
      <hr>
      <br>
      <form class="form register_form" method="get">
        <div>
         <input type="hidden" name="action" value="showRegisterResult"> 
            <label>Nombre <span id="ast">*</span>:</label>
            <input type="text" name="name" value="" placeholder="Carlos" required><br>
       
            <label>Apellido <span id="ast">*</span>:</label>
            <input type="text" name="lastName" value="" placeholder="Barrera" required><br>
         
            <label>Email <span id="ast">*</span>:</label>
            <input type="email" name="email" value="" pattern="~@ingweb\.com\.pa$~" placeholder="cbarrera@ingweb.com.pa" required ><br>
          
            <label>Birthdate:</label>
            <input type="date" name="birthdate" value="" placeholder ="d-m-y"><br>
            <label>Direccion:</label>
            <input type="text" name="address" value="" placeholder="Av. Voloshinov 5896"><br>
         
            <label>Ciudad:</label>
            <input type="text" name="city" value="" placeholder="Puerto Bondad"><br>
          
            <label>Provincia/Estado:</label>
            <input type="text" name="province" value="" placeholder="Aguirre"><br>
          
          
            <label>Pais <span id="ast">*</span>:</label>
            <select class="" name="country">
              <option value="other">Otro</option>
              <option value="PA">Panama</option>
            </select><br>
          
            <label for="">Tarjeta de Credito <span id="ast">*</span>:</label>
            <input type="text" name="creditCard" value="" placeholder="XXXX-XXXX-XXXX-XXXX" required><br>
          
            <label for="">Intereses<span id="ast">*</span>:</label>
            <input type="checkbox" name="interests" value="gaming" >
            <input type="checkbox" name="interests" value="ofimatic" >
            <input type="checkbox" name="interests" value="video editting">
            <input type="checkbox" name="interests" value="internet">
            <p id="p2">Los campos marcados con (<span id="ast">*</span>) son obligatorios.</p>
          
          
            <button class="btn btn-primary" type="submit" name="button">Enviar</button>
      </div>
      </form>

';
	$this->setContent($tmp);

}


}
