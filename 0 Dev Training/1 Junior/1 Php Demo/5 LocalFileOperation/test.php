<?php

$path = ��post/��; //ָ���洢·��

$filename = ��S��.date(��YmdHis��).��.dat��; //�ɵ�ǰʱ������ļ���

$fp = fopen($path.$filename,��w��); //��д��ʽ���������ļ�

fwrite($fp, $_POST["title"].��\n��); //д������

fwrite($fp, $_POST["author"].��\n��); //д������

fwrite($fp, $_POST["content"].��\n��); //д������

fclose($fp);

echo ������www.phpdo.net�����Է����ɹ���; //��ʾ���Է����ɹ�

echo ��<a href=��Index.php��>������ҳ</a>��;

?>