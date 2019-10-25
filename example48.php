<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

$A = [1,0,4,-2,0,-3,4,5,6];
$N = count($A);
// идем в обратном порядке, чтобы суммировать начальные элементы массива, а не обновленные
for ($i=$N-1; $i>0; $i--){
    if ($A[$i]==0) {
        $A[$i]+= $A[$i-1];
        if ($i-1>0) $A[$i]+= $A[$i-2];
    }
}
echo implode(',',$A);
echo PHP_EOL;
