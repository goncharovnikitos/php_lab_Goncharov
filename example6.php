<?php
function Z($a,$b)
{
	if($a == 0 || $b ==0){
		echo "Ошибка данных";
	}else{
		return 1/($a*$b);
	}
}

$X=3.2;
$Y=-10;

//print(Z($X,$Y));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>

<p>Вы ввели: <?php  echo $X .";" .$Y ?> </p>
<p> Значение функции Z: <?php echo Z($X,$Y)?> </p>

</body>
</html>

