
<h4>Recuperar la Clave o Numero Secreto</h4>

<form action="<?= base_url() ?>Usuario/recuperar" method="post">
	
	<table>
		
		<tr>
			<td><input type="text" name="username" required></td>
			<td><input type="submit" name="recuperar" value="Recuperar"></td>
		</tr>
	</table>
</form>
<br>
<a href="<?= base_url() ?>Welcome">Volver al Login</a>
<br>
<?= $this->session->flashdata("noRecupera"); ?>