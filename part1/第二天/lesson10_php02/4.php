<?php
//PHP�������������ͣ����飬������Դ�Ϳ�

//1. �������ͣ�����һ�������д�Ŷ��ֵ
$a = array(10,20,30);
var_dump($a);
//array(3){[0]=>int(10) [1]=>int(20) [2]=>int(30)}

echo "<hr/>";

//2. �������ͣ�
//����һ����
class Stu{
    public $name="zhangsan";
}
//ʵ���������ɶ���
$s = new Stu();
var_dump($s); //��������
//object(Stu)#1 (1) { ["name"]=> string(8) "zhangsan" }


echo "<hr/>";
//3. ��Դ����
$f = fopen("a.txt","w"); //�򿪵��ļ��ͳ�Ϊһ����Դ
var_dump($f);
//resource(3) of type (stream)


echo "<hr/>";
//4.NULL ������
var_dump($b);//δ����ı���Ϊnull

$name="zhangsan";
unset($name);
var_dump($name); //��ִ��unset�������ٵı���Ϊnull

$a=10;
$a=null;
var_dump($a); // 





