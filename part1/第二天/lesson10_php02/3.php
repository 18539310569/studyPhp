<?php
//php�е��ִ�����
//��php�ж����ִ��ķ�ʽ��
//1. �����ţ���֧�ֱ�������  ֧��ת�����\' \\
//2. ˫���ţ�֧�ֱ�������  ֧��ת�����\" \\ \$ \n \t \r ...
//3. �������<<<
//    ���ж������Ϊ�������Ŷ�����Ͳ��������Ŷ�����Ķ��塣

$a=60;

echo "����{$a}kg"; //˫���Ŷ����ִ�����������Ϊ���ĳ�ͻ����ʹ��{}��������������
echo '����$akg <br/>';  //�����Ų�֧�ֱ�������

//�ִ��е�ת���ʹ��
echo 'I\'m zhangsan.';
echo "<a href=\"1.php\">1.php \$a</a>";

/*
$s1 = "hello";  //˫���Ŷ����ִ�
$s2 = ' world!';//�����Ŷ����ִ�
echo $s1.$s2; //�������Ӳ����
*/


echo "<hr/>";


//����������ִ�
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





