<?php

function calculaMedia(array $vetorInteiros){

    $nota = 0;

    foreach($vetorInteiros as $numero){
        
        $nota = $nota + $numero;
        $media = $nota / count($vetorInteiros);

    }

return $media;

}

$inteiros = [10, 5, 7, 9];

echo calculaMedia($inteiros);
