<?php 

$name = 'Jeferson';
$otherName = 'Jefferson';


if($name != $otherName){
    echo 'Os dados não são iguais';
}

// como indentificar se um tipo primitivo é boolean utilizando o is_boolean


$a = True;

if(is_bool($a)) {
    echo '<br>';
    echo 'Este tipo primitivo é do tipo boolean';
}