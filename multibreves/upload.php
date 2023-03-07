<?php

if (isset($_FILES['archivo'])) {

    $ext = strtolower(substr($_FILES['archivo']['name'], -4));
    $new_name = date("Y.m.d-H.i.s");
    $archivoSubido = $_FILES['archivo'];
    $dir = './files/';
    $url_insert = dirname(__FILE__) . "/files";
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true);
    };

    move_uploaded_file($_FILES['archivo']['tmp_name'], $dir.$new_name.'.xlsx');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Archivo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div>
        <h1><strong>Subir Archivos</strong></h1>
    </div>
    <form class="form-control" action="" method="post" enctype="multipart/form-data">
        <label class="form-group" for=""></label>
        <input class="form-group" type="file" name="archivo" id="archivo">
        <button class="btn btn-primary" type="submit">Subir archivo</button>
    </form>

       
</body>

</html>