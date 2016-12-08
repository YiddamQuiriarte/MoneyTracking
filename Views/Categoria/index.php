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


	<h2>Listado de categorías</h2>

	<div class="col-md-7 text-right">
    <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar Categoría",array("controller" => "categoria", "method" => "add"),"fa fa-user-plus fa-2x");}?>
</div>


<?php if (!empty($Datos)): ?>

<table class="table table-hover">
		<tr>

			<th>id</th>
			<th>nombre</th>
			<th>Acción</th>
		</tr>
<?php
    
    foreach ($Datos as $tipo) :
        ?>
	<tr>

			<td><?php echo $tipo["categories"]["id"]; ?></td>

			<td><?php echo $tipo["categories"]["name"]; ?></td>
			<td><a
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/categoria/edit/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $tipo["categories"]["id"];}?>"
				class="fa fa-pencil-square-o fa-lg"> Editar</a> | <a
				style="color: red;"
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/categoria/delete/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $tipo["categories"]["id"];}?>"
				class="fa fa-trash fa-lg"> Borrar</a></td>
		</tr>

<?php endforeach; ?>
</table>
<?php endif; ?>
