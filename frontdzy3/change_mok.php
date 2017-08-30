<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php
session_start();
$newpwd=$_POST['pwd'];
include("conn/conn.php");
$sql=mysql_query("update tb_cuser set pass='$newpwd' where username='$_SESSION[username]'");
?>
<script language="javascript" charset="utf-8">alert("密码更改成功!");window.location.href="change.php";</script>		
