<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
 <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">
  <style>
    .toggler { width: 500px; height: 200px; position: relative; }
    #button { padding: .5em 1em; text-decoration: none; }
    #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
    .ui-effects-transfer { border: 2px dotted gray; }
  </style>
  <script>
  $(function() {
    // 运行当前选中的特效
    function runEffect() {
      // 从中获取特效类型
      var selectedEffect = $( "#effectTypes" ).val();
 
      // 大多数的特效类型默认不需要传递选项
      var options = {};
      // 一些特效带有必需的参数
      if ( selectedEffect === "scale" ) {
        options = { percent: 0 };
      } else if ( selectedEffect === "transfer" ) {
        options = { to: "#button", className: "ui-effects-transfer" };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // 运行特效
      $( "#effect" ).effect( selectedEffect, options, 500, callback );
    };
 
    // 回调函数
    function callback() {
      setTimeout(function() {
        $( "#effect" ).removeAttr( "style" ).hide().fadeIn();
      }, 1000 );
    };
 
    // 根据选择菜单值设置特效
    $( "#button" ).click(function() {
      runEffect();
      return false;
    });
  });
  </script>




<style id="red" disabled="ture">
body {
	
	background-color:#EE2C2C;
}
</style>
<style id="blue" disabled="ture">
body {
	
	background-color:#1E90FF;
}
</style>
<style id="black" disabled="ture">
body {
	background-color: #DDA0DD;
}
</style>
<style id="default">
body {
	
	background:url(Images/dark_wood.png) 0 0 repeat;
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


<script type="text/javascript" src="js/warn.js"></script>
<link href="css/body.css" rel="stylesheet" type="text/css" />
    <?php
error_reporting(0);
session_start();
$user = $_SESSION["user"];
echo "<span style='color:red;margin-left:-1100px'>欢迎用户" . $user . "" .
"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='cancel.php' onclick='return del()'>注销</a></span>";
?>

<!--
if($user == ""){
	<script>alert('请先登录');</script>;
}else{-->
<div class="top">
<div align="center"><img src="Images/logo.png" width="120" height="60" style="margin-left:30px;display:inline-block;" align="center">
<span class="ziti" style="display:inline-block;"><h2>模拟网上银行交易系统<h2>
<a href="#" onclick="switchSkin('red');">红色</a>
	<a href="#" onclick="switchSkin('black');">紫色</a>
	</span><a href="#" onclick="switchSkin('blue');" >蓝色</a>
<div align="left">
</div>
</div>



 <div class='ribbon'>
 
   <a href="User/savemoney.php" target="r"><span class="ziti">存款</span></a>
   <a href="User/drawmoney.php" target="r"><span class="ziti">取款</span></a>
   <a href="User/tranmoney.php" target="r"><span class="ziti">转账</span></a>
   <a href="User/amount.php" target="r"><span class="ziti">查余额</span></a>
   <a href="User/record.php" target="r"><span class="ziti">查交易记录</span></a>
   <a href="User/userinfo.php" target="r"><span class="ziti">查个人信息</span></a>
   <a href="User/loss.php" target="r"><span class="ziti">挂失</span></a>
   <a href="User/message.php" target="r"><span class="ziti">互动平台</span></a>
 </div>

 
</div>
<iframe id="r" name="r" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><div style="display:none;"></div></iframe>