<?php
 $fh=fopen('./msg.txt','a');//���ĵ�
 $str=$_POST['username'].":".$_POST['comments']."<br> \r\n";
 $str=preg_replace('/script/','*',$str); 
 fwrite($fh,$str);               //д����
 fclose($fh);

 //echo '��ˢ�²鿴����';
header("location:http://localhost/messb/messagepro.html");

?>