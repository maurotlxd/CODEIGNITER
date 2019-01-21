<h3>
	
	Estos son los Datos recuperados :
</h3>

<form action="" method="post">
	
	<table>
		
		<tr>

		<td><label for="">Username</label></td>
		<td><input type="text" disabled value="<?= $recupera[0]['username'] ?>" name="username"></td>

		</tr>

		<tr>
			
		<td><label for="">Contrasena</label></td>
		<td><input type="text" disabled value="<?= $recupera[0]['contrasena'] ?>" name="contrasena"></td>
		</tr>

		<tr>
			
		<td><label for="">Numero Secreto</label></td>
		<td><input type="text" disabled value="<?= $recupera[0]['numeroSecreto'] ?>" name="numeroSecreto"></td>
		</tr>

		<tr>
			<td><a href="<?= base_url() ?>Welcome">Volver al Login</a></td>
		</tr>
	</table>
</form>