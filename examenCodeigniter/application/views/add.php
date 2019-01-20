<form action="<?php echo base_url()?>Empleado/agregarEmpleado" method="post">
	

	<table>
		<tr>
			<td><label for="">Nombres</label></td>
			<td><input type="text" required name="nombres" ></td>
		</tr>

		<tr>
			<td><label for="">Apellidos</label></td>
			<td><input type="text" required name="apellidos"></td>
		</tr>

		<tr>
			<td><label for="">Edad</label></td>
			<td><input type="text" required name="edad"></td>
		</tr>

		<tr>
			<td><label for="">Dni</label></td>
			<td><input type="text" required name="dni"></td>
		</tr>

		<tr>
			
			<td><label for="">Tipo de Empleado</label></td>
			<td>

				<select name="tipoEmpleado" required id="tipoEmpleado">
					
				<?php foreach ($tipoEmpleados as $data): ?>
					
					<option value="<?= $data['id']  ?>"><?= $data['nombre']; ?></option>
				<?php endforeach ?>
				</select>

			</td>
		</tr>

		<tr>
			<td><input type="submit" name="agregar" value="Agregar"></td>
		</tr>
	</table>
</form>