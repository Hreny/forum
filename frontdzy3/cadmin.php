<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理员登录</title>
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
	font-size: 35px;
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
	if(form.user.value==""){
    	alert("请输入账号");
		form.tb_voter_name.select();
		return(false);
	}
	if(form.code.value==""){
    	alert("请输入密码");
		form.tb_voter_pass.select();
		return(false);
    }
   	return(true);	 
 }
</script>
<div id="zhu" class="demo">
  <table width="800" border="0" cellpadding="0" cellspacing="0">
	  <form action="cadmin_ok.php" method="post" name="form" id="form" onSubmit="return check_user(this)">
      	<tr ><td height="60" colspan="3" align="center"><a href="clog.php">用户登录&nbsp;&nbsp;|&nbsp;&nbsp;</a><a href="cadmin.php">管理员登录</a></td>
      </tr>
      <tr>
        <td align="center" width="450" height="50">账号:&nbsp;&nbsp;
       <input type="text" name="user" size="30" id="user"  placeholder="管理员帐号不能为空"/></td>
      </tr>
      <tr>
        <td align="center" width="450" height="50">密&nbsp;码:&nbsp;&nbsp;
       <input type="password" name="code" size="30" id="code"  placeholder="密码不能为空"/></td>
      </tr>
      <tr>
        <td colspan="2" align="center" width="800" height="50">今天的日期:&nbsp;&nbsp;<?php echo date("Y-m-d");?></td>
       </tr>
       <tr>
        <td colspan="2" align="center" width="800" height="50">管理员账号:forum  密码:111</td>
       </tr>
       <tr>
        <td  height="40" colspan="5">
        	<div align="center" ><input type="submit" name="Submit" value="登录">&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" name="button" id="button" value="重置">
          	</div>
         </td>
      </tr>
	  </form>
    </table>
   </div>
</body>
</html>
