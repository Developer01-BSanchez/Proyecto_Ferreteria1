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
public function insertarProductos($nombre,$cantidad,$imagen,$archivo,$precio,$peso,$medidas,$fechaC,$caracteristicas,$estado,$categoria){
    try{
        $sqlconsultar="SELECT * FROM producto WHERE pro_nombre='$nombre'";
	    $resultado = $this->db->activeConnection()->query($sqlconsultar)->fetch();
        if($resultado){
            echo '
            <script>
            alert("El producto ya existe");
            location.href = "../view/admin/agregar_productos.html";
            </script>';
        }else{
            $ruta = "../view/img/productos/".$imagen;
            $base_datos = "../img/productos/".$imagen;

            move_uploaded_file($archivo,$ruta);

            $sql="INSERT INTO producto(pro_nombre, pro_cantidad, pro_imagen, pro_precio_unidad, pro_peso, pro_medidas, pro_fecha_caducidad, pro_caracteristicas, pro_estado, categoria_id)VALUES('$nombre','$cantidad','$base_datos','$precio','$peso','$medidas','$fechaC','$caracteristicas','$estado','$categoria')";
            $this->db->activeConnection()-> prepare($sql)->execute();
            header("location: ../view/admin/index_admin.php");
        }
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
}
}