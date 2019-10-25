<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

$M = 3;
$strings = [];
$max_len = 0;

echo "Enter " . $M . ' lines:' . PHP_EOL;
foreach (range(1, $M) as $i) {
    $handle = fopen("php://stdin", "r");
    $s = fgets($handle);
    $max_len = max($max_len,strlen($s));
    $strings[] = $s;
}
echo PHP_EOL.'Result: '.PHP_EOL;
foreach ($strings as $string){
    echo str_pad($string,$max_len,'*', STR_PAD_LEFT);
}
