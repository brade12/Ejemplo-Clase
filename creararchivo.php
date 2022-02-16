<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    $ar = fopen("insumos.xls", "a") or
    die("Problemas en la creacion");
    fputs($ar, $_REQUEST['nombreinsumo']);
    fputs($ar, "\t"|"\t");
    fputs($ar, $_REQUEST['stock']);
    fputs($ar, "\t"|"\t");
    fputs($ar, $_REQUEST['unidadmedida']);
    fputs($ar, "\t"|"\t");
    fputs($ar, $_REQUEST['fecharegistro']);
    fputs($ar, "\n");
    fputs($ar, "--------------------------------------------------");
    fputs($ar, "\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";

?>

</body>
</html>