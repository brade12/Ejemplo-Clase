<html>
<head>
    <title>document</title>
</head>
<body>
    <?php

$ar= fopen ("insumos.xls","r") or
die("No se puede abrir el archivo");
while (!feof($ar)) {
    $linea=fgets($ar);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
}
fclose($ar);
?>
</body>
</html>