<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php
error_reporting(0);
/*
 * Created on 2016年3月27日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
include ("conn.php");

//echo $res;
if (!empty ($_POST["reg"])) {
	$name = $_POST['uname'];
	$pwd = $_POST['upwd1'];
	$ucredit=rand(1000000,9999999);
	$numcard = $_POST['numcard'];
	$uemail = $_POST['uemail'];
	$utel = $_POST['tel'];
	//echo $utel;

	$sql = "select uname from tb_user where uname='$name'";
	$query = mysql_query($sql);
	$rows = mysql_num_rows($query);
	
	$sql2 = "select uemail from tb_user where uemail='$uemail'";
	$query1 = mysql_query($sql2);
	$rows2 = mysql_num_rows($query1);
	
	$sql4 = "select utel from tb_user where utel='$utel'";
	$query4 = mysql_query($sql4);
	$rows4 = mysql_num_rows($query4);
	
	$sql3 = "select numcard from tb_user where numcard='$numcard'";
	$query3 = mysql_query($sql3);
	$rows3 = mysql_num_rows($query3);
	if ($rows2 > 0) {
		echo "<script type='text/javascript'>alert('该邮箱已注册过,注册失败');" .
				"location='javascript:history.back()';</script>";
	}
	else if ($rows4 > 0) {
		echo "<script type='text/javascript'>alert('该手机号已注册过,注册失败');" .
				"location='javascript:history.back()';</script>";
	}
	
	else if ($rows3 > 0) {
		echo "<script type='text/javascript'>alert('该身份证号已注册过,注册失败');" .
				"location='javascript:history.back()';</script>";
	}
	else if ($rows > 0) {
		echo "<script type='text/javascript'>alert('用户名已存在,注册失败');" .
				"location='javascript:history.back()';</script>";
	} else {
		$sql1 = "insert into tb_user values('$name','$pwd','$ucredit','$numcard','$uemail','$utel',now(),'0','正常')";
		$result = mysql_query($sql1);
		if (!$result) {
			echo "<script>alert('注册失败');</script>";
			echo "<script>window.location.href = 'reg_login.php';</script>";
		}
		echo "<script>alert('注册成功');</script>";
		echo "<script>window.location.href = 'reg_login.php';</script>";
	}
}
?>
