<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h3>PHP BÁSICO</h3>
        <ul>
            <ol>1. Operaciones con String</ol>
            <ol>2. Operadores Aritmeticos</ol>
            <ol>3. Tipos de datos</ol>
            <ol>4. Operaciones con Array</ol>
            <ol>5. Condicionales</ol>
            <ol>6. Ciclos</ol>
            <ol>7. Salir</ol>
        </ul>

        <h6>Formulario Diego Lipa</h6>
        <hr>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="numero" class="form-label">Ingrear Número</label>
                <input type="number" name="numero" class="form-control" id="numero" placeholder="Insertar número">
            </div>
            <button type="submit" class="btn btn-primary"> Enviar </button>
        </form>
        <hr>

        <?php

        include "./OperadoresLogicos.php";
        include "./OperacionesString.php";
        // Codigo PHP
        if (isset($_GET["fruta"])) {
            echo $_GET["fruta"] . "</br>";
        }

        if (isset($_GET["precio"])) {
            echo $_GET["precio"];
        }

        if (isset($_POST["numero"])) {
            $opcion = $_POST["numero"];
            switch ($opcion) {
                case 1:
                    $os = new OperacionesString();
                    echo "</br>";
                    echo "Ingreso al Caso Número 1 </br>";
                    $os->llamarPadre();
                    $os->funcionesString();
                    echo "</br>";
                    break;
                default:
                    echo "</br>";
                    echo "Ingrese una Opción Válida";
                    echo "</br>";
                    break;
            }
        }

        $ol = new OperadoresLogicos();
        $ol->operadores();
        $ol->saludar();



        ?>

    </div>






    <script src="bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>