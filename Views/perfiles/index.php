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

	<h2>Listado de perfiles</h2>

	<div class="col-md-7 text-right">
    <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar Perfil",array("controller" => "perfiles", "method" => "add"),"fa fa-user-plus fa-2x");}?>
</div>


<?php if (!empty($types)): ?>

<table class="table table-hover">
		<tr>

			<th>id</th>
			<th>nombre</th>
			<th>Acción</th>
		</tr>
<?php
    
    foreach ($types as $tipo) :
        ?>
	<tr>

			<td><?php echo $tipo["types"]["id"]; ?></td>

			<td><?php echo $tipo["types"]["name"]; ?></td>
			<td><a
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/perfiles/edit/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $tipo["types"]["id"];}?>"
				class="fa fa-pencil-square-o fa-lg"> </a> | <a style="color: red;"
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/perfiles/delete/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $tipo["types"]["id"];}?>"
				class="fa fa-trash fa-lg"> </a></td>
		</tr>

<?php endforeach; ?>
</table>
<?php endif; ?>
