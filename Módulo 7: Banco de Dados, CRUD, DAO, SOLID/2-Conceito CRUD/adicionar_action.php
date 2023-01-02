<?php
require 'config.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {

  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
  $sql->bindValue(':email', $email);
  $sql->execute();

  if ($sql->rowCount() === 0) {
    
    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(':nome', $name);
    $sql->bindValue(':email', $email);
    $sql->execute();
  } else {
    header("Location: adicionar.php");
    exit;
  }


  header("Location: index.php");
  exit;
  
} else {
  header("Location: adicionar.php");
  exit;
}