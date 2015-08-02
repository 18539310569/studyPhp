<?php
//浮点数：float double

$f=12.34567;
echo $f;
var_dump($f); //float(12.34567)

$a = 0.123E4; //0.123乘以10的4次方
echo $a; //1230

echo "<hr/>";

echo "浮点数的精度损耗:";

var_dump((0.1+0.2)>0.3);
var_dump((0.1+0.7)<0.8);

echo 0.1+0.7;