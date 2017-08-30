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
		       <tr>
    <td align="center" valign="middle">
    	<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/c01.jpg">
      <tr>
      	<td height="30">&nbsp;&nbsp;&nbsp;==添加版块==</td>
	<td width="850" height="30">
		<div align="center">
		   <marquee direction="left" scrollamount="1" scrolldelay="7">
              <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛后台 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
       </marquee></div></td>
  </tr>
</table>
</td></tr></div>
     <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      	<tr align="center" height="30"><td class="box1" width="200"><a href="adindex.php">版块管理</a></td><td class="box1" width="200"><a href="adtz.php">帖子管理</a></td><td class="box1" width="200"><a href="aduser.php">用户管理</a></td><td class="box1" width="200"><a href="adlyb.php">留言查看</a></td><td class="box1" width="200"><a href="cadmin.php">退出</a></td></tr>
      </table> 
      
       <table width="1000"  border="3" bordercolor="#d2c9ba"> 
       	<form action="adindex_tjok.php" method="post" name="form">
       		<tr align="center" >
       			<td>
       				<table border="0">
       	<?php 
 session_start();
include("conn/conn.php");
$user=$_SESSION['user']
 ?>
	 <tr>
        <td align="center" width="450" height="50" class="style2"><p>添加的版块名:&nbsp;&nbsp;</p>
      <input  name="zq" type="text" id="zq" size="30"></td>
      <input  name="user" type="hidden" id="user" size="30" value="<?php echo $user; ?>"></td>
      </tr>
      <tr>
      	<td align="center" height="50">
      <input type="submit" name="Submit" id="Submit" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" name="button" id="button" value="重置">
          </td>
      </tr>
      </table>
      </td>
       		</tr>
      </form>
    </table>
</div>
<div id="footer">**重庆师范大学计算机与信息科学学院14级计科黄仁英制作  版权所有**
		</div>
</body>
</html>