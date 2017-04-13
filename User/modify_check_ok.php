<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php

/*
 * Created on 2016年4月1日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
session_start();
$user = $_SESSION["user"];
include ("../conn.php");

if (!empty ($_POST["modify"])) {
	$pwd = $_POST["pwd"];
	$pwd1 = $_POST["pwd1"];
	$pwd2 = $_POST["pwd2"];
	//echo $pwd1;
	$sql = "update tb_user set upwd='$pwd1' where uname='$user'";
	

	$sql1 = "select upwd from tb_user where uname='$user'";
	$re = mysql_query($sql1);
	$ress = mysql_fetch_object($re);
	
	if ($pwd != $ress->upwd) {
		echo "<script>alert('原密码错误,请重新输入');history.back();window.location.href = 'modify_pwd.php';</script>";
	} else {
		$res = mysql_query($sql);
		if ($res) {
			echo "<script>alert('修改成功,请重新登录');history.back();window.top.location.href = '../login_reg.php';</script>";
		} else {
			echo "<script>alert('修改失败，请重新修改');history.back();window.location.href = 'modify_pwd.php';</script>";
		}
	}

}
?>
