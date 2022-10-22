<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($nome && $email && $idade) {
  echo "Nome: ".$nome."<br/>";
  echo "Idade: ".$idade."<br/>";
  echo "Email: ".$email;
} else {
  $_SESSION['aviso'] = 'Preencha os itens corretamente!';
  header("location: index.php");
  exit;
}
