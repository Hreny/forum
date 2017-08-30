<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?php
 include("conn/conn.php");
  if(isset($_POST["submit"])){
	session_start();
  $username=$_SESSION["username"];
   $message=$_POST["message"];
if($message!=""){
$dates=date("Y-m-d H:i:s");
$sql=mysql_query("insert into tb_clyb(username,message,time) values('$username','$message','$dates')");
if($sql){echo "<script>alert('留言成功！');location.href='cliuyb.php';</script>";}
	else{echo "<script>alert('留言失败！');location.href='cliuyb.php';</script>";}
}
else {echo"<script>alert('留言失败！不能为空');location.href='cliuyb.php';</script>";}
	
}
?>