<?php
require_once('../model/model_usuarios.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$insertarUsuarios = NEW Model;
$email = $_POST["cliente_email_reg"];
$clave = $_POST["cliente_clave_1_reg"];
$insertarUsuarios->insertarUsuarios($email,$clave);
?>