<h3>Inicia Sesion</h3>

<form action="<?= base_url() ?>Usuario/ingresar" method="post">
	
	<table>
		
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
			<td><input type="submit" name="ingresar" value="Iniciar Sesion"></td>
		</tr>
	</table>
</form>
<a href="<?= base_url() ?>Usuario/registro">Registrarme como nuevo Usuario</a>&nbsp<a href="<?= base_url() ?>Usuario/recuperar">Recuperar Contraseña o Numero Secreto</a>
<br>

<?=  $this->session->flashdata("registrado"); ?>
<?=  $this->session->flashdata("error"); ?>
