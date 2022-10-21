<?php
echo date('d/m/Y H:i:s');
echo "<br/>";

$data = '2020-03-07';
$dataFormatada = strtotime($date);

echo date('d/m/Y', $dataFormatada);