<?php
require 'vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use \classes\matematica\Basica;

$m = new Basica();
echo $m->somar(10, 10);
// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('test.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');