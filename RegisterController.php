<?php
require_once("RegisterView.php");
require_once("RegisterResultView.php");
require_once("person.php");
if(isset($_GET["action"]))
{
	$action = $_GET["action"];
}
else
{
	$action = "showRegisterForm";
}
switch($action)
{
	case "showRegisterForm":
	$view = new RegisterView();
	$view->render();
		break;
	case "showRegisterResult":
	$person = new Person();
	$person->withArray($_GET);
	$view = new RegisterResultView($person);
	$view->render();
		break;
}


?>
