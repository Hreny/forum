<?php
     $conn=mysql_connect("localhost:3306","a0913225959","44305138") or die("数据库服务器连接错误".mysql_error());
     mysql_select_db("a0913225959",$conn) or die("数据库访问错误".mysql_error());
     mysql_query("set names utf8");
?>
