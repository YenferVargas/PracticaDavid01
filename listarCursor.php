<?php
/*
Este archivo lista todos los datos de la tabla, pero en un ciclo usando un cursor, no a través de un arreglo (se supone que es más eficiente)
*/
?>
<?php

include_once "base_de_datos.php";
$consulta = "select id, nombre, edad from mascotas";
# Preparar sentencia e indicar que vamos a usar un cursor
$sentencia = $base_de_datos->prepare($consulta, [
	PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
# Ejección sin parámetros
$sentencia->execute();
# Se realiza iteración
?>

<?php include_once "encabezado.php" ?>
<div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<h1 class="mb-4">Listar con Cursor</h1>
			<a href="https://tecsup.instructure.com/courses/25788" target="_blank">Por Jordi de la Cruz</a>
			<br>
			<table class="table table-bordered table-striped">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($mascota = $sentencia->fetchObject()) { ?>
						<tr>
							<td><?php echo $mascota->id ?></td>
							<td><?php echo $mascota->nombre ?></td>
							<td><?php echo $mascota->edad ?></td>
							<td>
								<a class="btn btn-warning" href="<?php echo "editar.php?id=" . $mascota->id ?>">Editar 📝</a>
								<a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id ?>">Eliminar 🗑️</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include_once "pie.php" ?>
