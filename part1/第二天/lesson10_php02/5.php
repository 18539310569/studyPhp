<?php
//PHP中的常量：
//在php中定义常量的方式：define()定义和const定义

//1.define()；

define("PI",3.1415926); //定义一个圆周率常量
echo PI; 

define("WTO","国际世界贸易组织");
define("WTO","aaa"); //再次定义无效
echo WTO;


echo "<hr/>";
//2. 使用const定义常量: (>=PHP5.3.0)

const SEO="搜索引擎优化";
echo SEO;

echo constant("SEO"); //通过函数输出常量

echo "<hr/>";
//3. php中预定义常量
echo "当前系统：".PHP_OS."<br/>";
echo "当前PHP版本：".PHP_VERSION."<br/>";
echo "当前文件：".__FILE__."<br/>";
echo "当前行号：".__LINE__."<br/>";


echo "<hr/>";
echo "系统中的常量：";
echo "<pre>";
var_dump(get_defined_constants());

