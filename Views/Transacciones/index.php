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
<div class="container">

	<h2>Listado de transacciones</h2>

	<div class="col-md-7 text-right">
    <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar transacción",array("controller" => "transacciones", "method" => "add"),"fa fa-user-plus fa-2x");}?>
</div>


<?php if (!empty($Datos)): ?>

<table class="table table-hover">
		<tr>

			<th>Serie</th>
			<th>Cuenta</th>
			<th>Categoria</th>
			<th>Descripcion</th>
			<th>Fecha</th>
			<th>Cantidad</th>
			<th>Acciones</th>

		</tr>

<?php foreach ($Datos as $data):	?>

	<tr>

			<td><?php echo $data["transactions"]["id"]; ?></td>

    <?php  foreach ($Cuenta as $key) {if ($key["accounts"]["id"] == $data["transactions"]["account_id"]) { ?>
    <td><?php  echo $key["accounts"]["name"]; ?></td>
     <?php
            
}
        }
        ?>

    <?php  foreach ($Categoria as $key) {if ($key["categories"]["id"] == $data["transactions"]["category_id"]) { ?>
    <td><?php  echo $key["categories"]["name"]; ?></td>
     <?php
            
}
        }
        ?>

    <td><?php  echo $data["transactions"]["description"]?></td>
			<td><?php  echo $data["transactions"]["date"]?></td>
			<td><?php  echo $data["transactions"]["amount"]?></td>


			<td><a
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/Transacciones/edit/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $data["transactions"]["id"];}?>"
				class="fa fa-pencil-square-o fa-lg"> </a> | <a style="color: red;"
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/Transacciones/delete/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $data["transactions"]["id"];}?>"
				class="fa fa-trash fa-lg"> </a></td>

		</tr>

<?php endforeach; ?>
</table>
<?php endif; ?>
