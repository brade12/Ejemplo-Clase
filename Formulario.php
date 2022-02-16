<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="creararchivo.php" method="$_POST">

    Ingrese el nombre del insumo:
    <br>
    <input type="text" name="nombreinsumo">
    <br>
    Ingrese la cantidad disponible:
    <br>
    <input type="text" name="stock">
    <br>
    Ingrese unidad de medida:
    <br>
    <input type="text" name="unidadmedida">
    <br>
    Ingrese fecha de registro:
    <br>
    <input type="date" name="fecharegistro">
    <br>

    <input type="submit" value="Registrar">

    </form>

</body>
</html>