<?php
//PHP�еĳ�����
//��php�ж��峣���ķ�ʽ��define()�����const����

//1.define()��

define("PI",3.1415926); //����һ��Բ���ʳ���
echo PI; 

define("WTO","��������ó����֯");
define("WTO","aaa"); //�ٴζ�����Ч
echo WTO;


echo "<hr/>";
//2. ʹ��const���峣��: (>=PHP5.3.0)

const SEO="���������Ż�";
echo SEO;

echo constant("SEO"); //ͨ�������������

echo "<hr/>";
//3. php��Ԥ���峣��
echo "��ǰϵͳ��".PHP_OS."<br/>";
echo "��ǰPHP�汾��".PHP_VERSION."<br/>";
echo "��ǰ�ļ���".__FILE__."<br/>";
echo "��ǰ�кţ�".__LINE__."<br/>";


echo "<hr/>";
echo "ϵͳ�еĳ�����";
echo "<pre>";
var_dump(get_defined_constants());

