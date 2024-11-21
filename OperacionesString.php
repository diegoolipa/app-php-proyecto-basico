<?php
include "./Padre.php";

class OperacionesString extends Padre{

    public function llamarPadre(){
        // parent::saludo();
        $this->saludo();
    }

    public function funcionesString(){
        echo <<<'EOT'
        <pre>
            strlen(): Devuelve la longitud de una cadena.
            strtolower(): Convierte una cadena a minúsculas.
            strtoupper(): Convierte una cadena a mayúsculas.
            substr(): Devuelve una parte de una cadena.
            str_replace(): Reemplaza todas las ocurrencias de una subcadena por otra.
        </pre>
        EOT;
    }

}