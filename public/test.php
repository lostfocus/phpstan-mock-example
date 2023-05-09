<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

$second = new \App\SecondTestClass();
$first = new \App\FirstTestClass($second);

echo $first->test();
