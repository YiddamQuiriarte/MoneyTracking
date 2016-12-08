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
	<h2>Agregar cuenta</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="<?php echo APP_URL."/Cuentas/add";?>" method="post">
			<p>
				<label for="name">Cuenta</label> <input type="text"
					class="form-control" placeholder="Cuenta" name="name">
			</p>
			<p>
				<label for="user_id">Usuario</label> <select name="user_id"
					class="form-control " id="type_id">
          <?php foreach ($Users as $tipo ):?>
            <option value="<?php echo $tipo["users"]["id"];?>">
              <?php echo $tipo["users"]["username"];?>
            </option>
           <?php endforeach;?>
        </select>
			</p>
			<p class="text-center">
				<input type="submit" class="btn btn-success">
			</p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
