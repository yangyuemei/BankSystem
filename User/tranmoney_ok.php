<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php
/*
 * Created on 2016年3月27日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
session_start();
$user=$_SESSION["user"];

 include("../conn.php");
 if(!empty($_POST["tranok"])){
 	
 	$cid=$_POST["cid"];
 	//echo $cid;
 	$tran=$_POST["tran"];
 	
 	$sql9="select * from tb_user where uname='$user'";
 	$r=mysql_query($sql9);
 	$rr=mysql_fetch_object($r);
 	if($rr->ustate == "冻结"){
 		echo "<script>alert('该用户为冻结用户，不能进行转账操作');</script>";
 	}
 	else{
 	
 	
 	//验证卡号是否存在
 	
 	$sql1="select * from tb_user where ucredit='".trim($cid)."'";
 	$res1 = mysql_fetch_object(mysql_query($sql1));
 	
 	//查看账户余额是否够转账金额
 	$sql2="select amount from tb_user where uname='$user'";
 	$re2=mysql_query($sql2);
	$res2 = mysql_fetch_object($re2);
	
	//更新自己的账户余额
	$sql3="update tb_user set amount=amount-'$tran' where uname='$user'";
 	//更新对方的账户余额
 	$sql4="update tb_user set amount=amount+'$tran' where ucredit='$cid'";
 	//执行插入交易记录表
 	$sql5="insert into tb_trans values('$user','$cid','$tran','转账',now())";
	
 	if($cid == $res1->ucredit){
 		//echo "<script>alert('对方账号正确');</script>";
 		if($tran <= $res2->amount){
 			mysql_query($sql3);//更新自己的账户余额
 	        mysql_query($sql14);//更新对方的账户余额
 	        mysql_query($sql5);//执行插入交易记录表
 			echo "<script>alert('转账成功'+' 向用户'+$cid+'转账'+$tran+'元');</script>";
 		}
 		else{
 			echo "<script>alert('余额不足，无法转账,请重新输入转账金额');window.location.href = 'tranmoney.php';</script>";
 		exit;
 		}
 	}
 	else{
 		echo "<script>alert('对方账号错误');window.location.href = 'tranmoney.php';</script>";  
 	}
 	
 	}
 	
 	
 }
?>
