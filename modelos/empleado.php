<?php

class Empleado{
    public $id;
    public $nombre;
    public $correo;
    public function __construct($id,$nombre,$correo){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }
    public static function consultar(){
        $listaEmpleado=[];
        $conexion= BD::crearInstancia();
        $sql =$conexion->query("SELECT * FROM empleados");
        foreach ($sql->fetchAll() as $empleado) {
            $listaEmpleado[] = new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
        }
        return $listaEmpleado;
    }
    public static function crear($nombre,$correo){
        $conexion = BD::crearInstancia();
        $consulta = $conexion->prepare("INSERT INTO empleados (nombre,correo) VALUES (?,?)");
        $consulta->execute(array($nombre,$correo));
    }
    public static function borrar($id){
        $conexion = BD::crearInstancia();
        $consulta = $conexion->prepare("DELETE FROM empleados WHERE id=?");
        $consulta->execute(array($id));
    }
    public static function buscar($id){
        $conexion = BD::crearInstancia();
        $consulta = $conexion->prepare("SELECT * FROM empleados WHERE id=?");
        $consulta->execute(array($id));
        $empleado = $consulta->fetch();
        return new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
    }
    public static function editar($id,$nombre,$correo){
        $conexion = BD::crearInstancia();
        $consulta = $conexion->prepare("UPDATE empleados SET nombre=?,correo=? WHERE id=?");
        $consulta->execute(array($nombre,$correo,$id));

    }
}