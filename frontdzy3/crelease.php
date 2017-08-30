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
		<title>发布帖子</title>
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
    <td align="center" valign="middle"><table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0" background="images/c01.jpg">
      <tr>
        <td height="30">&nbsp;&nbsp;&nbsp; ==发布帖子==</td>
	<td width="850"><div align="center"><marquee direction="left" scrollamount="1" scrolldelay="7">
          <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛,这里你可以发表自己的学习心得,互相学习 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
        </marquee></div>
  </tr>
</table>
</td></tr></div>

      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      	<tr align="center" height="30"><td class="box1" width="200"><a href="index.php">版块分类</a></td><td class="box1" width="200"><a href="crelease.php">发布帖子</a></td><td class="box1" width="200"><a href="cliuyb.php">留言建议</a></td><td class="box1" width="200"><a href="change.php">个人资料</a></td><td class="box1" width="200"><a href="clog.php">退出</a></td></tr>
      </table> 
      
      
 <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1000"><table width="1000" height="430"  border="5" bordercolor="#d2c9ba" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="5" align="center" valign="top"></td>
        <td width="300" align="center" valign="center">
        	<table width="88%"  border="0" cellpadding="0" cellspacing="0">
          <tr>
		  <?php 
		  $query="select * from tb_cuser  where username='".$_SESSION['username']."'";
		  $result=mysql_query($query);
		  $myrow=mysql_fetch_array($result);
		  ?>
            <td align="center"><p>==发帖人信息==</p>
              <p>用户名：<?php echo $myrow['username'];?></p>             
              <p>联系方式：<?php echo $myrow['tel'];?></p>
              <p>QQ：<?php echo $myrow['qq'];?></p>
              <p>邮件：<?php echo $myrow['email'];?></p>
           </td>
          </tr>
        </table></td>
        <td width="10" align="center" valign="top"></td>
        <td width="700" align="center" valign="center">
		  <table width="88%"  border="0" cellpadding="0" cellspacing="0">
		<form name="myform" method="post" action="crelease_ok.php" enctype="multipart/form-data"  onSubmit="javascript:return crelease_check();">
          <tr>
            <td width="18%" height="30" align="center" class="style1">类型:</td>
            <td>  
			<select name="zq" size="1" id="zq"> 
			<?php 
			$query="select * from tb_czqlx order by bk_id desc";
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result)){
			?>
              <option value="<?php echo $row['zq'];?>"><?php echo $row['zq'];?></option>
			<?php }?> </select>	              </td>
         </tr>
          <tr>
            <td height="40" align="center" class="style1">主题:</td>
            <td><input name="title" type="text" id="title" size="20" maxlength="80"></td>
          </tr>
          <tr>
            <td height="200" align="center" class="style1">内容:</td>
            <td align="left" valign="top">              <span class="huise09-20">
              <input name="user" type="hidden" id="user" value="<?php echo $_SESSION['username'];?>">
              <input name="pass" type="hidden" id="pass" value="<?php echo $_SESSION['pass'];?>">		
              <textarea name="content" cols="50" rows="15" wrap="PHYSICAL" id="content"></textarea>
</span></td>
          </tr>
          
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td><input name="submit" type="submit" id="submit" value="提交">
              <input type="reset" name="Submit" value="重置">             </td>
          </tr>
          <tr>
            <td height="30" align="center">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		   </form>
        </table>		</td>
        <td width="9" align="center" valign="top" >&nbsp;</td>
      </tr>
    </table></td>
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