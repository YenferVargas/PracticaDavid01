<?php include_once "encabezado.php" ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Agregar Nueva Mascota</h1>
            <form action="insertar.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre de la Mascota</label>
                    <input required name="nombre" type="text" id="nombre" placeholder="Nombre de mascota" class="form-control">
                </div>
                <div class="form-group">
                    <label for="edad">Edad de la Mascota</label>
                    <input required name="edad" type="number" id="edad" placeholder="Edad de mascota" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="./listar.php" class="btn btn-warning">Ver todas las Mascotas</a>
            </form>
        </div>
    </div>
</div>
<?php include_once "pie.php" ?>
