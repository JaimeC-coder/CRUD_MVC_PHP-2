<?php
include_once 'modelos/empleado.php';
include_once('conexion.php');
BD::crearInstancia();
class ControladorEmpleados{
    public function inicio(){
        
        $listaEmpleado = Empleado::consultar();
        include_once('vistas/empleados/inicio.php');
    }
    public function crear(){
        if($_POST){
            print_r($_POST);
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::crear($nombre,$correo);
            header('Location:./?controlador=empleados&accion=inicio');
        }
        include_once('vistas/empleados/crear.php');
    }
    public function editar(){
        if($_POST){
            
            $id = $_GET['id'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::editar($id,$nombre,$correo);
            header('Location:./?controlador=empleados&accion=inicio');
        }
        $empleado=Empleado::buscar($_GET['id']);
        include_once('vistas/empleados/editar.php');
    }
    public function borrar(){
        Empleado::borrar($_GET['id']);
        header('Location:./?controlador=empleados&accion=inicio');
    }

}