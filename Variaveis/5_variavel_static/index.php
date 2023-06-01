<?php 

function teste() {
    $a = 0;
    $a++;

    echo "Número $a <br>";
    echo '<br>';

}

teste();
teste();
teste();


// Utilizando a expressão static para alterar o valor da variavel.

function testeStatic(){
  static  $b = 0;
    $b++;

    echo "Número alterado $b <br>";
}

testeStatic();
testeStatic();
testeStatic();
testeStatic();