<?php
  //Verificamos si el usuario ha iniciado sesión
  session_start();
  if (!isset($_SESSION["nombre"])) {
    header("Location: login.html");
  }

  //Eliminamos coche del carrito
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['eliminar'])) {
    $indice = $_POST['indice'];
    if (isset($_SESSION['carrito'][$indice])) {
        unset($_SESSION['carrito'][$indice]);
        $_SESSION['carrito'] = array_values($_SESSION['carrito']);
    }
}

  //Agregamos el coche al carrito
  $coche = $_POST["coche"];
  if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = array();
  }
  $_SESSION["carrito"][] = $coche;

  //Redireccionamos a la página principal  
  header("Location: index.php");
?>