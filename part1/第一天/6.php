<?php
//�������ͣ�boolean bool  true false

$a=true;
$b=false;
var_dump($a); //bool(true) 
var_dump($b); //bool(false)

echo $a; //������ֵtrue����������ֵΪ��1

echo $b; //������ֵfalse����������ֵΪ: û�����

echo "<hr/>";

//��������ת�ɲ���ֵ��
var_dump((bool)10); //ǿת���ͣ�bool(true)
var_dump((bool)0);  //bool(false)
var_dump((bool)-10);  //bool(true)
