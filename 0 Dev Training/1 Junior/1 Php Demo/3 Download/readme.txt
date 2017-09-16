. Php 的下载非常简便

  <?php
file_put_contents('f:\f_3_test\2_Php\text.txt', file_get_contents('http://www.cninfo.com.cn/disclosure/fulltext/plate/shmblatest_24h.js'));
exit;
?>

   file_get_contents() 获取目标URL 对应的文件, 产生一个流, 然后用 file_put_contents() 将流内容保存在目标文件即可. 一句语言即可解决, 方便。。。。。。