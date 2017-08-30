<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>注册</title>
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
	font-size: 15px;
				}
#zhu{
	    		margin-top: 50px;
	    		text-align: center;
			    width: 800px;
			    position: relative;
			    font-size:20px;
			    background-color: #f6f2ef;
			}
.style1 {
	text-decoration: none;
	font-size: 30px;
	color: #827b72;	
	 width:600px;
	font-weight: bold;
	 text-shadow: 2px 2px 10px #ab9d92;
}
.demo {
   -moz-border-image: url("images/c1.png") 168 round;
   -webkit-border-image: url("images/c1.png") 168 round;
   -o-border-image: url("images/c1.png") 168 round;
    border-image: url("images/c1.png") 168 round;
   display: inline-block;
   border-width: 22px;/*修改成36px，再运行一下*/
}
#footer{
	 text-align:center;
	font-size: 10px;
	color: #b2a191;
	margin-bottom:0px;
	margin: 20px;
	font-family: "微软雅黑";
	}
-->
</style>
</head>

<body> 
<script language="JavaScript" type="text/javascript">
function check_input(form){		    
	if(form.username.value==""){
		alert("请输入用户名");
		form.username.select();
		return(false);
	}
	if(form.pass.value==""){
		alert("请输入密码");
		form.pass.focus();
		return(false);
	}
    if(form.tel.value==""){			
		alert("请输入联系方式!");
		form.tel.select();
		return(false);
	}
	if(form.qq.value==""){			
		alert("请输入QQ!");
		form.qq.select();
		return(false);
	}
	if(form.email.value==""){
	    alert("请输入Email!");
	    form.email.select();
	    return(false);
	}
	if(form.addre.value==""){			
		alert("请输入地址!");
		form.addre.select();
		return(false);
	}
	
	
	return(true);
}
</script>
<div id="zhu" class="demo">
  <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <form action="cregis_ok.php" method="post" name="form" id="form" onSubmit="return check_input(form)" >
		 <tr><td height="60" colspan="3" align="center"><span class="style1">用户注册</span></td>
      </tr>
		 <tr>
		    <td width="50" rowspan="2" align="right" height="50" valign="bottom">用户名:&nbsp;&nbsp;</td>
		    <td height="16"></td>
	      </tr>
		  <tr>
            <td height="16"><input name="username" type="text" id="username" size="40" maxlength="20" value="" placeholder="用户名不能重复">
            </td>
         </tr>
          <tr>
            <td align="right" height="50">密&nbsp;&nbsp;码:&nbsp;&nbsp;</td>
            <td><input name="pass" type="password" id="pass" size="40" maxlength="30" placeholder="密码不能为空">
              </td>
          </tr>
          <tr>
            <td  align="right" height="50">性&nbsp;&nbsp;别:&nbsp;&nbsp;</td>
            <td height="50"><input name="sex" type="radio" value="男" checked>男
                <input type="radio" name="sex" value="女">女</td>
          </tr>
          <tr>
            <td align="right" height="50">电&nbsp;&nbsp;话:&nbsp;&nbsp;</td>
            <td><input name="tel" type="text" id="tel" size="40" maxlength="20" placeholder="电话不能为空">
              </td>
          </tr>
          <tr>
            <td  align="right" height="50">Q&nbsp;&nbsp;&nbsp;Q:&nbsp;&nbsp;</td>
            <td><input name="qq" type="text" id="qq" size="40" maxlength="20" placeholder="QQ不能为空"> </td>
          </tr>
          <tr>
            <td  align="right" height="50">Email:&nbsp;&nbsp;</td>
            <td><input name="email" type="text" id="email" size="40" maxlength="50" placeholder="请填写正确的邮箱">              
            *</td>
          </tr>
          <tr>
            <td  align="right" height="50">地&nbsp;&nbsp;址:&nbsp;&nbsp;</td>
            <td><input name="addre" type="text" id="addre" size="40" maxlength="100" placeholder="地址不能为空">
            </td>
          </tr>
          <tr>
            <td height="50" align="center">&nbsp;</td>
            <td ><input name="submit" type="submit" id="submit" value="提交信息">
              <input type="reset" name="Submit2" value="重置信息">
              	<p><a href="clog.php">进入登录页面   </a></p>
              </td>
          </tr>
		  </form>
        </table>
        </div> 
<div id="footer">**重庆师范大学计算机与信息科学学院14级计科黄仁英制作  版权所有**
	</div>
</body>
</html>