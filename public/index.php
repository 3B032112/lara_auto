<?php
//引入自動載入
require '../vendor/autoload.php';

//initiative import namespace
use Demo\Hello\Lara;
use Demo\Hello\Someone;

$lara = new Lara();
$vincent = new Someone('Vincent');

//passive import namespace
$mary = new \Demo\Hello\Someone('Mary');
$john = new Demo\Hello\Someone('John');
$hello = new Demo\HelloWorld();

//類別別名
use Demo\HelloWorld as World;

$world = new World();

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('WISD');
$log->pushHandler(new StreamHandler('../log/my.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
