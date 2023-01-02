<?php
$array = ['Thiago', 90, 'café', 'azul'];

// $nome = $array[0];
// $idade = $array[1];
// $bebida = $array[2];
// $cor = $array[3];

// Descontruir o array!
list($nome, $idade, $bebida, $cor) = $array;

echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." com e cor ".$cor;