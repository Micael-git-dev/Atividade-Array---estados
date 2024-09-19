<?php

    $estados = array("Brasília","Salvador", "Rio de Janeiro", "Curitiba", "Amazonas");
    
    echo $estados[0]."<br>";                //Duas formas de fazer
    echo $estados[1]."<br>";
    echo $estados[2]."<br>";
    echo $estados[3]."<br>";
    echo $estados[4]."<br>";

echo "<br><br>";

    $estado = array("Brasília","Salvador", "Rio de Janeiro", "Curitiba", "Amazonas");
    foreach ($estado as $x) {
        echo "$x <br>";
    }

?>
