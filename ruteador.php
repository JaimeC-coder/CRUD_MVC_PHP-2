<?php
/**
 * estos son datos traidos de la url ya que el ruteador tiene accesos al templete
 * y por eso el ruteador los va a manejar para controlar el controlador 
 */

include_once('controladores/controlador_'.$controlador.'.php');
//este objetocontrolador es para que entre a la clase del controlador y busque la accion 
$objControlador = "Controlador".ucfirst($controlador);
//estos son objetos sirve para la instancia del controlador 
$controlador = new $objControlador();
$controlador->$accion();

