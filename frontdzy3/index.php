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
.style3 {
	font-size: 20px;
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
	}			 
</style>
	</head>
	<body>
		 <img src="images/c018.jpg" border="0" >
			<div id="links">
		  	<ul>学习交流论坛</ul>
		      </div>
	 <div id="neck">
		       <tr>
    <td align="center" valign="middle"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/c01.jpg">
  
      <tr>
        <td height="30">&nbsp;&nbsp;&nbsp; 
<?php
    session_start();
    include("conn/conn.php");
    if(!isset($_SESSION['username']) && !isset($_SESSION['pass'])){ ?>
    	<a href="clog.php">登录&nbsp;|</a>&nbsp;<a href="cregis.php">注册</a>
        <td width="700"><div align="center"><marquee direction="left" scrollamount="1" scrolldelay="7">
          <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛,这里你可以发表自己的学习心得,互相学习 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
        </marquee></div>
        <?php 
}else{
?>
  欢迎<?php echo $_SESSION['username'];?>!!</a>
	<td width="700"><div align="center"><marquee direction="left" scrollamount="1" scrolldelay="7">
          <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛,这里你可以发表自己的学习心得,互相学习 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
        </marquee></div>
  </tr>
</table>
<?php
}
?>
        </td>
      </tr></div>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      	<tr align="center" height="30"><td class="box1" width="200"><a href="index.php">版块分类</a></td><td class="box1" width="200"><a href="crelease.php">发布帖子</a></td><td class="box1" width="200"><a href="cliuyb.php">留言建议</a></td><td class="box1" width="200"><a href="change.php">个人资料</a></td><td class="box1" width="200"><a href="clog.php">退出</a></td></tr>
      </table> 
  
 <table width="1000" height="80"  border="5" bordercolor="#d2c9ba" align="center" cellpadding="0" cellspacing="0" bgcolor="#e1d9d2">
  <?php 
     include("conn/conn.php");
	$query="select * from tb_czqlx ";
	$result=mysql_query($query);
	if($result){
	while ($myrow=mysql_fetch_array($result)){
	?>
  <tr >
    <td width="600" height="80" align="center" valign="middle"><table width="100%" height="60"  border="0" cellpadding="0" cellspacing="0">
      <tr >
        <td height="50" align="center" valign="middle" class="style1">&nbsp;<a href="cltz.php?bk_id=<?php echo $myrow['bk_id'];?>">学习交流[<?php echo $myrow['zq'];?>]版块</a></td>
      </tr> 
    </table></td>
    <td width="400" align="center" valign="middle"><table width="100%" height="80"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="30" valign="bottom"><span class="style3">&nbsp;创建时间:<?php echo $myrow['cjsj'];?></span></td>
      </tr>
	  <tr>
	    <td height="30" valign="middle"><span class="style3">&nbsp;帖子总数: 
	<?php 
	  $quer="select count(*)tzs from tb_czqtz where bk_id='".$myrow['bk_id']."' ";  //查询表需要更换
	  $resul=mysql_query($quer);
	  $tzs=mysql_result($resul,0,"tzs");
	  echo $tzs;
	  ?>
	  </span></td>
     </tr>
    </table></td>
  </tr>
  <?php
   }
	}?>
</table></div> 
<div id="footer">**重庆师范大学计算机与信息科学学院14级计科黄仁英制作  版权所有**
		</div>
	</body>
</html>