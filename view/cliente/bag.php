<?php
session_start();
$correo=$_SESSION['correo'];

if(!isset($correo)){
	header("location:../../index.php");
}else{?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="../img/logo-icono.png">
	<title>Carrito de Compras</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="../css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="../css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="../css/all.css">

	<!-- Sweet Alert V10.13.0 --> 
	<script src="../js/sweetalert2.js" ></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="../css/style.css">

</head>
<body id="main-body">

	<!-- Header -->
	<header class="header full-box bg-white">
	    <div class="header-brand full-box">
	        <a href="index_cliente.php">
	            <img src="../img/logo-escoinfer.png" alt="Designlopers" class="img-fluid">
	        </a>
	    </div>
	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold scroll" onclick="show_menu_mobile()" >
	            <ul class="list-unstyled full-box" >
					<li>
						<a>Ferreteria Escoinfer Escobillas</a>
					</li>
	                <li>
	                    <a id="inicio" href="index_cliente.php" >Inicio</a>
	                </li>
	                <li>
	                    <a href="menu.php" >Productos</a>
	                </li>
	            </ul>
	        </nav>
	        <a href="bag.php" class="header-button full-box text-center" title="Carrito" >
	            <i class="fas fa-shopping-bag"></i>
	            <span class="badge bg-primary rounded-pill bag-count" >2</span>
	        </a>

	        <div class="header-button full-box text-center" id="userMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Nombre de usuario" >
	            <i class="fas fa-user-circle"></i>
	        </div>
	        <div class="dropdown-menu div-bordered popup-login" aria-labelledby="userMenu">
	            <p class="text-center" style="padding-top: 10px;">
	                <i class="fas fa-user-circle fa-3x"></i><br>
	                <small>Nombre de usuario</small>
	            </p>
	            <a class="dropdown-item" href="javascript:void(0);">
	                <i class="fab fa-dashcube fa-fw"></i> &nbsp; Dashboard
	            </a>
	            <a class="dropdown-item" href="../../controller/cerrar_sesion.php">
	                <i class="fas fa-sign-out-alt"></i> &nbsp; Cerrar sesión
	            </a>
	        </div>

	        <a href="javascript:void(0);" class="header-button full-box text-center d-lg-none" title="Menú" onclick="show_menu_mobile()" >
	            <i class="fas fa-bars"></i>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<section class="container-cart ">
	    <div class="container container-web-page">
	        <h3 class="font-weight-bold poppins-regular text-uppercase">Carrito de compras</h3>
	        <hr>
	    </div>
	    
	    <div class="container" style="padding-top: 40px;">

	        <div class="row">
	            <div class="col-12 col-md-7 col-lg-8">
	                <div class="container-fluid">

	                    <h5 class="poppins-regular font-weight-bold full-box text-center">Nombre del producto</h5>
	                    <div class="bag-item full-box">
	                        <figure class="full-box">
	                            <img src="../img/herramientas_1.png" class="img-fluid" alt="platillo_nombre">
	                        </figure>
	                        <div class="full-box">
	                            <div class="container-fluid">
	                                <div class="row">
	                                    <div class="col-12 col-lg-6 text-center mb-4">
	                                        <div class="row justify-content-center">
	                                            <div class="col-auto">
	                                                <div class="form-outline mb-4">
	                                                    <input type="text" value="1" class="form-control text-center" id="product_cant_1" pattern="[0-9]{1,10}" maxlength="10" style="max-width: 100px; ">
	                                                    <label for="product_cant_1" class="form-label">Cantidad</label>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto">
	                                                <button type="button" class="btn btn-success" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Actualizar cantidad" ><i class="fas fa-sync-alt fa-fw"></i></button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-12 col-lg-4 text-center mb-4">
	                                        <span class="poppins-regular font-weight-bold" >SUBTOTAL: $0.00</span>
	                                    </div>
	                                    <div class="col-12 col-lg-2 text-center text-lg-end mb-4">
	                                        <button type="button" class="btn btn-danger" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Quitar del carrito" >
	                                            <span aria-hidden="true"><i class="far fa-trash-alt"></i></span>
	                                        </button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>


	                    <hr>


	                    <h5 class="poppins-regular font-weight-bold full-box text-center">Nombre del producto</h5>
	                    <div class="bag-item full-box">
	                        <figure class="full-box">
	                            <img src="../img/herramientas_1.png" class="img-fluid" alt="platillo_nombre">
	                        </figure>
	                        <div class="full-box">
	                            <div class="container-fluid">
	                                <div class="row">
	                                    <div class="col-12 col-lg-6 text-center mb-4">
	                                        <div class="row justify-content-center">
	                                            <div class="col-auto">
	                                                <div class="form-outline mb-4">
	                                                    <input type="text" value="1" class="form-control text-center" id="product_cant_2" pattern="[0-9]{1,10}" maxlength="10" style="max-width: 100px; ">
	                                                    <label for="product_cant_2" class="form-label">Cantidad</label>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto">
	                                                <button type="button" class="btn btn-success" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Actualizar cantidad" ><i class="fas fa-sync-alt fa-fw"></i></button>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="col-12 col-lg-4 text-center mb-4">
	                                        <span class="poppins-regular font-weight-bold" >SUBTOTAL: $0.00</span>
	                                    </div>
	                                    <div class="col-12 col-lg-2 text-center text-lg-end mb-4">
	                                        <button type="button" class="btn btn-danger" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Quitar del carrito" >
	                                            <span aria-hidden="true"><i class="far fa-trash-alt"></i></span>
	                                        </button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>

	                </div> 
	            </div>
	            <div class="col-12 col-md-5 col-lg-4">
	                <div class="full-box div-bordered">
	                    <h5 class="text-center text-uppercase bg-success" style="color: #FFF; padding: 10px 0;">Resumen del pedido</h5>
	                    <ul class="list-group bag-details">
	                        <a class="list-group-item d-flex justify-content-between align-items-center text-uppercase poppins-regular font-weight-bold">
	                            Subtotal
	                            <span>$0.00</span>
	                        </a>
	                        <a class="list-group-item d-flex justify-content-between align-items-center text-uppercase poppins-regular font-weight-bold">
	                            Envio
	                            <span>$0.00</span>
	                        </a>
	                        <a class="list-group-item d-flex justify-content-between align-items-center" style="border-bottom: 1px solid #E1E1E1;"></a>
	                        <a class="list-group-item d-flex justify-content-between align-items-center text-uppercase poppins-regular font-weight-bold">
	                            Total
	                            <span>$0.00</span>
	                        </a>
	                    </ul>
	                    <p class="text-center">
	                        <button type="button" class="btn btn-primary">Confirmar orden</button>
	                    </p>
	                </div>
	            </div>
	        </div>


	    </div>

	    <!-- Carrito vacio --
	    <div class="container">
	        <p class="text-center" ><i class="fas fa-shopping-bag fa-5x"></i></p>
	        <h4 class="text-center poppins-regular font-weight-bold" >Carrito de compras vacío</h4>
	    </div> -->
	</section>

	<!-- Footer -->
	<footer class="footer">
	</footer>
	
	
	<!-- MDBootstrap V5 -->
	<script src="../js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="../js/main.js" ></script>
</body>
</html>
<?php
}
?>