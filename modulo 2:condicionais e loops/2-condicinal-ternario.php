<?php
$idade = 40;

if ($idade >= 18) {
  echo 'Menor de idade';
} else {
  echo 'Maior de idade';
}

$resultado = ($idade < 18) ? 'Menor de idade' : 'Maior de idade'; // ternario
echo $resultado;