<?php

$a=0.4;
$b=-0.4;
$c=10;

$maxim=max($a, $b, $c);
$minimum=min($a,$b,$c);
//echo $maxim;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>

<p>Максимальное значение: <?php  echo $maxim ?> </p>
<p> Минимальное значение: <?php echo $minimum?> </p>

</body>
</html>

