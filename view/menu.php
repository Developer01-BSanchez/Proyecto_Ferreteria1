<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="img/logo-icono.png">
	<title>Productos</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="js/sweetalert2.js" ></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="css/style.css">

</head>
<body id="main-body">

	<!-- Header -->
	<header class="header full-box bg-white">
	    <div class="header-brand full-box">
	        <a href="index_cliente.php">
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
	                    <a id="inicio" href="../index.php" >Inicio</a>
	                </li>
	                <li>
	                    <a href="menu.php" >Productos</a>
	                </li>
	            </ul>
	        </nav>

	        <div class="header-button full-box text-center" id="userMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Nombre de usuario" >
	            <i class="fas fa-user-circle"></i>
	        </div>
	        <div class="dropdown-menu div-bordered popup-login" aria-labelledby="userMenu">
	            <p class="text-center" style="padding-top: 10px;">
	                <i class="fas fa-user-circle fa-3x"></i><br>
	                <small>Usuario</small>
	            </p>
	            <a class="dropdown-item" href="login.php">
	                <i class="fas fa-sign-out-alt"></i> &nbsp; Inciar Sesion
	            </a>
	        </div>

	        <a href="javascript:void(0);" class="header-button full-box text-center d-lg-none" title="Menú" onclick="show_menu_mobile()" >
	            <i class="fas fa-bars"></i>
	        </a>
	    </div>
	</header>

	<!-- Content -->
	<div class="container container-web-page">
	    <h3 class="font-weight-bold poppins-regular text-uppercase">Productos</h3>
	    <p class="text-justify">Bienvenido a la lista de productos que tenemos disponibles en la Ferreteria Escoinfer Escobillas, donde encontrara las herramientas que necesite para su obra:</p>

	    <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px;">
	        <div class="row align-items-center">
	            <div class="col-12 col-sm-4 text-center text-sm-start">
	                <div class="dropdown">
	                    <button class="btn btn-link dropdown-toggle" type="button" id="categorySubMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fas fa-hamburger fa-fw"></i> &nbsp; Productos
	                    </button>
	                    <div class="dropdown-menu" aria-labelledby="categorySubMenu">
	                        <a class="dropdown-item" href="#">lista 1</a>
	                        <a class="dropdown-item" href="#">lista 2</a>
	                        <a class="dropdown-item" href="#">lista 3</a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-12 col-sm-4 text-center">
	                <button type="button" class="btn btn-link" data-mdb-toggle="modal" data-mdb-target="#saucerModal">
	                    <i class="fas fa-search fa-fw"></i> &nbsp; Buscar
	                </button>
	            </div>
	            <div class="col-12 col-sm-4 text-center text-sm-end">
	                <div class="dropdown">
	                    <button class="btn btn-link dropdown-toggle" type="button" id="OrderSubMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fas fa-sort-alpha-down fa-fw"></i> &nbsp; Ordenar por
	                    </button>
	                    <div class="dropdown-menu" aria-labelledby="OrderSubMenu">
	                        <a class="dropdown-item" href="#">Ascendente (A-Z)</a>
	                        <a class="dropdown-item" href="#">Descendente (Z-A)</a>
	                        <a class="dropdown-item" href="#">Precio (Menor a Mayor)</a>
	                        <a class="dropdown-item" href="#">Precio (Mayor a Menor)</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>


	    <div class="container-fluid" style="padding: 20px 0;">
	        <div class="row">
	            <div class="col-12 col-md-8">
	                <p class="text-left lead"><i class="fas fa-search fa-fw"></i> &nbsp; Resultados de la búsqueda: <span class="font-weight-bold poppins-regular text-uppercase">productos a buscar</span></p>
	            </div>
	            <div class="col-12 col-md-4">
	                <button type="button" class="btn btn-danger">
	                    <i class="fas fa-times fa-fw"></i> &nbsp; Eliminar busqueda
	                </button>
	            </div>
	        </div>
	    </div>


	    <div class="container-fluid container-web-page">
			<h3 class="text-center text-uppercase poppins-regular font-weight-bold">Herramientas Manuales</h3>
			<div class="container-cards full-box mb-4">
	
			  <div class="card-product div-bordered bg-white shadow-2">
				  <figure class="card-product-img">
					  <img class="img-fluid" src="img/taladro inalambrico.jpg" alt="nombre_platillo">
				  </figure>
				  <div class="card-product-body">
					  <div class="card-product-content">
						  <h5 class="text-center fw-bolder">Taladro Inalambrico</h5>
						  <p class="card-product-price text-center fw-bolder">$10.00 USD</p>
						  <span class="full-box text-center text-muted" style="display: block;">En stock</span>
					  </div>
					  <div class="text-center card-product-options" style="padding: 10px 0;">
						  <button type="button" class="btn btn-link btn-sm btn-rounded text-success" ><i class="fas fa-shopping-bag fa-fw"></i> &nbsp; Agregar</button>
						  &nbsp; &nbsp;
						  <a href="details.php" class="btn btn-link btn-sm btn-rounded" ><i class="fas fa-box-open fa-fw"></i> &nbsp; Detalles</a>
						  &nbsp; &nbsp;
						  <button type="button" class="btn btn-link btn-sm btn-rounded" ><i class="fas fa-heart fa-fw"></i></button>
					  </div>
				  </div>
			  </div>
			</div>
		</div>




	    <nav aria-label="Page navigation example">
	        <ul class="pagination justify-content-center">
	            <li class="page-item">
	                <a class="page-link" href="#">Anterior</a>
	            </li>
	            <li class="page-item">
	                <a class="page-link" href="#">1</a>
	            </li>
	            <li class="page-item active">
	                <a class="page-link" href="#">2</a>
	            </li>
	            <li class="page-item">
	                <a class="page-link" href="#">3</a>
	            </li>
	            <li class="page-item">
	                <a class="page-link" href="#">Siguiente</a>
	            </li>
	        </ul>
	    </nav>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="saucerModal" tabindex="-1" aria-hidden="true" aria-labelledby="saucerModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="saucerModalLabel">Buscar platillo</h5>
	                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
	            </div>
	            <div class="modal-body">
	                <div class="form-outline mb-4">
	                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,25}" class="form-control" name="buscar_platillo" id="buscar_platillo" maxlength="25">
	                    <label for="buscar_platillo" class="form-label">¿Qué estás buscando?</label>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-danger" data-mdb-dismiss="modal"><i class="fas fa-times fa-fw"></i> &nbsp; Cerrar</button>
	                <button type="button" class="btn btn-info"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar</button>
	            </div>
	        </div>
	    </div>
	</div>


	<!-- Footer -->
	<footer class="footer">
	</footer>

	
	<!-- MDBootstrap V5 -->
	<script src="js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="js/main.js" ></script>
</body>
</html>