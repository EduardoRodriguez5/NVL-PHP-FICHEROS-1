<?php


$palabras = ["lunes", "mariposa", "sol", "acelerador", "aceituna", "palo"];
$palabrasGrandes = [];
foreach ($palabras as $palabra){

    $longitudPalabra = strlen($palabra);
    if  ($longitudPalabra > 5){
        $i = 1;
        echo "$palabra ";
        

        echo "El nuúmero de palanras mayor de 5 es " . $i++;
    }

}


