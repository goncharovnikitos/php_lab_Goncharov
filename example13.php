<?php
$d=8;
$a=2;


function Prov($x,$y){
if($y*sqrt(2)<=$x){
	echo "Можно!";
}else{
	echo "Нельзя!";
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

<p>Диаметр поперечного сечения: <?php  echo $d ?> </p>
<p>Ширина квадратного бруса: <?php  echo $a ?> </p>
<p><?php Prov($d,$a)?></p>

</body>
</html>