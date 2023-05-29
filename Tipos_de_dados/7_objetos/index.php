<?php 

class Pessoa {
    
    function falar(){
        echo 'Olá pessoal!';
    }
}

$jeferson = new Pessoa();

$jeferson->nome = 'Jeferson Santos Oliveira';

echo $jeferson->nome;

echo '<br>';

echo $jeferson->falar();
    