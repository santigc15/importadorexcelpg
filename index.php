<?php

if (isset($_POST['archivo'])) {
    require_once './filas.php';
    $fichero = $_POST['archivo'];
    //var_dump(resultados($fichero));
    filtrado($fichero);
}else{
    header("Location:./apertura.php");
}

function resultados($fichero)
{

    $resultados = Excel::obtieneFilas($fichero);
    return $resultados;
}



function filtrado($fichero)
{

    $resultados = Excel::obtieneColumnas($fichero);
    return $resultados;
}

?>