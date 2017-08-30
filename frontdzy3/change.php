 <meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
 session_start();
include("conn/conn.php");
if(isset($_SESSION['username'])){
	
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
	font-size: 22px;
	color: #827b72;
}
a:hover {
	text-decoration: none;
	font-size: 22px;
	color: #827b72;
}
a:active {
	text-decoration: none;
	font-size: 22px;
	color: #827b72;
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
.style1{
	font-size: 20px;
	color:black;
	font-family: arial;
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
		       <tr>
    <td align="center" valign="middle"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/c01.jpg">
      <tr>
        <td height="30">&nbsp;&nbsp;&nbsp; ==个人资料==
	<td width="850"><div align="center"><marquee direction="left" scrollamount="1" scrolldelay="7">
          <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛,这里你可以发表自己的学习心得,互相学习 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
        </marquee></div>
  </tr>
</table>
</td></tr></div>

      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
     	<tr align="center" height="30"><td class="box1" width="200"><a href="index.php">版块分类</a></td><td class="box1" width="200"><a href="crelease.php">发布帖子</a></td><td class="box1" width="200"><a href="cliuyb.php">留言建议</a></td><td class="box1" width="200"><a href="change.php">个人资料</a></td><td class="box1" width="200"><a href="clog.php">退出</a></td></tr>
      </table> 
      
          <table width="1000" border="3" bordercolor="#d2c9ba"> 	
          <tr>
		  <?php 
		  $query="select * from tb_cuser  where username='".$_SESSION['username']."'";
		  $result=mysql_query($query);
		  $myrow=mysql_fetch_array($result);
		  ?>
            <td align="center" class="style1" height="350"><p>==个人信息==</p>
              <p>用户名：<?php echo $myrow['username'];?></p>  
              <p>性别：<?php echo $myrow['sex'];?></p>           
              <p>联系方式：<?php echo $myrow['tel'];?></p>
              <p>QQ：<?php echo $myrow['qq'];?></p>
              <p>邮件：<?php echo $myrow['email'];?></p>
              <p>地址：<?php echo $myrow['addre'];?></p>
           <p><a href="change_m.php">修改密码</a></p></td>
          </tr>
          </table>
 <div id="footer">**重庆师范大学计算机与信息科学学院14级计科黄仁英制作  版权所有**
		</div>
	</body>
</html>
<?php }
 else{
	echo "<script>alert('请先登录');window.location.href='clog.php';</script>";
}?>