<?php
$nome = 'thiago';
$sobrenome = 'souza';

$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? ' '.$sobrenome : '';

$nomeCompleto .= ' '.$sobrenome ?? '';  // null CAO

echo $nomeCompleto;