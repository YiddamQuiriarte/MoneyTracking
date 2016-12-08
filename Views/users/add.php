
<div class="col-md-12 text-center">
	<h2>Agregar usuarios</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="<?php echo APP_URL."/users/add";?>" method="post">
			<p>
				<label for="name">Usuario</label> <input type="text"
					class="form-control" placeholder="Usuario" name="username">
			</p>
			<p>
				<label for="password">Contraseña</label> <input type="password"
					placeholder="Password" class="form-control" name="password">
			</p>
			<p>
				<label for="type_id">Tipo de usuario</label> <select name="type_id"
					class="form-control" id="type_id">
          <?php print_r($types); foreach ($types as $tipo ):?>
            <option value="<?php echo $tipo["types"]["id"];?>">
              <?php echo $tipo["types"]["name"];?>
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
