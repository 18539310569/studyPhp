<?php
//�ִ����������: .  .=

echo "aaa"."bbb"; //�����ִ�ʹ�õ�����

$a=10;
$b="kg";
echo $a.$b;  //��������֮��ʹ�õ�����

echo $a."����<br/>"; //�������ִ�֮������ӡ�

//���ִ��������
$a=20;
echo "������{$a}��������<br/>";
echo "������".$a."��������<br/>";
echo '������'.$a.'��������<br/>';

echo "<hr/>";

$name="�ٶ�";
$url="http://www.baidu.com";

//Ƕ��д��
echo "<a href=\"{$url}\">{$name}</a><br/>";
echo "<a href='{$url}'>{$name}</a><br/>";
//����ʽд��
echo "<a href='".$url."'>".$name."</a><br/>";
echo "<a href=\"".$url."\">".$name."</a><br/>";
echo '<a href="'.$url.'">'.$name.'</a>';



