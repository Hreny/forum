<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?php
 include("conn/conn.php");
  session_start();
  $bz=$_POST["user"];
  $zq=$_POST["zq"];
   if($zq!=""){
    $dates=date("Y-m-d H:i:s");
     $sql=mysql_query("insert into tb_czqlx(zq,bz,cjsj) values('$zq','$bz','$dates')");
  if($sql){echo "<script>alert('添加成功！');location.href='adindex.php';</script>";}
	else{echo "<script>alert('添加失败！'); history.back();</script>";}
}
else {echo"<script>alert('添加失败！不能为空'); history.back();</script>";}
?>