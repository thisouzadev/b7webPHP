<?php
$nomeSujo = '   Bonieky  ';
$nomeLimpo = trim($nomeSujo);

echo "utilizando trim para tirar os espaços ".$nomeLimpo."<br/>"; // retira os espaços

echo "strtolower ".strtolower($nomeLimpo)."<br/>";
echo "strtoupper ".strtoupper($nomeLimpo)."<br/>";

$nomeAlterado = str_replace('Bonieky', 'Thiago', $nomeLimpo);
echo $nomeAlterado."<br/>";

echo strlen($nomeAlterado)."<br/>";

$nome = substr($nomeAlterado, 0, 3);

echo $nome."<br/>";

