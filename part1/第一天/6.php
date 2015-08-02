<?php
//布尔类型：boolean bool  true false

$a=true;
$b=false;
var_dump($a); //bool(true) 
var_dump($b); //bool(false)

echo $a; //将布尔值true输出浏览器，值为：1

echo $b; //将布尔值false输出浏览器，值为: 没有输出

echo "<hr/>";

//其他类型转成布尔值：
var_dump((bool)10); //强转类型：bool(true)
var_dump((bool)0);  //bool(false)
var_dump((bool)-10);  //bool(true)
