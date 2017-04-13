<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<link href="../css/finduser.css" rel="stylesheet" type="text/css">
<link href="../css/free.css" rel="stylesheet" type="text/css">
<form action="free_user.php" method="post">
<div align="center">
	<label class="ziti1"><i>请输入要解除冻结的用户名：</i></label><input type="text" name="txt" class="txt"/>
<input type="submit" name="submit" value="解除冻结" class="btn"/>
</div>
</form>
<?php
error_reporting(0);
/*
 * Created on 2016年4月3日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 include ("../conn.php");
if (!empty ($_POST["submit"])) {
	$txt = $_POST[txt];
	//echo $txt;
	$sql = "select ustate from tb_user where uname='$txt'";
	$res = mysql_query($sql);
	$row = mysql_fetch_object($res);
	if($row->ustate == "冻结"){
		$state="正常";
		$sql1="update tb_user set ustate='$state' where uname='$txt'";
		$res1=mysql_query($sql1);
		$row1 = mysql_fetch_object($res1);
		if(!$row1){
			echo "<script>alert('解除冻结成功');</script>";
		}
	}else{
		echo "<script>alert('该用户处于正常状态，无需解除冻结');</script>";
	}
}
?>
