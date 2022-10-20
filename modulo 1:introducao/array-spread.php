<?php
$bolo1 = [
  'açucar',
  'farinha de trigo',
  'ovo',
  'leite',
  'fermento em pó'
];

$bolo2 = [
  ...$bolo1,
  'corante'
];

echo $bolo2[5]."</br>";
$lista1 = ['bonieky', 'pedro', 'thiago'];
$lista2 = ['patricia', 'fabricia', 'melissa'];
$lista3 = [...$lista1, ...$lista2];
print_r($lista3); // lista array