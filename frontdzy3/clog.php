<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>用户登录</title>
<style type="text/css">
<!--
body,td,tr {
	font-size: 20px;
	width:800px;
	margin:0 auto;
	font-style:inherit;
}
a {
	text-decoration: none;
	font-size: 30px;	
	 width:600px;
	font-weight: bold;
	 text-shadow: 2px 2px 10px #ab9d92; }
a:visited {
	text-decoration: none;
	color: #827b72;
}
a:hover {
	text-decoration: none;
	font-size: 35px;
	color: #827b72;
}
a:active {
	text-decoration: none;
	color: #827b72;
}
#zhu{
	    		margin-top: 150px;
			    position: relative;
			    font-size:20px;
			    background-color: #f6f2ef;
			}
.demo {
   -moz-border-image: url("images/c1.png") 168 round;
   -webkit-border-image: url("images/c1.png") 168 round;
   -o-border-image: url("images/c1.png") 168 round;
    border-image: url("images/c1.png") 168 round;
   display: inline-block;
   border-width: 22px;/*修改成36px，再运行一下*/
}
-->
</style></head>

<body>
<script language="JavaScript" type="text/javascript">
function check_user(form){
	if(form.username.value==""){
    	alert("请输入用户名");
		form.username(false);
	}
	if(form.pass.value==""){
    	alert("请输入密码");
		form.pass.select();
		return(false);
    }
   	return(true);	 
 }
</script>
<div id="zhu" class="demo">
  <table width="800" border="0" cellpadding="0" cellspacing="0">
	  <form action="clog_ok.php" method="post" name="form1" id="form1" onSubmit="return check_user(this)">
      	<tr><td height="60" colspan="3" align="center"><a href="clog.php">用户登录&nbsp;&nbsp;|&nbsp;&nbsp;</a><a href="cadmin.php">管理员登录</a></td>
      </tr>
      <tr>
        <td align="center" width="450" height="50">用户名:&nbsp;&nbsp;
      <input type="text" name="username" size="30" id="username" placeholder="用户名不能为空"/></td>
      </tr>
      <tr>
        <td align="center" width="450" height="50">密&nbsp;码:&nbsp;&nbsp;
       <input type="password" name="pass" size="30" id="pass" placeholder="密码不能为空"/></td>

      </tr>
      <tr>
        <td colspan="2" align="center" width="800" height="50">今天的日期:&nbsp;&nbsp;<?php echo date("Y-m-d");?></td>
       </tr>
       <tr>
        <td  height="40" colspan="5">
        	<div align="center"><input type="submit" name="Submit" value="登录">&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="button" name="button" id="button" value="注册" onClick="javascript:window.location.href='cregis.php';">  </div>
         </td>
      </tr>
	  </form>
    </table>
   </div>
</body>
</html>
