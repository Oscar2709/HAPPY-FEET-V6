
<?php
include("../conexion/conexion.php");

$con  = new conexion ();
$c = $con-> conectando();
$query = "select * from imagenes";
$ejecuta = mysqli_query ($C,$query);
$arreglo = mysqli_fetch_array ($ejecuta);
?>

