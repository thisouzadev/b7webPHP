<?php
$numeros = [10, 20, 30, 40, 50];

array_pop($numeros);
print_r($numeros);
echo "<br/>";

array_shift($numeros);
print_r($numeros);
echo "<br/>";

if (in_array(40, $numeros)) {
  echo 'EXISTE';
} else {
  echo 'NÃO EXISTE';
}

echo "<br/>";

$posicao = array_search(20, $numeros);
echo $posicao;
echo "<br/>";

rsort($numeros);
print_r($numeros);
echo "<br/>";

$nomeCompletoArray = ['Thiago', 'Souza', 'e', 'Souza'];
$nomeCompleto= implode(' ', $nomeCompletoArray);
echo $nomeCompleto;
echo "<br/>";
