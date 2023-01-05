  <?php $render('header'); ?>

  <a href="<?=$base;?>/novo">Novo Usuário</a>
  <table border='1' width="100%">
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>EMAIL</th>
      <th>ACTION</th>
    </tr>
    <?php foreach($usuarios as $usuario):?>
    <tr>
      <td><?=$usuario['id'];?></td>
      <td><?=$usuario['nome'];?></td>
      <td><?=$usuario['email'];?></td>
      <td>
        <a width="20" href="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar">
          <img src="assets/images/document.png" alt="document">
        </a>
        <a width="20" href="<?=$base;?>/usuario/<?=$usuario['id'];?>/excluir"
          onclick="return confirm('Tem certeza que deseja excluir?')">
          <img src="/assets/images/trash.png" alt="trash">
        </a>
      </td>
    </tr>
    
    <?php endforeach;?>
  </table>
  <?php $render('footer'); ?>
