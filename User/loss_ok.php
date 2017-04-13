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
$user=$_SESSION["user"];
 include("../conn.php");
 if (!empty ($_POST["lossok"])) {
	$kid = $_POST["kid"];
	//echo $txt;
	$sql = "select * from tb_user where numcard='$kid'";
	$res = mysql_query($sql);
	$row = mysql_fetch_object($res);
	if(!$row){
		echo "<script>alert('身份证号码错误，请重新输入');window.location.href = 'loss.php';</script>";
	}else{
		if($row->ustate == "正常"){
		$state="冻结";
		$sql1="update tb_user set ustate='$state' where numcard='$kid' and uname='$user'";
		$res1=mysql_query($sql1);
		$row1 = mysql_fetch_object($res1);
		if(!$row1){
			echo "<script>alert('挂失成功');</script>";
		}
		
	}else{
		echo "<script>alert('该用户处于冻结状态，无需挂失');</script>";
	}
	}
	
}
?>


