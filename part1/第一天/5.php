<?php
//php�е���������

$a=10;
var_dump($a); //int(10) ��ʽ�����

$a=12.45;
var_dump($a); //float(12.45)��������

$a = true;
var_dump($a); //bool(true) �������� 

$a = "hello world!";
var_dump($a); //string(12) "hello world!" �ִ�����

echo "<hr/>";

$a = array(10,20);
var_dump($a); //�������ͣ�array(2) { [0]=> int(10) [1]=> int(20) }

class B{}
$a = new B();
var_dump($a); //�������ͣ�object(B)#1 (0) { }

echo "<hr/>";

$a = fopen("a.txt","w"); //��һ���ļ�
var_dump($a);  //��Դ���ͣ�resource(3) of type (stream)

$c = $a;

unset($a); //����һ������
var_dump($a);  //�����ͣ� NULL

echo $c;



