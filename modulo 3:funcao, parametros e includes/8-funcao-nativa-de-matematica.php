<?php
$numero = -8.4;
echo abs($numero)."<br/>"; // transforma em positivo

echo pi()."<br/>";

$numero = 2.7;

echo $numero." "."floor ".floor($numero)."<br/>"; // arredoda para baixo

echo $numero." "."ceil ".ceil($numero)."<br/>"; // arredonda para cima

echo $numero." "."round ".round($numero)."<br/>"; // arredonda

$aleatorio = rand(0,9); // numeros aleatorios

echo "numeros aleatorios 'rand': ".$aleatorio."<br/>";

$lista = [1, 8, 20, 60];
echo "numero maximo 'max': ".max($lista)."<br/>";
echo "numero minimo 'min': ".min($lista)."<br/>";

echo "https://www.php.net/manual/pt_BR/ref.math.php";
// https://www.php.net/manual/pt_BR/ref.math.php
