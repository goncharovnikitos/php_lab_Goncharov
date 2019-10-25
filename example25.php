<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/
$A = 3;

// x2 + 4x + 5, при x ≤ 2; в противном случае f(x) = 1/(x2 + 4x + 5).
function f($x)
{
    $x2 = pow($x, 2);
    if ($x <= 2) {
        return $x2 + 4 * $x + 5;
    }
    return 1 / ($x2 + 4 * $x + 5);
}

$res = f($A);
var_dump($res);
echo PHP_EOL;