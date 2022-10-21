<?php

$nomeCompleto = 'Thiago Souza';

$posicao = strpos($nomeCompleto, 'z'); // mostra posiçao da primeira ocorrencia da letra ou numero

echo $posicao."<br/>";

if ($posicao > -1) {
  echo 'ACHOU!'."<br/>";
} else {
  echo "NÃo ACHOU"."<br/>";
}

$nomeCompleto2 = 'bonieky lacerda';
echo ucfirst($nomeCompleto2)."<br/>"; // primeira letra da primeira palavra em maiscula
echo ucwords($nomeCompleto2)."<br/>"; // primeira letra de cada palavra maiuscula

$nomeArray = explode(' ', $nomeCompleto); // cria um array tira o espaço e cria o array

echo print_r($nomeArray)."<br/>";

$numero = 12913.12;

echo "R$ :".numfmt_format($numero, 2, ',', '.')."<br/>"; // parecido com o tofixed do javascriped


