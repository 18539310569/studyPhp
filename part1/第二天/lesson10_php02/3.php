<?php
//php中的字串类型
//在php中定义字串的方式：
//1. 单引号：不支持变量解析  支持转义符：\' \\
//2. 双引号：支持变量解析  支持转义符：\" \\ \$ \n \t \r ...
//3. 定界符：<<<
//    其中定界符分为带单引号定界符和不带单引号定界符的定义。

$a=60;

echo "体重{$a}kg"; //双引号定义字串解析变量，为了拍冲突建议使用{}将变量括起来。
echo '体重$akg <br/>';  //单引号不支持变量解析

//字串中的转义符使用
echo 'I\'m zhangsan.';
echo "<a href=\"1.php\">1.php \$a</a>";

/*
$s1 = "hello";  //双引号定义字串
$s2 = ' world!';//单引号定义字串
echo $s1.$s2; //变量连接并输出
*/


echo "<hr/>";


//定界符定义字串
$str=<<<'mystr'
    <ul>
        <li><a href="" title='aaa'>aaaa$a</a></li>
        <li><a href="">bbbb mystr;</a></li>
        <li><a href="" title='ddd'>cccc</a></li>
    </ul>
mystr;

echo $str;

$str=<<<mystr
    <ul>
        <li><a href="" title='aaa'>aaaa$a</a></li>
        <li><a href="">bbbb mystr;</a></li>
        <li><a href="" title='ddd'>cccc</a></li>
    </ul>
mystr;





