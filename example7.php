<?php
$num=918;

function ProvNum($x){

if($x % 2==0 && $x % 4 ==0){
	echo "Введенное число  четное и кратно четырем";
}else if($x %2==0){
	echo "Число четное, но не кратное 4";
}else{
	echo "Число нечетное и не кратно 4";
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