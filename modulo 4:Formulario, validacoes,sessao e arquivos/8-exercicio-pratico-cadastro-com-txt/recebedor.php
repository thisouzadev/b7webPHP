<?php
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

if($nome) {
    $nomes = htmlspecialchars(file_get_contents("nomes.txt"));
    $nomes .= "\n".$nome;
    file_put_contents("nomes.txt", $nomes);
}
header("Location: index.php");
exit;