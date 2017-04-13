<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php
error_reporting(0);
/*
 * Created on 2016年3月29日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
session_start();
$user=$_SESSION["user"];
$_SESSION["save"]=$_POST["save"];//把存款金额存起来
//$_SESSION["time"]=now();//把存款金额存起来
  include("../conn.php");
 if(!empty($_POST["saveok"])){
 	
  //echo $_SESSION["user"];
 	$save=$_POST["save"];
 	$kind="存款";
 	$sql9="select * from tb_user where uname='$user'";
 	$r=mysql_query($sql9);
 	$rr=mysql_fetch_object($r);
 	if($rr->ustate == "冻结"){
 		echo "<script>alert('该用户为冻结用户，不能进行存款操作');</script>";
 	}
 	else{
 	
 	$sql="update tb_user set amount=amount+'$save' where uname='$user'";
 	$sql1="insert into tb_trans values('$user','无','$save','$kind',now())";
 	$res=mysql_query($sql);
 	mysql_query($sql1);
 	if($res){
 		echo "<script>alert('存款成功'+'  存款金额为：'+$save+'元');history.back();</script>";
 	}
 		else{
 			echo "<script>alert('存款失败');</script>";
 		}
 	}
 }
 mysql_close($conn);//关闭数据库
?>
