<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php
/*
 * Created on 2016年3月27日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<link href="../css/record.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function ApplyStyle(s){
		document.getElementById("mytab").className=s.innerText;
	}
</script>

<div class="title">
	<h1>个人信息</h1>
</div>
<form action="" method="post">

<table width="90%" id="mytab"  border="1" class="t1">
  <thead align="center">
    <th width="10%" align="center">用户名</th>
    <th width="10%" align="center">密码</th>
    <th width="10%" align="center">卡号</th>
    <th width="10%" align="center">邮箱</th>
    <th width="10%" align="center">手机号码</th>
    <th width="20%" align="center">注册时间</th>
    <th width="10%" align="center">余额</th>
     <th width="10%" align="center">状态</th>
    <th width="10%" align="center">操作</th>
  </thead>
<?php
error_reporting(0);

 session_start();
$user=$_SESSION["user"];
include("../conn.php");
 
 $sql="select * from tb_user where uname='$user'";
 
 $result=mysql_query($sql);//执行查询
 //while($row=mysql_fetch_array($result))
 //while($row=mysql_fetch_assoc($result))
while($row=mysql_fetch_object($result))//将result结果集中查询结果取出一条
{
 echo"<tr><td>".$row->uname."</td>" .
 		"<td>".$row->upwd."</td>" .
 		"<td>".$row->ucredit."</td>" .
 		"<td>".$row->uemail."</td>" .
 		"<td>".$row->utel."</td>" .
 		"<td>".$row->udata."</td>" .
 		"<td>".$row->amount."</td>" .
 		"<td>".$row->ustate."</td>" .
 		"<td><a href='modify_pwd.php?uname=$row->uname'>修改</a></td>" .
 	"</tr>";
}
 	
?>
	</table>
</form>