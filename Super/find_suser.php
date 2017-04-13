<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<link href="../css/finduser.css" rel="stylesheet" type="text/css">
<link href="../css/free.css" rel="stylesheet" type="text/css">
<form action="" method="post">
<div align="center">
<!--
<select name="select1" size="2" class="ziti1">
	<option value="正常">正常用户</option>
	<option value="冻结">冻结用户</option>
	<input type="submit" name="submit7" value="确定" class="btn1"/>
</select>-->
<input type="radio" name="select1" value="正常" checked class="ziti1"/><label class="ziti1">正常用户</label>
<input type="radio" name="select1" value="冻结" class="ziti1"/><label class="ziti1">冻结用户</label>
<input type="submit" name="submit7" value="确定" class="btn1"/>
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
include ("../conn.php");

$perNumber = 10; //每页显示的记录数
$page = $_GET['page']; //获得当前的页面值
$count = mysql_query("select count(*) from tb_user"); //获得记录总数
$rs = mysql_fetch_array($count);
$totalNumber = $rs[0];
$totalPage = ceil($totalNumber / $perNumber); //计算出总页数
if (!isset ($page)) {
	$page = 1;
} //如果没有值,则赋值1
$startCount = ($page-1) * $perNumber;

$select1 = $_POST["select1"];
$sql = "select * from tb_user where ustate='$select1' limit $startCount,$perNumber";

$result = mysql_query($sql); //执行查询
//while($row=mysql_fetch_array($result))
//while($row=mysql_fetch_assoc($result))

while ($row = mysql_fetch_object($result)) //将result结果集中查询结果取出一条
	{
	echo "<tr><td>" . $row->uname . "</td>" .
	"<td>" . $row->upwd . "</td>" .
	"<td>" . $row->ucredit . "</td>" .
	"<td>" . $row->uemail . "</td>" .
	"<td>" . $row->utel . "</td>" .
	"<td>" . $row->udata . "</td>" .
	"<td>" . $row->amount . "</td>" .
	"<td>" . $row->ustate . "</td>" .
	"</tr>";
}
/*}else{
	echo "<script>alert('没有此用户');</script>";
}*/
echo "</table>";
echo "<div style='margin-left:75%;font-size:22px;'><br>";
if ($page != 1) { //页数不等于1
?>
<a href="find_suser.php?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
<?php
}
for ($i = 1; $i <= $totalPage; $i++) { //循环显示出页面
?>
<a href="find_suser.php?page=<?php echo $i;?>"><?php echo "&nbsp;$i&nbsp;" ;?></a>
<?php
}
if ($page < $totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="find_suser.php?page=<?php echo $page + 1;?>">下一页</a>
<?php

}
 	
?>
</div>