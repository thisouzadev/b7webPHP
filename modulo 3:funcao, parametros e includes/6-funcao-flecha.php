<?php

// $dizimo = function($valor) {
//   return $valor * 0.1;
// };

$dizimo = fn(int $valor = 0) => $valor * 0.1;

echo $dizimo(90)."<br/>";