
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



	<h2>Listado de usuarios</h2>
	<h4>Número de usuarios: <?php echo $usersCount; ?></h4>
	<div class="col-md-7 text-right">
    <?php if ($_SESSION["Tipo"] == 1) { echo $this->HTML->link("Agregar Usuario",array("controller" => "users", "method" => "add"),"fa fa-user-plus fa-2x");}?>
</div>


<?php if (!empty($users)): ?>

<table class="ol-md-16 table table-hover ext-right ">
		<tr>

			<th>Usuario</th>
			<th>Tipo</th>
			<th>Acción</th>
		</tr>
<?php
    
    foreach ($users as $user) :
        ?>
	<tr>

			<td><?php echo $user["users"]["username"]; ?></td>

			<td><?php echo $user["types"]["name"]; ?></td>
			<td><a
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/users/edit/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $user["users"]["id"];}?>"
				class="fa fa-pencil-square-o fa-lg"> </a> | <a style="color: red;"
				href="<?php if ($_SESSION["Tipo"] == 1) {echo APP_URL.'/users/delete/';}?><?php if ($_SESSION["Tipo"] == 1) {echo $user["users"]["id"];}?>"
				class="fa fa-trash fa-lg"> </a></td>
		</tr>

<?php endforeach; ?>
</table>
<?php endif; ?>
