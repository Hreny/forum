<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <?php
   	include("conn/conn.php");
    session_start();
   if(isset($_POST['user'])&& $_POST['code']!=""){
   	 $user= isset($_POST['user']) ? $_POST['user'] : '';
    $code = isset($_POST['code']) ? $_POST['code'] : '';
    $_SESSION["user"]=$_POST["user"];
    $_SESSION["code"]=$_POST["code"];
$res=mysql_query("SELECT user,code FROM tb_cadmin where user= '$user' and code = '$code'");
$row = mysql_fetch_assoc($res);
$mima=$row["code"];
if($code== $mima){
   echo "<script>alert('成功登陆')</script>";
   echo "<script>window.location.href='adindex.php';</script>";
  }
else{
	echo "<script>alert('你的用户名或者密码输入错误,请重新输入')</script>";
    echo "<script>window.location.href='cadmin.php';</script>";
     }
}
else{
	echo "<script>alert('请输入你的用户名或者密码')</script>";
    echo "<script>window.location.href='cadmin.php';</script>";
}
?>