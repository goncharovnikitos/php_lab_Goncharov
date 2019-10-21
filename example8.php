<?php
$num=125;

function ProvNum($x){

if($x % 2==0){
	echo "Введенное число  четное<br>";
}else{
	echo "Число нечетное<br>";
}
if($x%5==0){
	echo "и кратно 5";
}else{
	echo "и некратно 5";
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