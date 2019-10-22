<?php
$num=-8;

function ProvNum($x){

if($x > 0){
	echo "Введенное число  положительное<br>";
}else if ($x<0){
	echo "Введенное число отрицательное<br>";
}else{
	echo "Число равно нулю<br>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>

<p>Вы ввели: <?php  echo $num ?> </p>
<p><?php ProvNum($num)?></p>

</body>
</html>