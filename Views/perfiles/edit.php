

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
	<h2>Editar usuario</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="<?php echo APP_URL."/perfiles/edit/".$Perfil["id"];;?>"
			method="post">
      <?PHP  ?>

      <input type="hidden" name="id"
				value="<?php echo $Perfil["id"]; ?>">
			<p>
				<label for="username">Usuario</label> <input type="text" name="name"
					class="form-control" value="<?php echo $Perfil["name"]?>">
			</p>
			<p>
				<input type="submit" class="btn btn-lg btn-success" value="Enviar">
			</p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
