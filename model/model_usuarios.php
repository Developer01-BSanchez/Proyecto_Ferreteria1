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
public function login($correo,$clave){
  try{
	$sqlconsultar="SELECT * FROM usuario WHERE usu_email='$correo' and usu_contrasena = '$clave'";
	$resultado = $this->db->activeConnection()->query($sqlconsultar)->fetch();
	if ($resultado){
        $tipo_usuario = $resultado['tipo_usuario_id'];
        if($tipo_usuario=='2'){
            $_SESSION['correo']= $correo;
            header ('location:../view/cliente/index_cliente.php');
        }elseif($tipo_usuario=='1'){
            $_SESSION['correo']= $correo;
            header ('location:../view/admin/index_admin.php');
        }else{
            header ('location:');
        }
	}else{
        header ('location:../index.php'); 
    //Cerrar sesion
    session_destroy();
	}
   
	}
	catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
}


public function listarUsuariosActualizar($id){
    $sqlconsultar="SELECT * FROM usuario WHERE usu_id=$id";
    return $this->db->activeConnection()->query($sqlconsultar)->fetch();
}
public function listarUsuariosProcedimientos(){
  try{
    $listarUsuarios = $this->db->activeConnection()-> prepare("CALL select_usuario()");

	$listarUsuarios->execute();
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
	
}
public function listarUsuarios(){
    $sql="SELECT * FROM usuario";
    return $this->db->activeConnection()->query($sql)->fetchAll();
}
public function insertarUsuariosProcedimientos($nombre,$contrasena,$cargo){
	try{
   
    $insertarUsuarios = $this->db->activeConnection()-> prepare("CALL insertar_usuario(:nombre,:contrasena,:cargo)");
    $insertarUsuarios->bindParam(":nombre",$nombre,PDO::PARAM_STR);
    $insertarUsuarios->bindParam(":contrasena",$contrasena,PDO::PARAM_STR);
    $insertarUsuarios->bindParam(":cargo",$cargo,PDO::PARAM_STR);
	$insertarUsuarios->execute();
  header("location: ../../../vista/administrador_academico/usuarios.php");
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
	
}
public function insertarUsuarios($email,$clave){
    try{
        $sqlconsultar="SELECT * FROM usuario WHERE usu_email='$email' or usu_contrasena = '$clave'";
	    $resultado = $this->db->activeConnection()->query($sqlconsultar)->fetch();
        if($resultado){
            echo 
            '<script>
            alert("El correo o la Contraseña ya existen, por favor ingrese uno nuevo");
            location.href ="../view/registration_usuario.php"
            </script>';
        }else{
            echo '<script>alert("Usuario Ingresado");</script>';
            $sql="INSERT INTO usuario(usu_email,usu_contrasena,tipo_usuario_id)VALUES('$email','$clave','2')";
            $this->db->activeConnection()-> prepare($sql)->execute();
            header("location: ../view/registration_usuario.php");
        }
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
}
public function actualizarUsuariosProcedimientos($id,$nombre,$contrasena){
	try{
   
    $actualizarUsuarios = $this->db->activeConnection()-> prepare("CALL actualizar_usuario(:id,:nombre,:contrasena)");
    $actualizarUsuarios->bindParam(":id",$id,PDO::PARAM_INT);
    $actualizarUsuarios->bindParam(":nombre",$nombre,PDO::PARAM_STR);
    $actualizarUsuarios->bindParam(":contrasena",$contrasena,PDO::PARAM_STR);
	$actualizarUsuarios->execute();
  header("location: ../../../vista/administrador_academico/usuarios.php");
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
	
}
public function actualizarUsuarios($nombre,$contrasena,$cargo,$id){
	try{
    $sql="UPDATE usuario SET usu_nombre='$nombre' usu_contrasena='$contrasena' usu_cargo='$cargo' where usu_id = $id";
    $this->db->activeConnection()-> prepare($sql)->execute();
    header("location: ../vista/administrador_academico/usuarios.php");
	}
	catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
}
public function eliminarUsuariosProcedimientos($id){
	try{
   
    $eliminarUsuarios = $this->db->activeConnection()-> prepare("CALL eliminar_usuario(:id)");
    $eliminarUsuarios->bindParam(":id",$id,PDO::PARAM_INT);
	$eliminarUsuarios->execute();
  header("location: ../../../vista/administrador_academico/usuarios.php");
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
	
}
public function eliminarUsuarios($id){
	try{
	$sqlconsultar="SELECT * FROM usuario WHERE usu_id=$id";
	$resultado = $this->db->activeConnection()->query($sqlconsultar)->fetch();
	if ($resultado){
	$sql="DELETE FROM usuario where usu_id = $id";
    $this->db->activeConnection()-> prepare($sql)->execute();
    print_r('se eliminó el estudiante correctamente');
	}else{
	 print_r('Este estudiante no existe en la base de datos, por favor verifique los datos');	
		
	}
   
	}
	catch(PDOexception $men){
    var_dump($men->getMessage());
      
    }
}

}
?>
<p></p>
<script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>
<script src="../vista/js/jquery.js"></script>
<script src="../vista/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>