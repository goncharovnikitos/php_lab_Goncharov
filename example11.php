<?php


$a=13;
$b=2;
$c=1.5;
$m=10;
$k=1;
if(($a<=$m && $b<=$k)||($a<=$k && $b<=$m)||($b<=$m && $c<=$k)||($b<=$k && $c<=$m)||($a<=$m && $c<=$k)||($a<=$k && $c<=$m)){
	echo "Коробка пройдет в дверь.";
}else{
	echo "Коробка не пройдет в дверь.";
}

?>