<?php 

# para acessar uma variavel global dentro do escopo de uma função basta utilizar a expressão 'GLOBAL'

$name = 'Jeferson';

function teste(){
   global $name;
    echo $name;
}

teste();