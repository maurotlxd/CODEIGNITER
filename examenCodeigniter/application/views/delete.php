


<h2>Desea Eliminar el Empleado <?= $id  ?> ???</h2>
<form action="<?php echo base_url()?>Empleado/EliminarEmpleado/<?= $id ?>" method="post">
	
	<input type="hidden" name="id" value="<?= $id ?>">
	<input type="submit" value="Eliminar" name="Eliminar">
</form>