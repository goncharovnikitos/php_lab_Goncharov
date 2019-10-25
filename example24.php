<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/
$a = 10;
$b = 20;
$c = 10;
$d = 11;

if (min($a, $b) <= min($c, $d) and max($a, $b) <= max($c, $d)){
    $res = 'yes';
} else {
    $res = 'no';
}
echo $res;
echo PHP_EOL;