<?php
include("../modelo/facturaModelo.php");
 
$obj = new pedido();
if($_POST)
{
    $obj->entrega_producto = $_POST['entrega_producto'];
    $obj->estado_factura = $_POST['estado_factura'];
    $obj->fecha_facturacion = $_POST['fecha_facturacion'];
    $obj->hora_factura = $_POST['hora_factura'];
    $obj->id_usuario = $_POST['id_usuario'];
    $obj->numero_factura = $_POST['numero_factura'];
    $obj->valor_factura = $_POST['valor_factura'];
    
    
}

if(isset($_POST['guarda']))
{
    $obj->agregar();
}
if(isset($_POST['modifica']))
{
$obj->modificar();
}
if(isset($_POST['elimina']))
{
$obj->eliminar();
}

$c = new Conexion();
$cone = $c->conectando();	
$sql = "select max(entrega_producto) from pedido ";
$rs1 = mysqli_query($cone,$sql);
$arreglo = mysqli_fetch_array($rs1);
//$obj->entrega_producto = $arreglo[0];
if($arreglo[0]>0){
    $suma=0;
    $numero = $arreglo[0];
    echo $numero;
    
    //echo $suma;
    $obj->entrega_producto = $suma;
}

$obj->fecha_facturacion = date('Y-m-d');
$obj->hora_factura  = date('H:i:s'); 
?>
