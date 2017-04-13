<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<link href="../css/finduser.css" rel="stylesheet" type="text/css">
<link href="../css/free.css" rel="stylesheet" type="text/css">
<form action="" method="post">
<div align="center">
	<label class="ziti1"><i>请输入用户名：</i></label><input type="text" name="txt1" class="txt"/>
<input type="submit" name="submit6" value="搜索" class="btn"/>
</div>
</form>


<table border=1 cellspacing="0" cellpadding="0" width="100%" class="t1">
<thead align="center">
    <th width="10%" align="center">用户名</th>
    <th width="10%" align="center">密码</th>
    <th width="10%" align="center">卡号</th>
    <th width="10%" align="center">邮箱</th>
    <th width="10%" align="center">手机号码</th>
    <th width="20%" align="center">注册时间</th>
    <th width="10%" align="center">余额</th>
    <th width="10%" align="center">状态</th>
  </thead>
<?php
error_reporting(0);

 //session_start();
//$user=$_SESSION["user"];
include("../conn.php");
 $txt1=$_POST["txt1"];
 $sql="select * from tb_user where uname='$txt1'";
 
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
 	"</tr>";
}
?>
	</table>