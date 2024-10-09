<?php
//Verificamos si el usuario ha iniciado sesión
session_start();
if (!isset($_SESSION["nombre"])) {
    header("Location: login.html");
    exit();
}

//Obtenemos la marca seleccionada
$marca = $_GET["marca"];

//Definimos los coches según la marca seleccionada
$coches_por_marca = [
    "Toyota" => ["Corolla", "Yaris", "RAV4"],
    "BMW" => ["X5", "M3", "i8"],
    "Audi" => ["A3", "Q7", "R8"]
];

//Verificamos si la marca existe en el array
if (array_key_exists($marca, $coches_por_marca)) {
    $coches = $coches_por_marca[$marca];
} else {
    echo "Marca no encontrada.";
    exit();
}

//Mostramos los coches de la marca seleccionada
echo "<h1>Coches de la marca $marca</h1>";
foreach ($coches as $coche) {
    echo "<form action='agregar_carrito.php' method='post'>
        <input type='hidden' name='coche' value='$coche'>
        <input type='submit' value='Comprar $coche'>
    </form>";
}
?>
