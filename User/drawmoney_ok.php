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
session_start();
$user = $_SESSION["user"];
include ("../conn.php");
if (!empty($_POST["drawok"])) {
	$draw = $_POST["draw"];
	//echo $save;
	
	$sql9="select * from tb_user where uname='$user'";
 	$r=mysql_query($sql9);
 	$rr=mysql_fetch_object($r);
 	if($rr->ustate == "冻结"){
 		echo "<script>alert('该用户为冻结用户，不能进行取款操作');</script>";
 	}
 	else{
	
	$sql2="select amount from tb_user where uname='$user'";
	$sql = "update tb_user set amount=amount-'$draw' where uname='$user'";
	$sql1 = "insert into tb_trans values('$user','无','$draw','取款',now())";
    mysql_query($sql2);
	$res = mysql_fetch_assoc(mysql_query($sql2));

	 if($draw <= $res['amount']) {
		$re=mysql_query($sql);
		mysql_query($sql1);
		if($re){
		echo "<script>alert('取款成功'+' 取款金额为：'+$draw+'元');</script>";
		}
	 }
	 else{
		echo "<script>alert('余额不足,请重新输入');window.location.href = 'drawmoney.php';</script>";
	}
 	}
}
?>
