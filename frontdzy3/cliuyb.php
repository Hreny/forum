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
.right{
	font-size: 20px;
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
<script language="javascript">
         function check(form){
	 if(form.message.value==""){
	     alert("留言内容不能为空!");
        form.message.focus();
       return false;
	}
//form.submit();
}
</script>
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
        <td height="30">&nbsp;&nbsp;&nbsp; ==留言建议==
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
          	<tr width>
          		<td>
     <table width="400" border="3" bordercolor="#d2c9ba" align="left" cellpadding="0" cellspacing="0" >	
     <form method="post" name="form" id="form" action="cliuyb_ok.php">
        <tr>	
     	<td width="400" align="center" height="300"><p>留言建议：</p>
           <textarea rows="10" cols="50" id="message" name="message"></textarea>
           <p>
			<input type="submit" value="提交" id="submit" name="submit"  onClick="return check(form)";>
            <input type="reset"  value="重置" name="Submit2"/>  
            </p> </td>
     	</tr>
     	</form>
     </table></td>	
     	<td>
     	<?php 
        $username=$_SESSION["username"];
        $sql=mysql_query("SELECT * FROM tb_clyb where username='$username' ORDER BY time DESC limit 1");
        $row=mysql_fetch_object($sql);
       ?>
       <table width="580" align="center" >   
       	<tr align="center" valign="middle">
       		<td align="center" class="right" >
       	<?php
       if(!$row){
		 echo"暂时未发表建议！";
		  }
		  else{ 
			  do{
				  ?>			
               留言人：<?php echo $row->username; ?> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;发表时间：<?php echo $row->time; ?></td></tr>
              <tr>  <td align="center" class="right"><br>内容：<?php  echo $row->message;?></td></tr></table>
				<?php
                }while($row=mysql_fetch_object($sql));
			  }
?>	</table></td>
</tr></table> 
 <div id="footer">**重庆师范大学计算机与信息科学学院14级计科黄仁英制作  版权所有**
		</div>
	</body>
</html>
<?php }
 else{
	echo "<script>alert('请先登录');window.location.href='clog.php';</script>";
}?>