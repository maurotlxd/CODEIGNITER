<form action="<?= base_url()?>Empleado/update/<?= $empleado[0]['id'] ?>" method="post">
	

	<table>
		<tr>
			<td><label for="">Nombres</label></td>
			<td><input type="text"  required name="nombres" value="<?= $empleado[0]['nombres']; ?>"></td>
		</tr>

		<tr>
			<td><label for="">Apellidos</label></td>
			<td><input type="text"  required name="apellidos" value="<?= $empleado[0]['apellidos']; ?>"></td>
		</tr>

		<tr>
			<td><label for="">Edad</label></td>
			<td><input type="text"  required name="edad" value="<?= $empleado[0]['edad']; ?>"></td>
		</tr>

		<tr>
			<td><label for="">Dni</label></td>
			<td><input type="text"  required name="dni" value="<?= $empleado[0]['dni']; ?>"></td>
		</tr>

		<tr>
			
			<td><label for="">Tipo de Empleado</label></td>
			<td>

				<select  required name="tipoEmpleado" id="tipoEmpleado">
					
					<?php foreach ($tipoEmpleado as $data): ?>

						<?php if ($data['id'] == $empleado[0]['tipoEmpleado']): ?>
							<option value="<?= $data['id'] ?>" selected><?= $data['nombre']?></option>
						<?php endif ?>

						<?php if ($data['id'] != $empleado[0]['tipoEmpleado']): ?>
							<option value="<?= $data['id'] ?>"><?= $data['nombre']?></option>
						<?php endif ?>
						
						
					<?php endforeach ?>
				</select>

			</td>
		</tr>

		<tr>
			<td><input type="submit" name="actualizar" value="Actualizar"></td>
		</tr>
	</table>
</form>