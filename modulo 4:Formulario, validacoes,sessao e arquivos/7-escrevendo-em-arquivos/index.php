<?php 
$texto = 'Thiago Souza';

file_put_contents('nome.txt', $texto);

// $texto = file_get_contents('texto.txt');
// $texto .= "\nThiago Souza";
// file_put_contents('texto.txt', $texto);
echo 'arquivo criado com sucesso';
?>

