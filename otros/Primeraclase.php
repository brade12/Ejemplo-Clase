<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    Hola<br>

<?php
    $dia = date("d");
    if ($dia <= 10) {
        $nombre="Samuel";
        echo "Hola grupo<br>";
        echo "Mi nombre es " . $nombre . "<br><br>";
    } else {
        echo "No puedes ingresar se vencio el limite<br><br>";
    }

    $numero = mt_rand(1,50)/10;
    echo "Tu nota es ".$numero."<br>";
    if ($numero <=2.9) {
        echo "Bajo <br> Perdiste<br><br>";
    }
        elseif ($numero >= 3.0 && $numero <= 3.9) {
            echo "Basico <br> Ganaste papa<br><br>";
        }
            elseif ($numero >= 4.0 && $numero <= 4.5) {
            echo "Alto <br> Ganaste papa<br><br>";
            }
    else {
        echo "Superior <br> Ganaste papa<br><br>";
        }
        


?>

<form method="GET" action="calcularnota.php">
        <table>
            <tr>
                <td colspan="3">Nombre:<input type="Text" name="nombre"></td>
            </tr>
            <tr>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
            </tr>
            <tr>
                <td><input type="text" name="nota1"></td>
                <td><input type="text" name="nota2"></td>
                <td><input type="text" name="nota3"></td>
            </tr>
            <tr>
            <td colspan="3"><input type="submit" name=""></td>
            </tr>
        </table>

</form>



</body>
</html>