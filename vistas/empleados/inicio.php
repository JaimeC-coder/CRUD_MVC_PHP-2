<div class="card">
    <div class="card-header">
        
        <a name="btnAgregar" id="btnAgregar" class="btn btn-success" href="?controlador=empleados&accion=crear" role="button">Agregar Empleado</a> 


    </div>
    <div class="card-body">
    <table class="table table-border">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listaEmpleado as $empleado): ?>
        <tr>
            <td><?php echo $empleado->id; ?></td>
            <td><?php echo $empleado->nombre; ?></td>
            <td><?php echo $empleado->correo; ?></td>
            <td>
                <a class="btn btn-primary"  href="?controlador=empleados&accion=editar&id=<?php echo $empleado->id; ?>">Editar</a>
                <a class="btn btn-danger" href="?controlador=empleados&accion=borrar&id=<?php echo $empleado->id; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </div>
    
</div>
