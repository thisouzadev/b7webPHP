<?php
 $tipo = 'foto';

switch ($tipo) {
  case 'foto':
    echo 'Exibindo FOTO';
    break;
  case 'video':
    echo 'Exibindo VIDEO';
    break;
  case 'texto':
    echo 'Exibindo TEXTO';
    break;
  default:
    # code...
    break;
}
