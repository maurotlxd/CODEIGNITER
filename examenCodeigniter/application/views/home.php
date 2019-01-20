

<a href="<?php echo base_url()?>Empleado/add">Agregar Empleado</a> 
<a href="<?= base_url()?>Empleado/search">Realizar Busqueda</a>
<a href="<?= base_url()?>Empleado/out">Cerrar Sesion</a>

<h5>Bienvenido , <?= $this->session->userdata("name");?></h5>

<table>
<tr>
<td>Nombres</td>
<td>Apellidos</td>
<td>Edad</td>
<td>Dni</td>
<td>Tipo de Empleado</td>
<td>Acciones</td>


</tr>
<?php foreach($data as $d):  ?>
<tr>
<td><?= $d['nombres']?></td>
<td><?= $d['apellidos']?></td>
<td><?= $d['edad']?></td>
<td><?= $d['dni']?></td>
<td><?= $d['tipo']?></td>
<td>
<a href="<?php echo base_url()?>Empleado/edit/<?= $d['id'] ?>">Editar</a><a href="<?php echo base_url()?>Empleado/delete/<?= $d['id'] ?>">Eliminar</a>
</td>



</tr>

<?php  endforeach; ?>
</table>
<br>

<?=  $this->session->flashdata("insertado"); ?>
<?=  $this->session->flashdata("actualizado"); ?>
<?=  $this->session->flashdata("eliminado"); ?>
