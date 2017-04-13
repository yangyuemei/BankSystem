<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php
error_reporting(0);
session_start();
$_SESSION["user"] = $_POST["user"];

/*
 * Created on 2016年3月27日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

include ("conn.php");
if (!empty ($_POST["login"])) {
	//echo $_POST["pwd"];
	$user = $_POST["user"];
	$pwd = $_POST["pwd"];
	$sel = $_POST["sel"];
	//echo $sel;

	if ($sel == "普通用户") {
		$sql = "select * from tb_user where uname='" . trim($user) . "' and upwd='" . $pwd . "'";
		$info = mysql_fetch_array(mysql_query($sql));
		if (!$info) {
			//echo '登录不成功';
			echo "<script>alert('用户名或密码错误，请重新登录');</script>";
			echo "<script>window.location.href = 'reg_login.php';</script>";
			//Header("Location: login.php ");

		} else {
			//echo "<script>alert('登录成功');</script>";
			echo "<script>window.location.href = 'main.php';</script>";

		}
	} else {
		$sql1 = "select * from tb_super where suname='" . trim($user) . "' and spwd='" . $pwd . "'";
		$info1 = mysql_fetch_array(mysql_query($sql1));
		if (!$info1) {
			//echo '登录不成功';
			echo "<script>alert('用户名或密码错误，请重新登录');</script>";
			echo "<script>window.location.href = 'reg_login.php';</script>";
			//Header("Location: login.php ");

		} else {
			//echo "<script>alert('登录成功');</script>";
			echo "<script>window.location.href = 'Super/supermain.php';</script>";

		}
	}
}
mysql_free_result($info);
mysql_close();
?>
