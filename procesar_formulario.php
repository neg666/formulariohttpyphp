<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $edad = $_POST["edad"];
  $comision = $_POST["comision"];
  $password = $_POST["password"];

  echo "Nombre: " . $nombre . "<br>";
  echo "Apellido: " . $apellido . "<br>";
  echo "Edad: " . $edad . "<br>";
  echo "Comision: " . $comision . "<br>";
  echo "Password: " . $password . "<br>";
}
?>
