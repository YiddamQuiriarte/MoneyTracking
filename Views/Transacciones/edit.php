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
	<h2>Editar transaccion</h2>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form
			action="<?php echo APP_URL."/Transacciones/edit/".$Datos["id"];;?>"
			method="post">

			<p>
				<input type="hidden" name="id" value="<?php echo $Datos["id"] ?>"> <label
					for="account_id">Cuenta</label> <select name="account_id"
					class="form-control">
          <?php foreach ($Cuenta as $tipo ):?>

            <?php echo $Datos["date"]; if ($tipo["accounts"]["id"] == $Datos["account_id"]) {?>
              <option selected
						value="<?php echo $tipo["accounts"]["id"];?>">
                <?php echo $tipo["accounts"]["name"];?>
              </option>
          <?php  }else{ ?>

            <option value="<?php echo $tipo["accounts"]["id"];?>">
              <?php echo $tipo["accounts"]["name"];?>
            </option>

            <?php } ?>
           <?php endforeach;?>
        </select>
			</p>

			<p>
				<label for="category_id">Categoria</label> <select
					name="category_id" class="form-control" id="type_id">
          <?php foreach ($Categoria as $CAT ):?>

            <?php
            
if ($CAT["categories"]["id"] == $Datos["category_id"]) {
                ?>

            <option selected
						value="<?php echo $CAT["categories"]["id"];?>">
              <?php echo $CAT["categories"]["name"];?>
            </option>

          <?php  }else{ ?>
            <option value="<?php echo $CAT["categories"]["id"];?>">
              <?php echo $CAT["categories"]["name"];?>
            </option>

            <?php } ?>
           <?php endforeach;?>
        </select>
			</p>

			<p>
				<label for="name">Descripcion</label> <input type="text"
					class="form-control" placeholder="Descripcion" name="description"
					value="<?php echo $Datos["description"]; ?>">
			</p>
			<p>
				<label for="name">Fecha</label> <input type="date"
					class="form-control" placeholder="Fecha"
					data-date-format="DD/MM/YYYY" name="date"
					value="<?php echo date('d/m/Y',strtotime($Datos["date"])); ?>">
			</p>
			<p>
				<label for="name">Monto</label> <input type="text"
					class="form-control" placeholder="Monto" name="amount"
					value="<?php echo $Datos["amount"]; ?>">
			</p>

			<p class="text-center">
				<input type="submit" class="btn btn-success" value="ACTUALIZAR">
			</p>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>
