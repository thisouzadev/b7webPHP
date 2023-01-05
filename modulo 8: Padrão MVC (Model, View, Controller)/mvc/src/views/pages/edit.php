<?php $render('header'); ?>


<link rel="stylesheet" href="<?$base;?>/assets/css/style.css">



<h2>Editar Usuário</h2>
<form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" method="post">
  <label for="">
    Nome: <br>
    <input type="text" name="name" id="" value="<?=$usuario['nome'];?>">
  </label><br><br>
  <label for="">
    <input type="email" name="email" id="" value="<?=$usuario['email'];?>">
  </label><br><br>
  <input type="submit" value="Salvar">
</form>



<?php $render('footer'); ?>