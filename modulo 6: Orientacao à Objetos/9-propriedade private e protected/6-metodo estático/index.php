<?php
class Matematica {

  public static string $nome = 'Thiago';

  public static function somar($x, $y) {
    return $x + $y;
  }

}

// $n = new Matematica();
// echo $n->somar(10, 20);

echo Matematica::somar(20, 30)."<br/>";
echo Matematica::$nome;