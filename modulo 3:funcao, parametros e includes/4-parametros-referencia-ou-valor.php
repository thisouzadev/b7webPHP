<?php
function somar($n1, $n2, &$total) {
  $total = $n1 + $n2;
}

$x = 3;
$y = 2;
$total = 0;

somar($x, $y, $total);
echo "TOTAL : ".$total."<br/>";

$lista = [4, 9, 2];

sort($lista);
print_r($lista);
