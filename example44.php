<?php
// Решение задач из задачника http://chel-center.ru/php-yfc/php-prodvinutyj-praktikum/

$A = [1,-2,0,-3,4,5,6];
$N = count($A);
$pos = $neg = 0;
for ($i=0; $i<$N; $i++){
	if ($A[$i]>0) $pos++;
	if ($A[$i]<0) $neg++;
}
$diff = $pos - $neg;
if ($diff != 0){
	$sign = ($diff > 0) ? -1 : 1;	
	$A = array_pad($A, $N+abs($diff), $sign); // дополняем массив $N значениями $sign в количестве $N+abs($diff);
}
echo implode(',',$A);
echo PHP_EOL;
