<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
session_start();	
include_once("conn/conn.php");
//$furl=getenv("HTTP_REFERER");	
if(isset($_POST['submit'])){		
    $username=trim($_POST['username']);
	$pass=trim($_POST['pass']);
	$sex=trim($_POST['sex']);
	$tel=trim($_POST['tel']);
	$qq=trim($_POST['qq']);
	$email=trim($_POST['email']);
	$addre=trim($_POST['addre']);
	$dates=date("Y-m-d H:i:s");
	$query="select * from tb_cuser where username='$username'";	
	$result=mysql_query($query);
	if(mysql_num_rows($result)>0){	
	 	 echo "<script>alert('该用户名已经存在');location.href='cregis.php';</script>";
	 }else{
		$pass=trim($pass);
	 	$query="insert into tb_cuser (username,pass,sex,tel,qq,email,addre,usertime)values('$username','$pass','$sex','$tel','$qq','$email','$addre','$dates')";
	 	if(mysql_query($query)){
	 		$_SESSION['username']=$username;	
	 		$_SESSION['pass']=$pass; 
	  		echo "<script>alert('注册成功!');window.location.href='clog.php';</script>"; 		
	}else{
  		echo "<script language='javascript'>alert('注册失败!');history.back();</script>"; 
	}
	}
}
?>
