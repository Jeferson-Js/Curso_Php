<?php 

$a = 10;
$b = 5;
$c = 6;
$d = 7;

function soma($a, $b) {
    global $a;
    global $b;
    echo $a + $b;
    echo '<br>';
}
soma(10, 5);


function subtracao($c, $d) {
    global $c;
    global $d;
    echo $c - $d;
    echo '<br>';
}
subtracao(6, 7);


function divisao($d, $a){
    global $d;
    global $a;
    echo $d / $a;
    echo '<br>';
}
soma(7, 10);


function multiplicacao($c, $b)
{
    global $c;
    global $b;
    echo $c * $b;
    echo '<br>';
}
multiplicacao(6, 5);
