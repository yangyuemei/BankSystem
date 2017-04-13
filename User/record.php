<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<link href="../css/record.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	function ApplyStyle(s){
		document.getElementById("mytab").className=s.innerText;
	}
</script>

<div class="title">
	<h1>交易记录表</h1>
</div>
<table width="90%" id="mytab"  border="1" class="t1">
  <thead align="center">
    <th width="20%" align="center">用户</th>
    <th width="20%" align="center">交易账号</th>
    <th width="20%" align="center">交易金额</th>
    <th width="20%" align="center">交易类型</th>
    <th width="20%" align="center">交易时间</th>
  </thead>
<?php
error_reporting(0);
/*
 * Created on 2016年3月27日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

session_start();
$user = $_SESSION["user"];

include ("../conn.php");

$sql9="select * from tb_user where uname='$user'";
 	$r=mysql_query($sql9);
 	$rr=mysql_fetch_object($r);
 	if($rr->ustate == "冻结"){
 		echo "<script>alert('该用户为冻结用户，不能进行查看交易记录操作');</script>";
 	}
 	else{

$perNumber = 10; //每页显示的记录数
$page = $_GET['page']; //获得当前的页面值
$count = mysql_query("select count(*) from tb_trans"); //获得记录总数
$rs = mysql_fetch_array($count);
$totalNumber = $rs[0];
$totalPage = ceil($totalNumber / $perNumber); //计算出总页数
if (!isset ($page)) {
	$page = 1;
} //如果没有值,则赋值1
$startCount = ($page-1) * $perNumber; //分页开始,根据此方法计算出开始的记录
$result = mysql_query("select * from tb_trans where uname in(select uname from tb_user where uname='$user') limit $startCount,$perNumber"); //根据前面的计算出开始的记录和记录数
while ($row = mysql_fetch_assoc($result)) {
	echo "<tr>" .
	"<td align='center'>" . $row["uname"] . "</td>" .
	"<td align='center'>" . $row["ycredit"] . "</td>" .
	"<td align='center'>" . $row["tranmoney"] . "</td>" .
	"<td align='center'>" . $row["trankind"] . "</td>" .
	"<td align='center'>" . $row["trantime"] . "</td>" .
	"<tr>";
}
echo "</table>";
echo "<div style='margin-left:75%;font-size:22px;'><br>";
if ($page != 1) { //页数不等于1
?>
<a href="record.php?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
<?php
}
for ($i = 1; $i <= $totalPage; $i++) { //循环显示出页面
?>
<a href="record.php?page=<?php echo $i;?>"><?php echo "&nbsp;$i&nbsp;" ;?></a>
<?php
}
if ($page < $totalPage) { //如果page小于总页数,显示下一页链接
?>
<a href="record.php?page=<?php echo $page + 1;?>">下一页</a>
<?php

}
 	}
?>
</div>