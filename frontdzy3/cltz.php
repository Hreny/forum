 <meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
include("conn/conn.php");
$page=(isset($_GET['page']))?$_GET['page']:"1"; 
$bk_id=(isset($_GET['bk_id']))?$_GET['bk_id']:"PHP"; 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>论坛</title>
<style>
body, html{
	background-color: #e5dfd6;
	position: relative;
	margin: 0 auto;
	padding: 0px;
	width: 1000px;
			}
a{
	font-size: 20px;
}
a:link {
	color: #827b72;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	font-size: 25px;
	color: #827b72;
}
a:hover {
	text-decoration: none;
	font-size: 25px;
	color: #827b72;
}
a:active {
	text-decoration: none;
	font-size: 25px;
	color: #827b72;
}
.style1 {
	font-size: 18px;
	font-family: arial;
	font-weight: normal;
}
#link{
	width: 1000px;
	}
#links ul{
	list-style-type: none;
	font-style:oblique;
	margin-top: -180px;
	color: white;
	 margin-left: 40px;
	font-weight: bold;
	font-size: 55px;
	text-shadow: 4px 4px 20px #ab9d92; 
	}
#neck{
	margin-top: 110px;
	border-radius: 35px;
}
 .box1{
 	-webkit-box-shadow: 15px 15px 15px #ccc5bf inset;
	-moz-box-shadow:15px 15px 15px #ccc5bf inset;
	box-shadow: 15px 15px 15px #ccc5bf inset;
	} 
#footer{
	 text-align:center;
	font-size: 10px;
	color: #b2a191;
	margin-bottom:0px;
	margin: 20px;
	font-family: "微软雅黑";
	}			}  
</style>
	</head>
	<body>
		 <img src="images/c018.jpg" border="0" >
			<div id="links">
		  	<ul>学习交流论坛</ul>
		      </div>
	 <div id="neck">
	 	<?php
	 		$query="select * from tb_czqlx where bk_id=$bk_id";
	$result=mysql_query($query);
	$myrow=mysql_fetch_array($result);
	 		?>
		       <tr>
    <td align="center" valign="middle"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/c01.jpg">
      <tr>
        <td height="30">&nbsp;&nbsp;&nbsp; ==<?php echo $myrow['zq'];?>专区==</td>
	<td width="700"><div align="center"><marquee direction="left" scrollamount="1" scrolldelay="7">
          <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛,这里你可以发表自己的学习心得,互相学习 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
        </marquee></div>
  </tr>
</table>
</td></tr></div>

      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      		<tr align="center" height="30"><td class="box1" width="200"><a href="index.php">版块分类</a></td><td class="box1" width="200"><a href="crelease.php">发布帖子</a></td><td class="box1" width="200"><a href="cliuyb.php">留言建议</a></td><td class="box1" width="200"><a href="change.php">个人资料</a></td><td class="box1" width="200"><a href="clog.php">退出</a></td></tr>
      </table> 	
      
<?php 
$page_size=1;	
$query="select * from tb_czqtz where bk_id='".$bk_id."'";	
$result=mysql_query($query);
$message_count=mysql_num_rows($result);	
if($message_count>0){
?>
<table width="1000" height="30"   border="5" bordercolor="#d2c9ba" align="center" cellpadding="1" cellspacing="1">
  <tr align="center">
    <td width="200" class="style1">帖&nbsp;子&nbsp;主&nbsp; 题</td>
    <td width="500" class="style1">帖&nbsp;子&nbsp;内&nbsp;容</td>
    <td width="150" class="style1">作者</td>
    <td width="150" class="style1">发表时间 </td>
  </tr>
<?php  
$query1="select * from tb_czqtz where bk_id='".$bk_id."' ";
$result1=mysql_query($query1);
while($myrow1=mysql_fetch_array($result1)){
?>
  <tr height="60">
    <td width="200" align="center" class="style1"><a href="chft.php?title=<?php echo urlencode($myrow1['title']);?>&tz_id=<?php echo $myrow1['tz_id'];?>"><?php echo $myrow1['title'];?></a></td>
    <td width="500" align="center" class="style1"><?php echo $myrow1['content'];?></td>
    <td width="150" align="center" class="style1"><?php echo $myrow1['username'];?></td>
    <td width="150" align="center" class="style1"><?php echo $myrow1['fbsj'];?></td>
  </tr>
  
<?php  }  ?>
</table>

	 
<?php 
}else{  	
?>
<div align="center" size="20">暂无帖子信息！！！！</div>
<?php
}
?>
<div id="footer">**重庆师范大学计算机与信息科学学院14级计科黄仁英制作  版权所有**
		</div>
	</body>
</html>

