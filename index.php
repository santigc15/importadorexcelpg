<?php

if (isset($_POST['archivo'])) {
    require_once './filas.php';
    $fichero = $_POST['archivo'];
    //var_dump(resultados($fichero));
    filtrado($fichero,$array_columnas);
}else{
    header("Location:./apertura.php");
}

function resultados($fichero)
{

    $resultados = Excel::obtieneFilas($fichero);
    return $resultados;
}



function filtrado($fichero,$array_columnas)
{

    $resultados = Excel::obtieneColumnas($fichero,$array_columnas);
    return $resultados;
}

?>