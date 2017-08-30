<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <?php
   	include("conn/conn.php");
    session_start();
	$Submit = isset($_POST['Submit']) ? $_POST['Submit'] : '';
   if($Submit){//如果有表单提交
   	if(isset($_POST['username'])&& $_POST['pass']!=""){
      $username= isset($_POST['username']) ? $_POST['username'] : '';
      $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
      $_SESSION["username"]=$_POST["username"];
      $_SESSION["pass"]=$_POST["pass"];
function make_safe($variable) {
$variable = addslashes(trim($variable));
return $variable; }
$res=mysql_query("SELECT username,pass FROM tb_cuser where username= '$username' and pass = '$pass'");
$row = mysql_fetch_assoc($res);
$mima=$row["pass"];
     if($pass== $mima)
        {
      echo "<script>alert('成功登陆')</script>";
      echo "<script>window.location.href='index.php';</script>";
       }
else
     {
	echo "<script>alert('你的用户名或者密码输入错误,请重新输入')</script>";
    echo "<script>window.location.href='clog.php';</script>";
    }
}

else{
	echo "<script>alert('请输入你的用户名或者密码')</script>";
    echo "<script>window.location.href='clog.php';</script>";
}
}
?>