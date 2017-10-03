<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Activar Software - En otra pagina</title>
  </head>
  <body>
    <?php
    if (isset($_POST["numSerie"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["email"]) && isset($_POST["pais"])) {
    echo "<h4>Esta es la informacion que ha sido proporcionada por el usuario para activar el software:</h4>";
    echo "<br>";
    echo "Numero de Serie: ".$_POST["numSerie"]."<br><br>";
    echo "Nombre: ".$_POST["nombre"]."<br><br>";
    echo "Apellido: ".$_POST["apellido"]."<br><br>";
    echo "Email: ".$_POST["email"]."<br><br>";
    echo "Direccion: ".$_POST["direccion"]."<br><br>";
    echo "Ciudad: ".$_POST["ciudad"]."<br><br>";
    echo "Provincia/Estado: ".$_POST["provincia"]."<br><br>";
    echo "Pais: ".$_POST["pais"]."<br><br>";
    echo "RUT/RUC/NIC/NIT/RIF/RFC/CI: ".$_POST["code"]."<br><br>";
    }else {
      echo "<h1>No introdujo todos los campos requeridos. Por favor retroceda e intentelo denuevo</h1>";
    }
     ?>
  </body>
</html>
