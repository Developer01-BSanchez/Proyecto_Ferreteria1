<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="view/img/logo-icono.png">
	<title>Ferreteria E . E</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="view/css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="view/css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="view/css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="view/js/sweetalert2.js" ></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="view/css/style.css">

</head>
<body id="main-body">

	<!-- Header -->
	<header class="header full-box bg-white">
	    <div class="header-brand full-box">
	        <a href="index.php">
	            <img src="view/img/logo-escoinfer.png" alt="Designlopers" class="img-fluid">
	        </a>
	    </div>
	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold scroll" onclick="show_menu_mobile()" >
				<ul class="list-unstyled full-box" >
					<li>
						<a id="login" href="view/login.php">Ingresa</a>
					</li>
	                <li>
	                    <a id="inicio" href="index.php" >Inicio</a>
	                </li>
	                <li>
	                    <a href="view/menu.php" >Productos</a>
	                </li>
	            </ul>
	        </nav>

	        <a href="javascript:void(0);" class="header-button full-box text-center d-lg-none" title="Menú" onclick="show_menu_mobile()" >
	            <i class="fas fa-bars"></i>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<div class="banner">
	    <div class="banner-body">
	        <h3 class="text-uppercase">Bienvenido a su Ferreteria</h3>
	        <p>Encuentra todo lo necesario para su construcción</p>
	        <a href="view/menu.php" class="btn btn-warning"><i class="fas fa-hamburger fa-fw"></i> &nbsp; Ir a los insumos</a>
	    </div>
	</div>

	<div class="container container-web-page">
	    <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Nuestros servicios</h3>
	    <br>
	    <div class="row">
	        <div class="col-12 col-sm-6 col-md-6">
	            <p class="text-center"><i class="fas fa-shipping-fast fa-5x"></i></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Envíos a domicilio</h5>
	            <p class="text-center">Contamos con cervcio a domicio a su disposicion, en el que nos preocupamos porque sus productos lleguen en buen estado y con la mayor eficiencia posible.</p>
	        </div>
	        <div class="col-12 col-sm-6 col-md-6">
	            <p class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
					<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
				  </svg></p>
	            <h5 class="text-center text-uppercase poppins-regular font-weight-bold">Calidad</h5>
	            <p class="text-center">La calidad de los productos que suministramos es de gran importacia para nosotros, con lo cual solo vendemos lo mejor de los mejor en la industria, para asi garantizar a nuestros usuarios que su compra es de la mejor calidad posible.</p>
	        </div>
	    </div>
	</div>

	<hr>

	<div class="container-fluid container-web-page">
	    <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Herramientas Manuales</h3>
	    <div class="container-cards full-box mb-4">

	      <div class="card-product div-bordered bg-white shadow-2">
	          <figure class="card-product-img">
	              <img class="img-fluid" src="view/img/taladro inalambrico.jpg" alt="nombre_platillo">
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
	                  <a href="details.html" class="btn btn-link btn-sm btn-rounded" ><i class="fas fa-box-open fa-fw"></i> &nbsp; Detalles</a>
	                  &nbsp; &nbsp;
	                  <button type="button" class="btn btn-link btn-sm btn-rounded" ><i class="fas fa-heart fa-fw"></i></button>
	              </div>
	          </div>
	      </div>

	    </div>
	    <p class="text-center"><a href="view/menu.php" class="btn btn-primary"><i class="fas fa-hamburger fa-fw"></i> &nbsp; Ir al menu</a></p>
	</div>

	<hr>

	<div class="container container-web-page">
	    <div class="row justify-content-md-center">
	        <div class="col-12 col-md-6">
	            <figure class="full-box">
	                <img src="view/img/registration.png" alt="registration" class="img-fluid">
	            </figure>
	        </div>
	        <div class="w-100"></div>
	        <div class="col-12 col-md-6">
	            <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Crea tu cuenta</h3>
	            <p class="text-center">
	                Crea tu cuenta para poder realizar pedidos y cotizaciones.
	            </p>
	            <p class="text-center">
	                <a href="view/registration_usuario.php" class="btn btn-primary" >Crear cuenta</a>
	            </p>
	        </div>
	    </div>


	<!-- MDBootstrap V5 -->
	<script src="view/js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="view/js/main.js" ></script>
</body>
</html>