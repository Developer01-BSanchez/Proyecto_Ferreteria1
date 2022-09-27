<?php
require_once('../model/model_cliente.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$insertarCliente = NEW Model;
$tipodoc = $_POST["cliente_tipo_documento_reg"];
$numdoc = $_POST["cliente_numero_documento_reg"];
$nombre = $_POST["cliente_nombre_reg"];
$apellido = $_POST["cliente_apellido_reg"];
$telefono = $_POST["cliente_telefono_reg"];
$direccion = $_POST["cliente_direccion_reg"];
$insertarCliente->insertarCliente($tipodoc,$numdoc,$nombre,$apellido,$telefono,$direccion);
?>