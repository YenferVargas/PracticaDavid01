<?php
/*
Este archivo lista todos los datos de la tabla, obteniendo a los mismos como un arreglo
*/
?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("select id, nombre, edad from mascotas");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include_once "encabezado.php" ?>
<div class="container mt-5">
	<div class="row">
		<div class="col-12">
			<h1 class="mb-4 text-center">Listar con Arreglo</h1>
			<p class="text-center">Por Jordi de la Cruz</p>
			<div class="table-responsive">
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
						<?php foreach ($mascotas as $mascota) { ?>
							<tr>
								<td><?php echo $mascota->id ?></td>
								<td><?php echo $mascota->nombre ?></td>
								<td><?php echo $mascota->edad ?></td>
								<td class="text-center">
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
</div>
<?php include_once "pie.php" ?>
