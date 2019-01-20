<h4>Realizar Busqueda de empleado por ID</h4>

<form action="<?= base_url() ?>Empleado/searchEmpleado" method="post">
	
	<tr>
		<td><label>Ingresa El ID :</label></td>
		<td><input type="text" name="search"></td>
		<td><input type="submit" name="buscar" value="Buscar"></td>
	</tr>
</form>

<?php if (isset($busqueda)): ?>
	<?php if ($busqueda != NULL): ?>
	<table>
	
	<tr>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Edad</td>
		<td>Dni</td>
		<td>Tipo de Empleado</td>
	</tr>
	<tr>
		<td><?= $busqueda[0]['nombres'] ?></td>
		<td><?= $busqueda[0]['apellidos'] ?></td>
		<td><?= $busqueda[0]['edad'] ?></td>
		<td><?= $busqueda[0]['dni'] ?></td>
		<td><?= $busqueda[0]['tipoEmpleado'] ?></td>
	</tr>
</table>
<?php endif ?>

<?php if ($busqueda == NULL): ?>
	<div>El ID consultado no existe .</div>
<?php endif ?>
<?php endif ?>

