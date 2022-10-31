<?php
$array = [
  'nome' => 'Thiago',
  'idade' => 90,
  'empresa' => 'B7web',
  'cor' =>  'Azul',
  'profissao' => 'Fazedor de Bolo'
];
$chaves = array_keys($array);
$valores = array_values($array);
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
    <tr>
      <?php foreach($chaves as $chave): ?> 
          <th> <?php echo $chave ?> </th>
      <?php endforeach; ?>
    </tr>
    <tr>
      <?php foreach($valores as $valor): ?> 
      <th> <?php echo $valor ?> </th>
      <?php endforeach; ?>
    </tr>
  </table>
</body>
</html>