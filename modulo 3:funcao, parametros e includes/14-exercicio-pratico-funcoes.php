<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR', 'portuguese.UTF8');

function diaDaSemana($data) {
   return strftime("%A", strtotime($data));
   
};

echo diaDaSemana('2022-05-05');
