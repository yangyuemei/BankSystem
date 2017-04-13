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
?>

<style id="red" disabled="ture">
body {
	background-color: #f00;
}
</style>
<style id="blue" disabled="ture">
body {
	background-color: #3399FF;
}
</style>
<style id="black" disabled="ture">
body {
	background-color: black;
}
</style>
<style id="default">
body {
	background-color: #3377FF;
	background: url(../Images/super.jpg) 100%;
}
</style>
<style type="text/css">
body {
	font-size: 12px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	margin: 0;
}
</style>
<script>
		function switchSkin(skin) {
			var style = document.getElementById(skin);
			var tmp = document.getElementsByTagName('style');
			var skinArr = [];
			for (var i = 0; i < tmp.length; i++) {
				if (tmp[i].getAttribute('id')) {
					skinArr[i] = tmp[i].getAttribute('id');
					document.getElementById(skinArr[i]).disabled = true;
				}
			}
			style.disabled = false;
		}
	</script>

<link rel="stylesheet" type="text/css" href="../css/miaov_style.css" />
<script type="text/javascript" src="../js/miaov.js">
</script>
<script type="text/javascript">
function del() {
	if (!confirm("确认要退出登录吗？")) {
		window.event.returnValue = false;
	}
}
</script>
<link href="../css/superbody.css" rel="stylesheet" type="text/css">
 <script src="../js/prefixfree.min.js"></script>
 <nav role="full-horizontal" style="margin:0px 20px;">
    <ul>
    
        <li><a href="find_user.php" target="r">查询用户</a></li>
        <li><a href="freeze_user.php" target="r">冻结用户</a></li>
        <li><a href="free_user.php" target="r">解除冻结</a></li>
         <li><a href="find_mess.php" target="r">查看留言</a></li>
        <li><a href="supercancel.php" onclick="del()">退出登录</a></li>
    </ul>
</nav>

<a href="#" onclick="switchSkin('red');">红色</a>
	<a href="#" onclick="switchSkin('blue');">蓝色</a>
	<a href="#" onclick="switchSkin('black');">黑色</a>
	
<iframe name="r" style="width:100%;height:500px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
<div ></div>
</iframe>