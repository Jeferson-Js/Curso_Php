<?php 

$name = 'Jeferson';
$lastname = 'Oliveira';
$idioma = 'Português';

echo 'Seu nome é '. $name;
echo '<br>';
echo 'Seu sobrenome é '. $lastname;
echo '<br>';
echo 'Seu idioma é '. $idioma;

if(is_string($name)){
    echo '<br>';
    echo 'Este teste foi feito com aspas simples';
}

if(is_string($name)){
    echo '<br>';
    echo "Este teste foi feito com aspas duplas";
}