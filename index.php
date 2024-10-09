<?php
session_start();
if (!isset($_SESSION["nombre"])) {
header("Location: login.html");
}
$marcas = array("Toyota", "BMW", "Audi");
echo "<h1>Marcas de coches</h1>";
foreach ($marcas as $marca) {
echo "<a href='coche.php?marca=$marca'>$marca</a><br>";
}

echo "<h1>Carrito</h1>";
if (isset($_SESSION["carrito"])) {
    foreach ($_SESSION["carrito"] as $coche) {
      echo $coche . "<br>";
    }
  } else {
    echo "No hay coches en el carrito";
  }
?>