<?php
require 'config.php';
require 'dao/UsuarioDaoMySQL.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="adicionar.php">ADICIONAR USÚARIO</a>

  <table border="1" width="100%">
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>EMAIL</th>
      <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
    <tr>
      <td><?= $usuario->getId();?></td>
      <td><?= $usuario->getNome();?></td>
      <td><?= $usuario->getEmail();?></td>
      <td>
        <a href="editar.php?id=<?= $usuario->getId();?>">[ Editar ]</a>
        <a href="excluir.php?id=<?= $usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')">[
          Excluir ]</a>
      </td>
    </tr>
    <?php  endforeach; ?>
  </table>
</body>

</html>