<?php
//字串连接运算符: .  .=

echo "aaa"."bbb"; //两个字串使用点连接

$a=10;
$b="kg";
echo $a.$b;  //两个变量之间使用点连接

echo $a."公斤<br/>"; //变量和字串之间的连接。

//在字串输出变量
$a=20;
echo "我买了{$a}斤土豆！<br/>";
echo "我买了".$a."斤土豆！<br/>";
echo '我买了'.$a.'斤土豆！<br/>';

echo "<hr/>";

$name="百度";
$url="http://www.baidu.com";

//嵌入写法
echo "<a href=\"{$url}\">{$name}</a><br/>";
echo "<a href='{$url}'>{$name}</a><br/>";
//分离式写法
echo "<a href='".$url."'>".$name."</a><br/>";
echo "<a href=\"".$url."\">".$name."</a><br/>";
echo '<a href="'.$url.'">'.$name.'</a>';



