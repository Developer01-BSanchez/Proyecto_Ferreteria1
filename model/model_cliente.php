<?php
//Inicio de sesion
session_start();
require_once('conexion.php');
class Model{
private $db;
public function __Construct(){
    //INSTANCIART LA CLASE CONEXIÓN QUE SE ENCUENTRA EN EL ARCHIVO CONTROLADOR/CONEXIÓN.PHP
    $this->db = NEW Conexion;
}
/** */
public function insertarCliente($tipodoc,$numdoc,$nombre,$apellido,$telefono){
    try{ 
    $sql="INSERT INTO cliente(tipo_documento_id,cli_nombre,cli_apellido,cli_celular,cli_direccion)VALUES('$nombre','$contrasena','$cargo')";
    $this->db->activeConnection()-> prepare($sql)->execute();
    header("location: ../vista/administrador_academico/usuarios.php");
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
}
}
?>