<?php
class Conexion{
    public function activeConnection()
    {
        try{
            $dsn="mysql:host=localhost;dbname=proyecto_ferreteria;port=3308;charset=utf8";
            return new PDO($dsn,"root","");
        }
        catch(\throwable $men){
            print_r('LA CONEXIÓN A AL BASE DE DATOS FALLÓ'.$men->getMessage());
        }
    }
}
?>