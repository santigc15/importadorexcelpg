<?php  

require 'Conexion.php';

$datos=new Conexion();

var_dump($datos->getcolumns('alumnos'));

?>