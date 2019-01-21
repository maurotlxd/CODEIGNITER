<h3>Registra un Usuario</h3>

<form action="<?= base_url()?>Usuario/registro" method="post">
	
	<table>
		<tr>
			
			<td><label for="">Nombres</label></td>
			<td><input type="text" required name="nombres"></td>
		</tr>

		<tr>
			
			<td><label for="">Apellidos</label></td>
			<td><input type="text" required name="apellidos"></td>
		</tr>
		
		<tr>
			
			<td><label for="">Username</label></td>
			<td><input type="text" required name="username"></td>
		</tr>
		<tr>

			<td><label for="">Contrasena</label></td>
			<td><input type="text" required name="contrasena"></td>
		</tr>
		<tr>
			<td><label for="">Numero Secreto</label></td>
			<td><input type="text" required name="numeroSecreto"></td>

		</tr>

		<tr>
			<td><input type="submit" name="crear" value="Registra  Usuario"></td>
		</tr>
	</table>
</form>
<a href="<?= base_url() ?>Welcome">Volver al Login</a><br>

<?=  $this->session->flashdata("duplicado"); ?>