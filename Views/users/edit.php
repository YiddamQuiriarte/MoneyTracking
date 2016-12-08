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
		<form action="<?php echo APP_URL."/users/edit/".$user["id"];;?>"
			method="post">
      <?PHP  ?>

      <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
			<p>
				<label for="username">Usuario</label> <input type="text"
					name="username" class="form-control"
					value="<?php echo $user["username"]?>">
			</p>
			<p>
				<label for="password">Contraseña</label> <input type="text"
					name="password" class="form-control"
					value=<?php echo $user["password"];?>>
			</p>
			<p>
				<label for="type_id">Tipo de usuario</label> <select
					class="form-control" name="type_id">
          <?php  foreach ($types as $tipo) {?>
            <?php  if ($tipo["types"]["id"]==$user["type_id"]) {?>
              <option selected
						value="<?php echo $tipo["types"]["id"];  ?>"> <?php echo $tipo["types"]["name"];?></option>
            <?php }else{?>
              <option value="<?php echo $tipo["types"]["id"];  ?>"> <?php echo $tipo["types"]["name"];?></option>
        <?php  }} ?>
        </select>
			</p>
			<p>
				<input type="submit" class="btn btn-lg btn-success" value="Enviar">
			</p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
