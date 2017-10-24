<?php
require_once("View.php");

$pView = new View();
$pView->setContent('
<h2>OFERTASSSSSS!!!!!!</h2>
<h5>99.9999999999999% de descuento en la vigesimo quinta compra de una de estas laptops.</h5>
			<div class="row"><div class ="col">
			<div class="card card-product">
			<img class="card-img-top" src="/img/asus_zen.jpg" alt="img">
			<div class ="card-block">
			<h4 class ="card-title">Asus Zenbook UX310UA</h4>
			<p class ="card-text">He aquí la Asus ZenBook UX310UA, una computadora portátil que evita el elevado precio de la Dell XPS 13 sin comprometer el rendimiento. No se ve ni se siente tan bien como el anterior de Dell, y la ...</p>
			</div>
			</div>
			</div>
			<div class ="col">
			<div class="card card-product">
			<img class="card-img-top" src="/img/lenovo_yoga.jpg" alt="img">
			<div class ="card-block">
			<h4 class ="card-title">Lenovo Yoga Book</h4>
			<p class ="card-text">Si buscas una laptop barata que ofrezca algo un poco especial, no busques más, el Lenovo Yoga Book 2017. Como con todos los dispositivos de Yoga, la pantalla se pliega para que puedas usarla como tab...</p>
			</div>
			</div>
			</div>
			<div class ="col">
			<div class="card card-product">
			<img class="card-img-top" src="/img/apple_mac.jpg" alt="img">
			<div class ="card-block">
			<h4 class ="card-title">Apple Macbook Pro with Touch Bar</h4>
			<p class ="card-text">Si buscas la mejor y más nueva laptop de Apple, te sugerimos que abras la Macbook Pro de 13 pulgadas con Touch Bar. A pesar de las afirmaciones de Microsoft de que su Surface Book 2 es dos veces más...</p>
			</div>
			</div>
			</div>
			</div>');

$pView->render();



?>
