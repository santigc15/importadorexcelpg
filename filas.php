<?php

require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

class Excel
{
   public $archivo;

    public static function obtieneFilas($archivo)
    {
        
        $spreadsheet = IOFactory::load($archivo);
        $worksheet = $spreadsheet->getSheet(0);
        $datos = $worksheet->toArray();
        $resultado = array_slice($datos, 0,10);

        return $resultado;
    }

    public static function obtieneColumnas($archivo)
    {
        
        $spreadsheet = IOFactory::load($archivo);
        $worksheet = $spreadsheet->getSheet(0);
        $columnas = [1,6];
        $filas = $worksheet->toArray();
     foreach ($filas as $row ) {
        $fila=[];
        foreach ($columnas as $col) {
            $valor=$row[$col]??'';
            $fila[]=$valor;
        }
        $datos[]=$fila;
        $resultado = array_slice($datos, 0,10);

     }
var_dump($resultado);
exit;
    }
}
