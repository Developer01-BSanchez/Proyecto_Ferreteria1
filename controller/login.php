<?php
require_once('../model/model_usuarios.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$login = NEW Model;
$correo= $_POST['login_email'];
$clave= $_POST['login_clave'];
$login->login($correo,$clave);
?>