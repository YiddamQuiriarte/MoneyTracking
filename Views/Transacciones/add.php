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
	<h2>Agregar transaccion</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form action="<?php echo APP_URL."/Transacciones/add";?>"
			method="post">

			<p>
				<label for="account_id">Cuenta</label> <select name="account_id"
					class="form-control">
          <?php foreach ($Cuentas as $tipo ):?>
            <option value="<?php echo $tipo["accounts"]["id"];?>">
              <?php echo $tipo["accounts"]["name"];?>
            </option>
           <?php endforeach;?>
        </select>
			</p>

			<p>
				<label for="category_id">Categoria</label> <select
					name="category_id" class="form-control" id="type_id">
          <?php foreach ($Categoria as $tipo ):?>
            <option value="<?php echo $tipo["categories"]["id"];?>">
              <?php echo $tipo["categories"]["name"];?>
            </option>
           <?php endforeach;?>
        </select>
			</p>

			<p>
				<label for="name">Descripcion</label> <input type="text"
					class="form-control" placeholder="Descripcion" name="description">
			</p>
			<p>
				<label for="name">Fecha (AAAA-MM-DD)</label> <input type="date"
					data-date-formart="YYYY/MM/DD" class="form-control"
					placeholder="Fecha" name="date">
			</p>
			<p>
				<label for="name">Monto</label> <input type="text"
					class="form-control" placeholder="Monto" name="amount">
			</p>

			<p class="text-center">
				<input type="submit" class="btn btn-success">
			</p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
