<?php
//php中的数据类型

$a=10;
var_dump($a); //int(10) 格式化输出

$a=12.45;
var_dump($a); //float(12.45)浮点类型

$a = true;
var_dump($a); //bool(true) 布尔类型 

$a = "hello world!";
var_dump($a); //string(12) "hello world!" 字串类型

echo "<hr/>";

$a = array(10,20);
var_dump($a); //数组类型：array(2) { [0]=> int(10) [1]=> int(20) }

class B{}
$a = new B();
var_dump($a); //对象类型：object(B)#1 (0) { }

echo "<hr/>";

$a = fopen("a.txt","w"); //打开一个文件
var_dump($a);  //资源类型：resource(3) of type (stream)

$c = $a;

unset($a); //销毁一个变量
var_dump($a);  //空类型： NULL

echo $c;



