<?php
$date = new DateTime();
$date->add(DateInterval::createFromDateString('2 days'));
$date->sub(DateInterval::createFromDateString('2 days'));

// $date->setTimezone( new DateTimeZone('America/Sao_Paulo'));
echo $date->format('d/m/Y');