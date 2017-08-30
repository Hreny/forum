<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php
       session_start(); 					
       include("conn/conn.php");													
		$id=$_GET["tz_id"];											
	    $query="delete from tb_czqtz where tz_id='$id'";
		$result=mysql_query($query);  
		if($result){
			echo "<script>alert('删除成功!'); window.location.href='adtz.php';</script>";		
		}
		else{
			echo "<script>alert('删除失败!');window.location.href='adtz.php';</script>";
			} 
  
?>