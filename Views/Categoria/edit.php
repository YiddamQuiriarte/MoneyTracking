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
	<h2>Editar categoría</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="<?php echo APP_URL."/Categoria/edit/".$Datos["id"];;?>"
			method="post">
      <?PHP  ?>

      <input type="hidden" name="id" value="<?php echo $Datos["id"]; ?>">
			<p>
				<label for="username">Categoría</label> <input type="text"
					name="name" class="form-control"
					value="<?php echo $Datos["name"]?>">
			</p>
			<p>
				<input type="submit" class="btn btn-lg btn-success" value="Enviar">
			</p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
