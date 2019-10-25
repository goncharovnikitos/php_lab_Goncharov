<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

$A = [1,2,3,4,5,6];
$N = count($A);
$half = floor($N/2);
$quike = $N-$half;
if ($half > 0) {
	for ($i=0; $i<$half; $i++){
		$j = $i+$quike;
		$v = $A[$j];
		$A[$j] = $A[$i];
		$A[$i] = $v;
	}
}
echo implode(',',$A);
echo PHP_EOL;
