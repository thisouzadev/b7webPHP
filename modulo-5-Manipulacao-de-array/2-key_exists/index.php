<?php
$array = [
  'nome' => 'Thiago',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' =>  'Azul',
  'profissao' => 'Fazedor de Bolo'
];

if (key_exists('idade', $array)) {
  $idade = $array['idade'];
  echo $idade." anos";
} else {
  echo "Não tem idade";
}