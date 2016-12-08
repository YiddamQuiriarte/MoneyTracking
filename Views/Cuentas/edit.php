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
	<h2>Editar cuenta</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="<?php echo APP_URL."/Cuentas/edit/".$Datos["id"];;?>"
			method="post">
      <?PHP  ?>

      <input type="hidden" name="id" value="<?php echo $Datos["id"]; ?>">
			<p>
				<label for="password">Cuenta</label> <input type="text" name="name"
					class="form-control" value=<?php echo $Datos["name"];?>>
			</p>
			<p>
				<label for="type_id">Usuario</label> <select class="form-control"
					name="user_id">
          <?php  foreach ($Usuario as $user) {?>
            <?php  if ($user["users"]["id"]==$Datos["user_id"]) {?>
              <option selected
						value="<?php echo $user["users"]["id"];  ?>"> <?php echo $user["users"]["username"];?></option>
            <?php }else{?>
              <option value="<?php echo $user["users"]["id"];  ?>"> <?php echo $user["users"]["username"];?></option>
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
