<?php
  //Verificamos si el usuario existe
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];

    //Verificamos si el usuario y contraseña son correctos
    if ($nombre == "Javier" && $contraseña == "1234") {
      // Iniciar sesión
      session_start();
      $_SESSION["nombre"] = $nombre;

      //Redireccionamos a la página principal
      header("Location: index.php");
    } else {
      echo "Usuario o contraseña incorrectos";
    }
  }
?>