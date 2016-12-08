<!DOCTYPE html>
<html lang="es">
<head>

<title>Money Tracking</title>
<link rel="stylesheet" type="text/css"
	href="<?php echo $_layoutParams["route_css"]?>/bootstrap.css">
<link rel="stylesheet" type="text/css"
	href="<?php echo $_layoutParams["route_css"]?>/bootstrap-theme.css">


<link rel="stylesheet"
	href="<?php echo $_layoutParams["route_css"]?>/font-awesome/css/font-awesome.min.css">

<script src="<?php echo $_layoutParams["route_js"]?>/bootstrap.js"></script>

</head>
<body>

	<div class="container ">
      <?php if (!empty($_SESSION["logged"])) {?>
          <ul class="nav nav-tabs navbar navbar-inverse">

			<li><a href="<?php echo APP_URL.'/index/index';?>"
				class="fa fa-camera-retro fa-lg"> Inicio</a></li>
			<li><a href="<?php echo APP_URL.'/users/index';?>"
				class="fa fa-home fa-lg"> Usuarios</a></li>


			<li role="presentation"><?php echo $this->HTML->link("Perfiles de usuario",array("controller" => "Perfiles", "method" => "index"),"glyphicon glyphicon-globe"); ?></li>
			<li role="presentation"><?php echo $this->HTML->link("Categorias",array("controller" => "Categoria", "method" => "index"),"glyphicon glyphicon-th-list"); ?></li>
			<li role="presentation"><?php echo $this->HTML->link("Cuentas",array("controller" => "Cuentas", "method" => "index"),"glyphicon glyphicon-phone"); ?></li>
			<li role="presentation"><?php echo $this->HTML->link("Transacciones",array("controller" => "Transacciones", "method" => "index"),"glyphicon glyphicon-credit-card"); ?></li>
			<li role="presentation"><a
				style="text-decoration: none; color: gray;"
				href="<?php echo APP_URL."/users/logout";?>">SALIR</a></li>

                <?php echo $_SESSION["username"]; ?>
          </ul>
        <?php  } ?>
    </div>