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


	<h2>Listado de cuentas</h2>

	<div class="col-md-7 text-right">
    <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar Cuenta",array("controller" => "cuentas", "method" => "add"),"fa fa-user-plus fa-2x");}?>
</div>


<?php if (!empty($Cuenta)): ?>

<table class="table table-hover">
		<tr>

			<th>ID de Cuenta</th>
			<th>ID de Usuario</th>
			<th>Nombre</th>
			<th>Acción</th>
		</tr>
<?php
    
    foreach ($Cuenta as $tipo) :
        ?>
	<tr>

			<td><?php echo $tipo["accounts"]["id"]; ?></td>

			<td><?php echo $tipo["accounts"]["user_id"]; ?></td>
			<td><?php echo $tipo["accounts"]["name"]; ?></td>
			<td><a
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/cuentas/edit/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $tipo["accounts"]["id"];}?>"
				class="fa fa-pencil-square-o fa-lg"> </a> | <a style="color: red;"
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/cuentas/delete/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $tipo["accounts"]["id"];}?>"
				class="fa fa-trash fa-lg"> </a></td>
		</tr>

<?php endforeach; ?>
</table>
</div>
<?php endif; ?>
