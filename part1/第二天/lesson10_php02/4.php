<?php
//PHP中其他数据类型：数组，对象，资源和空

//1. 数组类型：就是一个变量中存放多个值
$a = array(10,20,30);
var_dump($a);
//array(3){[0]=>int(10) [1]=>int(20) [2]=>int(30)}

echo "<hr/>";

//2. 对象类型：
//定义一个类
class Stu{
    public $name="zhangsan";
}
//实例化类则变成对象
$s = new Stu();
var_dump($s); //对象类型
//object(Stu)#1 (1) { ["name"]=> string(8) "zhangsan" }


echo "<hr/>";
//3. 资源类型
$f = fopen("a.txt","w"); //打开的文件就称为一个资源
var_dump($f);
//resource(3) of type (stream)


echo "<hr/>";
//4.NULL 空类型
var_dump($b);//未定义的变量为null

$name="zhangsan";
unset($name);
var_dump($name); //被执行unset（）销毁的变量为null

$a=10;
$a=null;
var_dump($a); // 





