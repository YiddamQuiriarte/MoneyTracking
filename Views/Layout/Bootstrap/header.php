<!DOCTYPE html>
<html lang="es">
<head>

<title>Money Tracking</title>
<link rel="stylesheet" type="text/css"
	href="<?php echo $_layoutParams["route_css"]?>/bootstrap.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo $_layoutParams["route_css"]?>/bootstrap-theme.css">
<link rel="stylesheet" media="screen"
	href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>


<link rel="stylesheet"
	href="<?php echo $_layoutParams["route_css"]?>/font-awesome/css/font-awesome.min.css">

<script src="<?php echo $_layoutParams["route_js"]?>/bootstrap.js"></script>

</head>
<body>

<?php if (!empty($_SESSION["logged"])) {?>

<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a style="color: green;" class="navbar-brand" href="#">MoneyTrack</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul style="color: red;" class="nav navbar-nav">
				<li><a href="<?php echo APP_URL.'/index/index';?>"
					class="fa fa-home"> Inicio</a></li>
				<li><a href="<?php echo APP_URL.'/users/index';?>"
					class="fa fa-users"> Usuarios</a></li>
				<li><a href="<?php echo APP_URL.'/Perfiles/index';?>"
					class="fa fa-id-card"> Perfiles de Usuario</a></li>
				<li><a href="<?php echo APP_URL.'/Categoria/index';?>"
					class="fa fa-th-list"> Categorías</a></li>
				<li><a href="<?php echo APP_URL.'/Cuentas/index';?>"
					class="fa fa-address-card"> Cuentas</a></li>
				<li><a href="<?php echo APP_URL.'/Transacciones/index';?>"
					class="fa fa-th-list"> Transacciones</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a style="color: red;"
					href="<?php echo APP_URL."/users/logout";?>" class="fa fa-sign-out">
						SALIR</a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->


	</nav>
<?php  } ?>
