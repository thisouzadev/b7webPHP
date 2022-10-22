<?php
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$email = filter_input(INPUT_POST, 'email');

// $sobrenome = 'Souza';
// filter_var($sobrenome, );
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_INT
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_URL

// FILTER_SANITIZE_EMAIL
// FILTER_SANITIZE_STRING
// FILTER_SANITIZE_SPECIAL_CHARS
// FILTER_SANITIZE_URL
// FILTER_SANITIZE_NUMBER_FLOAT

if ($nome && $email && $idade) {
  echo "Nome: ".$nome."<br/>";
  echo "Idade: ".$idade."<br/>";
  echo "Email: ".$email;
} else {
 echo "nao enviou";
}
