<style>
html {
	background:
		url(/MoneyTracking/Views/Layout/Bootstrap/css/images/bg03.jpg)
		no-repeat center fixed;
	background-size: cover;
}

body {
	color: black;
}
</style>
<div class="col-md-12 text-center">
	<h2>Agregar perfil de usuario</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="<?php echo APP_URL."/perfiles/add";?>" method="post">
			<p>
				<label for="name">Perfil</label> <input type="text"
					class="form-control" placeholder="Nombre del perfil" name="name">
			</p>

			<p class="text-center">
				<input type="submit" class="btn btn-success" value="Guardar">
			</p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
