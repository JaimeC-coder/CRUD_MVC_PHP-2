
<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" required name="nombre" id="nombre" class="form-control" placeholder="nombre" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo:
                </label>
                <input type="email" required name="correo" id="correo" class="form-control" placeholder="Correo" aria-describedby="helpId">
            </div>
            <input name="agregar" id="agregar" class="btn btn-success" type="submit" value="Agregar Empleado">
            <a href="?controlador=empleados&accion=inicio"  class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>