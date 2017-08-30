 <meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php
session_start(); 					
include("conn/conn.php");			
$time=date("Y")."-".date("m")."-".date("d");
if(isset($_SESSION['username']) && isset($_SESSION['pass'])){		
	if(isset($_POST['title'])){								
		$title=htmlspecialchars($_POST['title']);	
		$content=htmlspecialchars($_POST['content']);
		$zq=$_POST['zq'];	
		$quer="select * from tb_czqlx where zq='$zq'";
		$res=mysql_query($quer);
		$row=mysql_fetch_array($res);
		$bk_id=$row['bk_id'];		
		$username=$_SESSION['username'];						
	    $query="insert into tb_czqtz(bk_id,title,content,username,fbsj)values('$bk_id','$title','$content','$username','$time')";
		$result=mysql_query($query);  
		if($result){
			echo "<script>alert('发布成功!'); window.location.href='cltz.php?bk_id=".$bk_id."';</script>";
				
		}else{ 
			echo "<script>alert('发布失败!'); history.back();</script>";
		}    
	}
}
?>