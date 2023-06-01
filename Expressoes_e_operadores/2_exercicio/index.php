<?php 

$qualTipo = "5" * 12;

if(gettype($qualTipo)){
    echo 'Qual é o tipo: ' . $qualTipo;
}

echo '<br>';

echo gettype($qualTipo);