<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

$vowels_str = 'eyuioa';
$vowels = str_split($vowels_str);

$M = 3;
$strings = [];
$strings_without_vowels = [];
$max_len = 0;

echo "Enter " . $M . ' lines:' . PHP_EOL;
foreach (range(1, $M) as $i) {
    $handle = fopen("php://stdin", "r");
    $s = fgets($handle);
    $strings[] = $s;
}
foreach ($strings as $string) {
    // удаляем гласные и считаем разницу длины
    $s = strtolower($string);
    $s = str_replace($vowels, '', $s);

    echo (strlen($string) - strlen($s)) . ' vowels in string: '.$string;
}
