<!DOCTYPE HTML>

<html>
<head>
<title>Inicio de Sesión</title>
<meta charset="utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=no" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->

<link rel="stylesheet"
	href="<?php echo $_layoutParams["route_css"]?>/assets/css/main.css" />

<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>

	<!-- Header -->
	<header id="header">
		<h1>Money Tracking</h1>
		<p>
			Sistema que permite registrar los ingresos y egresos<br /> de una
			persona, la cual puede tiene diferentes cuentas. <a
				href="http://github.com/yiddamquiriarte">Código Aquí</a>.
		</p>
	</header>

	<!-- Signup Form -->


	<form action="<?php echo APP_URL."/users/login";?>" method="POST">
		<p>
			<label for="username">Username</label> <input type="text"
				name="username">
		</p>
		<p>
			<label for="password">Password</label> <input type="password"
				name="password">
		</p>
		<p>
			<input type="submit" value="Entrar">
		</p>

	</form>

	<!-- Footer -->
	<footer id="footer">
		<ul class="icons">
			<li><a href="https://twitter.com/YiddamQuiriarte"
				class="icon fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
			<li><a href="http://github.com/yiddamquiriarte"
				class="icon fa-github"><span class="label">GitHub</span></a></li>
			<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; Quiriarte.</li>
			<li>Creditos: <a href="http://fb.me/yiddam.quiriarte">Yiddam
					Quiriarte</a></li>
		</ul>
	</footer>

	<!-- Scripts -->
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->

	<script
		src="<?php echo $_layoutParams["route_css"]?>/assets/js/main.js"></script>


</body>
</html>
<?php

if ($_SESSION["logged"]) {
    header("Location: " . APP_URL . "/users/");
    echo "
			<script type='text/javascript' class= >
			alert('Has iniciado correctamente');
			window.location='http://localhost/Moneytracking/';
			</script>
		";
} else {
    exit();
}

?>
