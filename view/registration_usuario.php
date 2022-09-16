<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="img/logo-icono.png">
	<title>Registro</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="./css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="./js/sweetalert2.js" ></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">

</head>
<body id="main-body">

	<!-- Header -->
	<header class="header full-box bg-white">
		<div class="header-brand full-box">
	        <a href="../index.php">
	            <img src="img/logo-escoinfer.png" alt="Designlopers" class="img-fluid">
	        </a>
	    </div>
	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold scroll" onclick="show_menu_mobile()" >
	            <ul class="list-unstyled full-box" >
	                <li>
						<a>Ferreteria Escoinfer Escobillas</a>
					</li>
					<li>
						<a>[Cree su cuenta personal]</a>
					</li>
	                <li>
	                    <a id="inicio" href="../index.php" >Inicio</a>
	                </li>
	            </ul>
	        </nav>
	        <div class="dropdown-menu div-bordered popup-login" aria-labelledby="userMenu">
	            <p class="text-center" style="padding-top: 10px;">
	                <i class="fas fa-user-circle fa-3x"></i><br>
	                <small>Nombre de usuario</small>
	            </p>
	            <a class="dropdown-item" href="javascript:void(0);">
	                <i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard
	            </a>
	            <a class="dropdown-item" href="javascript:void(0);">
	                <i class="fas fa-sign-out-alt"></i> &nbsp; Cerrar sesión
	            </a>
	        </div>

	        <a href="javascript:void(0);" class="header-button full-box text-center d-lg-none" title="Menú" onclick="show_menu_mobile()" >
	            <i class="fas fa-bars"></i>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<div class="container container-web-page">
	    <h3 class="font-weight-bold poppins-regular text-uppercase">Crear cuenta</h3>
	    <p class="text-justify">Al crear una cuenta en nuestro sitio web usted acepta nuestros <a href="#">términos y condiciones</a>. La información introducida en el formulario debe de ser clara, precisa y legitima. Para crear una cuenta debe de llenar todos los campos que son obligatorios marcados con el icono <i class="fab fa-font-awesome-alt"></i></p>
	    <hr>
	    <div class="row">
	        <div class="col-12">
	            <form action="../controller/registrar_usuario.php" method="POST" autocomplete="off" style="padding: 15px;">

	                <br><br>

	                <fieldset>
	                    <legend><i class="fas fa-user-lock"></i> &nbsp; Información de inicio de sesión</legend>
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-12 col-md-12">
	                                <div class="form-outline mb-4">
	                                    <input type="email" class="form-control" name="cliente_email_reg" id="usuario_email" maxlength="47" required="">
	                                    <label for="cliente_email" class="form-label">Email <i class="fab fa-font-awesome-alt"></i></label>
	                                </div>
	                            </div>
	                            <div class="col-12 col-md-12">
	                                <div class="form-outline mb-4">
	                                    <input type="password" class="form-control" name="cliente_clave_1_reg" id="cliente_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
	                                    <label for="cliente_clave_1" class="form-label">Contraseña <i class="fab fa-font-awesome-alt"></i></label>
	                                </div>
	                            </div>
								<!--
	                            <div class="col-12 col-md-12">
	                                <div class="form-outline mb-4">
	                                    <input type="password" class="form-control" name="cliente_clave_2_reg" id="cliente_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" >
	                                    <label for="cliente_clave_2" class="form-label">Repetir contraseña <i class="fab fa-font-awesome-alt"></i></label>
	                                </div>
	                            </div>-->
	                        </div>
	                    </div>
	                </fieldset>

	                <p class="text-center" style="margin-top: 40px;">
	                    <button type="submit" class="btn btn-info btn-sm"><i class="far fa-paper-plane"></i> &nbsp; CREAR CUENTA</button>
	                </p>
	                <p class="text-center">
	                    <small>Los campos marcados con <i class="fab fa-font-awesome-alt"></i> son obligatorios</small>
	                </p>
	            </form>
	        </div>
	    </div>
	</div>
	
	
	<!-- MDBootstrap V5 -->
	<script src="./js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="./js/main.js" ></script>
</body>
</html>