<?php 

$name = 'Jeferson'; // Este tipo é uma string!
$num = 100; // Este tipo é um numero do tipo inteiro!
$salario = 3000.85; // Este tipo é float
$verdade = True; // Este tipo é bool

echo $name;
echo '<br>';
echo $num;
echo '<br>';
echo $salario;
echo '<br>';
echo $verdade;

# Tipo string
if(is_string($name)) {
    echo '<br>';
    echo 'Este tipo é uma string!';
}

# Tipo inteiro
if(is_int($num)){
    echo '<br>';
    echo 'Este tipo inteiro!';
}

# Tipo float
if(is_float($salario)){
    echo '<br>';
    echo 'Este tipo float!';
}

# Tipo bool
if(is_bool($verdade)){
    echo '<br>';
    echo 'Este tipo bool!';
}