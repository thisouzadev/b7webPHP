<?php $render('header'); ?>


<h2>Adicionar novo Usuário</h2>
<form action="<?=$base;?>/novo" method="post">
  <label for="">
    Nome: <br>
    <input type="text" name="name" id="">
  </label><br><br>
  <label for="">
    <input type="email" name="email" id="">
  </label><br><br>
  <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>