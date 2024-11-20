<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Diego Frank </br> Lipa <b>Choque</b> </p>
    <!-- Etiqueta PHP -->

    <?php
    echo "Imprimiento de PHP </br>";
    $dato_1  = 1;
    $dato_2  = "100";

    echo "El resultado es: " . $dato_1 + $dato_2 . "</br>";

    echo "Incremento: " . $dato_1 + 1 . "</br>";

    if ($dato_2 ==  2) {
        echo "No es igual";
    } else if ($dato_2 === 100) {
        echo "Si es igual";
    }


    // Declarar 7 tipos de datos //5 minutes
    // Diego Lipa

    $array = array("1", "2", "3", "4", "5");
    $nombre = ["Diego", "Pedro", "Pablo", "Ricardo", "María"];
    $emollis = ["🗽", "🎀", "🦴", "🦎"];

    foreach ($emollis as $item) {
        echo $item . "</br>";
    };

    // $tabla = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    // foreach ($tabla as $numero) {
    //     echo "tabla de $numero" . "</br>";
    //     $num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    //     foreach ($num as $item) {
    //         echo $numero . " x " . $item . "=" . $numero * $item . "</br>";
    //     };
    // };

    

    ?>
</body>

</html>