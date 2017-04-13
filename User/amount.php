<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<link rel="stylesheet" type="text/css" href="../css/save.css">
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
 
  
 	$sql="select amount from tb_user where uname='$user'";
 	mysql_query($sql);
 	$res = mysql_fetch_assoc(mysql_query($sql));

echo "<div class='div1' style='margin-left:46%;color:red;'><br><br><br>" .
		"<span>当前余额为：".$res['amount']."</span><br>" .
	"<span>当前时间为：".date('Y-m-d H:i:s')."</span><br></div>";
 	
?>





