<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php

        $nombre = $_GET['nombre'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $nota3 = $_GET['nota3'];

        $resultado = ($nota1 + $nota2 + $nota3)/3;

        if ($resultado <=2.9) {
            echo $resultado." Bajo <br> Perdiste<br><br>";
        }
            elseif ($resultado >= 3.0 && $resultado <= 3.9) {
                echo $resultado." Basico <br> Ganaste papa<br><br>";
            }
                elseif ($resultado >= 4.0 && $resultado <= 4.4) {
                echo $resultado." Alto <br> Ganaste papa<br><br>";
                }
        else {
            echo $resultado." Superior <br> Ganaste papa<br><br>";
            }
    ?>

</body>
</html>