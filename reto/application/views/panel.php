<style>
	
	table tr td{

		text-align: center;
	}
</style>
<h3>Este es el panel Principal !</h3>

<table>
	
	<tr>
		<td>Nombres</td>
		<td>Apellidos</td>
		<td>Username</td>
		<td>Contraseña</td>
		<td>Numero Secreto</td>
	</tr>
	
	<?php foreach ($usuarios as $user): ?>
	<tr>
		<td><?= $user['nombres'] ?></td>
		<td><?= $user['apellidos'] ?></td>
		<td><?= $user['username'] ?></td>
		<td><?= $user['contrasena'] ?></td>
		<td><?= $user['numeroSecreto'] ?></td>
	</tr>
	<?php endforeach ?>
	
</table>

<br>
<a href="<?= base_url() ?>Welcome">Volver al Login</a>