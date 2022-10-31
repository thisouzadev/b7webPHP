<?php
$array = [
  'nome' => 'Thiago',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' =>  'Azul',
  'profissao' => 'Fazedor de Bolo'
];

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
  <table border="1">
    <?php
  foreach($array as $chave => $valor): ?> 
      <tr>
        <th><?php echo $chave?></th>
        <td><?php echo $valor?></td>
      </tr>
  
  <?php endforeach; ?>
  </table>
</body>
</html>