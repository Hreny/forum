 <meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php 
session_start();
include("conn/conn.php");
$page=(isset($_GET['page']))?$_GET['page']:"1"; 
$title=(isset($_GET['title']))?$_GET['title']:"PHP"; 
$tz_id=(isset($_GET['tz_id']))?$_GET['tz_id']:"PHP";
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
.style2 {
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
        <td height="30">&nbsp;&nbsp;&nbsp; 
	<td width="1000"><div align="center"><marquee direction="left" scrollamount="1" scrolldelay="7">
          <img src="images/run.gif"  width="19" height="18"><span class="style1">欢迎进入学习交流论坛,这里你可以发表自己的学习心得,互相学习 &nbsp;&nbsp;<?php echo date("Y-m-d");?></span>
        </marquee></div>
  </tr>
</table>
</td></tr></div>

      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      		<tr align="center" height="30"><td class="box1" width="200"><a href="index.php">版块分类</a></td><td class="box1" width="200"><a href="crelease.php">发布帖子</a></td><td class="box1" width="200"><a href="cliuyb.php">留言建议</a></td><td class="box1" width="200"><a href="change.php">个人资料</a></td><td class="box1" width="200"><a href="clog.php">退出</a></td></tr>
      </table> 
      
      <table width="1000" height="100"  border="3" bordercolor="#d2c9ba" align="center" cellpadding="0" cellspacing="0" >
  <tr>
      <td width="1000" height="30"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;帖子主题：==<?php echo $title;?>==</span></td>
  </tr>
  <tr>
      <td height="100" colspan="3" align="center" valign="top">
	     <table width="100%" height="100"   border="3" bordercolor="#d2c9ba" cellpadding="0" cellspacing="0">
<?php 
$query="select * from tb_czqtz where tz_id='".$_GET['tz_id']."'";
$result=mysql_query($query);
$ztrow=mysql_fetch_array($result); 
?>
            <tr>
<?php
$query="select * from tb_cuser where username='".$ztrow['username']."'";
$result=mysql_query($query);
$row=mysql_fetch_array($result);  
?>
               <td width="300" height="100" align="center" valign="top">
                  <table width="300" height="100" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                       <td height="20" align="center" valign="middle" class="style1">发表者：<?Php echo $ztrow['username'];?></td>
                    </tr>
                     <tr>
                       <td height="20" align="center" valign="middle" class="style1">发表时间：<?php echo $ztrow['fbsj'];?></td>
                    </tr>
                    </table>
			   </td>
               <td width="10">&nbsp;</td>
               <td width="600" align="center"  valign="top">
               	<table width="100%"  align="center" cellpadding="0" cellspacing="0">
           	<tr>
           		<td width="600" class="style2" align="center">内容</td>
           		</tr>
           		<tr>
           		<td width="600" class="style2" align="center">&nbsp;</td>
           		</tr>
           	<tr>
               <td width="600" class="style2" align="center"> <?php echo $ztrow['content'];?> </td>
            </tr></table>
      </tr>
            	<table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
               <td width="100" class="style1" align="right" height="35"><a href="reply.php?title=<?php echo urlencode($title);?>&tz_id=<?php echo $_GET['tz_id'];?>">回复&nbsp;&nbsp;&nbsp;&nbsp;</a></td>
            </tr>
         </table>
    </table></td>
 </tr>
</table>
<?php 
$page_size=2;
$query="select * from tb_chfb where tz_id='".$_GET['tz_id']."'";
$result=mysql_query($query);
$message_count=mysql_num_rows($result);
if($message_count>0){
?>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<?php	
$page_count=ceil($message_count/$page_size);
$offset=($page-1)*$page_size;
$quer="select * from tb_chfb where tz_id='".$_GET['tz_id']."' order by hf_id desc limit $offset ,$page_size";
$resul=mysql_query($quer);
while($myrow=mysql_fetch_array($resul)){
?>
  <tr>
    <td height="100" align="left" valign="top"><table width="1000" height="100" border="3" bordercolor="#d2c9ba" cellpadding="0" cellspacing="0">
       <?php $query="select * from tb_cuser where username='".$myrow['username']."'";
			          $result=mysql_query($query);
					  $xq=mysql_fetch_array($result);
			   ?>
	  <tr>
        <td width="300" align="center" valign="top"><table width="300" height="88" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="24" align="center" valign="middle" class="style1">回复人：<?php echo $myrow['username'];?></td>
          </tr>
          <tr>
            <td height="24" align="center" valign="middle" class="style1">回复时间：<?php echo $myrow['hfsj'];?></td>
          </tr>
        </table></td>
        <td width="10">&nbsp;</td>
        <td align="left" valign="middle"><table width="680"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="680" height="24" class="style1" align="center">回复内容</td>
          </tr>
          <tr>
            <td height="3" colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" class="style2" align="center">&nbsp;&nbsp;<?php echo $myrow['hfnr'];?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
    <?php 
  }
  ?>
</table>


<table width="1000" height="40"  border="1" bordercolor="#d2c9ba" align="center" cellpadding="0" cellspacing="0" >
  <tr height="20">
    <td width="500"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td class="style3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr class="style3">
                <td width="50%" class="#ff0000" align="center">页次：<font class="#ff0000"><?php echo $page;?></font> / <font class="#ff0000"><?php echo $page_count;?> 页&nbsp;&nbsp;&nbsp;&nbsp;</font><font class="#ff0000">记录：<?php echo $message_count;?> </font>条&nbsp; </td>
                <td width="50%" class="#ff0000" align="center"> 分页：<a href='chft.php?title=<?php echo $title; ?>&tz_id=<?php echo $_GET['tz_id'];?>&page=1'>首页</a>
<?php
		if($page >= 2){
?>
			<a href="chft.php?title=<?php echo $title; ?>&tz_id=<?php echo $_GET['tz_id'];?>&page=<?php echo $page-1;?>">上一页</a>
<?php
		
		}
		if($page < $page_count){
?>
			<a href="chft.php?title=<?php echo $title; ?>&tz_id=<?php echo $_GET['tz_id'];?>&page=<?php echo $page+1;?>">下一页</a>
<?php
		}
		if($page >= $page_count){		
?>
			<a href="chft.php?title=<?php echo $title; ?>&tz_id=<?php echo $_GET['tz_id'];?>&page=<?php echo $page_count;?>">尾页</a>
            <?php 
		}
			?>                </td>
              </tr>
          </table></td>
        </tr>
   </table></td>
  </tr>
</table>
<?php 
}else{
	?>
    <table width="1000" height="40" border="3" bordercolor="#d2c9ba"" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" colspan="3" align="center">暂无回复!!!</td>
  </tr>
</table>
<?php
}
?>
<div id="footer">**重庆师范大学计算机与信息科学学院14级计科黄仁英制作  版权所有**
		</div>
</body>
</html>
