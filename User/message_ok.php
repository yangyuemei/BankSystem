<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php

/*
 * Created on 2016年4月7日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
session_start();
$user = $_SESSION["user"];
include ("../conn.php");

if ($_POST["ok"]) {
	$mess = $_POST["mess"];

	$sql9 = "select * from tb_user where uname='$user'";
	$r = mysql_query($sql9);
	$rr = mysql_fetch_object($r);
	if ($rr->ustate == "冻结") {
		echo "<script>alert('该用户为冻结用户，不能进行留言操作');</script>";
	} else {
		$sql = "insert into tb_message values('$user','$mess',now())";
		$res = mysql_query($sql);
		if ($res) {
			echo "<script>alert('留言提交成功');</script>";
		}
	}

}
?>
