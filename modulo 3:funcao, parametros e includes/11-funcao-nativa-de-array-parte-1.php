<?php
$lista = ['nome1', 'nome2', 'nome3', 'nome4', 'nome5'];

echo "TOTAL: ".count($lista)."<br/>";

$secondLista = ['bonieky', 'pedro', 'paula', 'jose'];

$aprovados = ['paula', 'jose', 'thiago', 'carlos'];

$reprovados = array_diff($secondLista, $aprovados);

print_r($reprovados)."<br/>";

$numeros = [10, 20, 30, 40, 50];

$filtrados = array_filter($numeros, function($item){
if ($item < 30) {
  return true;
} else {
  false;
}
});
echo "<br/>";
print_r($filtrados);

$dobrados = array_map(function($item){
  return $item * 2;
}, $numeros);
echo "<br/>";
print_r($dobrados);
echo "<br/>";

