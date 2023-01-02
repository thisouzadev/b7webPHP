<?php 
// $numeros = [1, 2, 3, 4, 5];

// function somar($accumulador, $item) {
//   $accumulador += $item;
//   return $accumulador;
// }

// $total = array_reduce($numeros, 'somar');

// echo $total."<br/>";


$pessoas = [
  ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
  ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
  ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],
  ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],
  ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 9],
  ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9],
];

function contar_m($accumulador, $item) {
  if($item['sexo'] === 'M'){
    $accumulador++;
  }
  return $accumulador;
}

$total_m = array_reduce($pessoas, 'contar_m');

// Soma das notas dos homens
function soma_m($accumulador, $item) {
  if ($item['sexo'] === 'M') {
    $accumulador += $item['nota'];
  }
  return $accumulador;
}

$soma_ma = array_reduce($pessoas, 'soma_m');

// Média dos homens
$media_m = $soma_ma / $total_m;

echo "Total de homens: ".$total_m."<br/>";
echo "Soma das notas de homens: ".$soma_ma."<br/>";
echo "Média dos homens: ".$media_m."<br/>";