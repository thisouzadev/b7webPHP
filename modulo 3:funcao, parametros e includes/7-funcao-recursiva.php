<?php
function dividir($numero) {
  $metade = $numero / 2;
  echo $metade."<br/>";

  if (round($metade) > 0) { // round = número de ponto flutuante.
    dividir($metade);
  }
}

dividir(100);