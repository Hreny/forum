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
	color: black;
}
.style2{
	font-size: 20px;
	
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
	<script language="javascript">
function checkForm(form){
	if(form.oldpwd.value==""){
		alert("请输入的原密码!");form.oldpwd.focus();return false;
	}
    if(form.oldpwd.value!=form.holdpwd.value){
		alert("您输入的原密码不正确，请重新输入!");form.oldpwd.value="";
		form.oldpwd.focus();return false;
	}
	if(form.pwd.value==""){
		alert("请输入的新密码!");form.pwd.focus();return false;
	}	
	if(form.pwd1.value==""){
		alert("请确认新密码!");form.pwd1.focus();return false;
	}	
	if(form.pwd.value!=form.pwd1.value){
		alert("您两次输入的新密码不一致，请重新输入!");
		form.pwd.value="";form.pwd1.value="";
		form.pwd.focus();return false;
	}
}
</script>
	<body>
     <img src="images/c018.jpg" border="0" >
			<div id="links">
		  	<ul>学习交流论坛</ul>
		      </div>
	 <div id="neck">
		       <tr>
    <td align="center" valign="middle"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/c01.jpg">
      <tr>
        <td height="30">&nbsp;&nbsp;&nbsp;==修改资料==
	<td width="850"><div align="center"><marquee direction="left" scrollamount="1" scrolldelay="7">
          <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛,这里你可以发表自己的学习心得,互相学习 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
        </marquee></div>
  </tr>
</table>
</td></tr></div>

      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
     	<tr align="center" height="30"><td class="box1" width="200"><a href="index.php">版块分类</a></td><td class="box1" width="200"><a href="crelease.php">发布帖子</a></td><td class="box1" width="200"><a href="cliuyb.php">留言建议</a></td><td class="box1" width="200"><a href="change.php">个人资料</a></td><td class="box1" width="200"><a href="clog.php">退出</a></td></tr>
      </table> 
      
      <table width="1000"  border="3" bordercolor="#d2c9ba"> 
	  <tr align="center" >
	  	<td >
	  	<table border="0">
	  			<form name="form1" method="post" action="change_mok.php"> 
	  	<?php 
		  $query="select * from tb_cuser  where username='".$_SESSION['username']."'";
		  $result=mysql_query($query);
		  $myrow=mysql_fetch_array($result);
		  ?>
     <tr>
        <td align="center" width="450" height="50" class="style2">用户名:&nbsp;&nbsp;
      <input  name="name" type="text" id="name" value="<?php echo $myrow['username'];?>" size="30"></td>
      </tr>
      <tr>
        <td align="center" width="450" height="50" class="style2">原密码:&nbsp;&nbsp;
       <input name="oldpwd" type="password" id="oldpwd" size="30" >
       	<input name="holdpwd" type="hidden" id="holdpwd" value="<?php echo $myrow['pass'];?>" size="30">
       </td>
      </tr>
      <tr >
      <td align="center" width="450" height="50" class="style2">新密码:&nbsp;&nbsp;
    <input  name="pwd" type="password" id="pwd" size="30"> 
    </td>
    </tr>
    <tr>
      <td align="center" width="450" height="50" class="style2">确认新密码:
     <input name="pwd1" type="password" id="pwd1" size="30"></td>
    </tr>
    <tr>
      <td align="center" ><input style="background-color: #fff; " name="Submit" type="submit" class="btn_grey" value="保存" onClick="return checkForm(form)">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span> <input style="background-color:#fff;" name="Submit2" type="reset" class="btn_grey" value="取消"></span>
       </td>
    </tr> 
    </td>
     </form>
   </table>
   </td>
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