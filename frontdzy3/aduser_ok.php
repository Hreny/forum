<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php
       session_start(); 					
       include("conn/conn.php");													
		$username=$_GET["username"];											
	    $query="delete from tb_cuser where username='$username'";
		$result=mysql_query($query);  
		if($result){
			echo "<script>alert('删除成功!'); window.location.href='aduser.php';</script>";		
		}
		else{
			echo "<script>alert('删除失败!');window.location.href='aduser.php';</script>";
			} 
  
?>