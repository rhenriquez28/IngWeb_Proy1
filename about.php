<?php require_once("View.php");
$pView = new View();
$pView->setContent("
<h3>Sobre Nosotros</h3>
Nuestra historia tiene comienzos humildes. Despues de haber gastado todos sus ahorros tratando de obtener una licenciatura en Ingenieria de Software, nuestros fundadores Roderik Acevedo, Roy Henriquez y Carlos Tuñon (conocidos en grupo como el Dream Team) decidieron vender sus laptops con el fin de conseguir mas dinero para almenos seguir 2 semestres mas en la UTP. En medio del proceso se dieron cuenta que era mucho mas atractivo para ellos el aspecto de ventas que el de Ingenieria y decidieron salirse de la carrera y fundar la tienda virtual que visitas hoy en dia!x
");
$pView->render();
?>
