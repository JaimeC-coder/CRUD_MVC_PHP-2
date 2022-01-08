<?php
/**
 * este is esta para ver las acciones que van en la url 
 */
$controlador='paginas';
$accion='inicio';
if(isset($_GET['controlador']) && isset($_GET['accion'])){
    if($_GET['controlador']!='' && $_GET['accion']!=''){
        $controlador=$_GET['controlador'];
    $accion=$_GET['accion'];
    }

}
//luego estas van al ruteador y este los muestra o hace lo que quiera 
require_once('vistas/template.php');
//en el templete tiene acceso al ruteador y debido a eso se le puede pasar los valores por la url 