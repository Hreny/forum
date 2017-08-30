<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php
session_start(); 					
include("conn/conn.php");			
$time=date("Y")."-".date("m")."-".date("d");
if(isset($_SESSION['username']) && isset($_SESSION['pass'])){	
if(isset($_POST['reply'])){
	    $username=$_SESSION['username'];
	    $tz_id=$_POST['tz_id']; 
	    $title=$_POST['title'];
		$date=date("y:m:d h:i:s");
		$hfnr=htmlspecialchars($_POST['hfnr']);	
		$quer="insert into tb_chfb(hfnr,hfsj,username,tz_id)values('$hfnr','$date','$username','$tz_id')";
		$result=mysql_query($quer);
		if($result){
			echo "<script>alert('回复成功!'); window.location.href='chft.php?title=".$title."&tz_id=".$tz_id."';</script>";		
		}else{
			echo "<script>alert('回复失败!'); history.back();</script>";
		}
	}
}
?>