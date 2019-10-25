<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

$A = [1,2,3,4,5];
$N = count($A);
if ($N > 1) {
	for ($i=1; $i<$N; $i+=2){
		$v = $A[$i-1];
		$A[$i-1] = $A[$i];
		$A[$i] = $v;
	}
}
echo implode(',',$A);
echo PHP_EOL;
