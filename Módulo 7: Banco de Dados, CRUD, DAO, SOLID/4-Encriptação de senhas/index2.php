<?php
$hash = '$2y$10$Bk/nug.RvY8SdLI6fcx28Oe86P2Pcg89qmtADtQG9tqk7ygQR7AH6';
$senha = '1234';

if(password_verify($senha, $hash)) {
  echo 'Senha correta!';
} else {
  echo 'Senha incorreta';
}