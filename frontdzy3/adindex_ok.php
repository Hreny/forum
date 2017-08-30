<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php
       session_start(); 					
       include("conn/conn.php");
       $bk_id=$_GET["bk_id"];																								
	    $query="delete from tb_czqlx a join tb_czqtz b on a.bk_id=b.bk_id join tb_chfb c on b.tz_id=c.tz_id where bk_id='$bk_id'";
		$result=mysql_query($query);  
		if($result){
			echo "<script>alert('删除成功!'); window.location.href='adindex.php';</script>";		
		}
		else{
			echo "<script>alert('删除失败!');window.location.href='adindex.php';</script>";
			} 
  
?>