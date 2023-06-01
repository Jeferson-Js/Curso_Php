<?php 

$soma = 5 / 2;

echo $soma;
echo '<br>';


if(is_float($soma)){
    echo 'Este tipo é float!';
}

echo '<br>';

$tipoText = 5 . 2;

if(is_string($tipoText)){
    echo 'Este tipo é String!';
}

echo '<br>';

$name = 'Jeferson';
$sobrenome = 'Oliveira';

$nomeCompleto = "$name $sobrenome";

echo $nomeCompleto;