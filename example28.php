<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

// если хотя бы одно из значение A или B является ЛОЖЬ, то вернуть ЛОЖЬ, иначе вернуть ИСТИНА
function f_and($a, $b)
{
    if (!$a) return false;
    if (!$b) return false;
    return true;
}

// если хотя бы одно из значение A или B является ИСТИНОЙ, то вернуть ИСТИНА, иначе вернуть ЛОЖЬ
function f_or($a, $b)
{
    if ($a) return true;
    if ($b) return true;
    return false;
}

$a = 1;
$b = 0;
$res_and = f_and($a, $b);
$res_or = f_or($a, $b);
var_dump($res_and);
var_dump($res_or);
