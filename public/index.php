<?php
//引入自動載入
require '../vendor/autoload.php';

//initiative import namespace
use Demo\Hello\Lara;
use Demo\Hello\Someone;

$lara = new Lara();
printf("<br>");
$vincent = new Someone('Vincent');
printf("<br>");
//passive import namespace
$mary = new \Demo\Hello\Someone('Mary');
printf("<br>");
$john = new Demo\Hello\Someone('John');
printf("<br>");
$hello = new Demo\HelloWorld();
printf("<br>");
//類別別名
use Demo\HelloWorld as World;

$world = new World();
printf("<br>");

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('WISD');
$log->pushHandler(new StreamHandler('../log/my.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');


use Carbon\Carbon;

printf("現在時間: %s", Carbon::now());
printf("<br>");
