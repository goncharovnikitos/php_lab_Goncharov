<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

$A = [1,2,3,4,5,6];
$N = count($A);
$M = 2;
$K = 3;
array_splice($A, $M, $K); // вырезамел элементы, начиная с $M в количестве $K элементов

echo implode(',',$A);
echo PHP_EOL;
