<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicio de Sesion</title>

</head>
<body>

<form action="<?= base_url(); ?>Auth/ingresar" method="post">
	<table>
		<tr>
			<td><label>Usuario</label></td>
			<td><input type="text" name="usuario" required></td>
		</tr>
		<tr>
			<td><label>clave</label></td>
			<td><input type="text" name="clave" required></td>
		</tr>

		<tr>
			
			<td><input type="submit" name="ingresar"></td>
		</tr>
	</table>

</form>
<br>

<?= $this->session->flashdata("errorLogin");?>

</body>
</html>