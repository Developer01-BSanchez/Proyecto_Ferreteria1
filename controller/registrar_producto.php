<?php
require_once('../model/model_productos.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$insertarProductos = NEW Model;
$nombre = $_POST["nombre_producto"];
$cantidad = $_POST["cantidad_producto"];
$imagen = $_FILES["imagen_producto"]["name"];
$archivo = $_FILES["imagen_producto"]["tmp_name"];
$precio = $_POST["precio_producto"];
$peso = $_POST["peso_producto"];
$medidas = $_POST["medidas_producto"];
$fechaC = $_POST["fecha_c_producto"];
$caracteristicas = $_POST["caracteristicas_producto"];
$estado = $_POST["estado_producto"];
$categoria = $_POST["categoria_producto"];
$insertarProductos->insertarProductos($nombre,$cantidad,$imagen,$archivo,$precio,$peso,$medidas,$fechaC,$caracteristicas,$estado,$categoria);
?>