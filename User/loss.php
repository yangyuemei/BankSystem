<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<script type="text/javascript" src="../js/save.js"></script>
<link rel="stylesheet" type="text/css" href="../css/save.css">
<form class="form" action="loss_ok.php" method="post" name="lossform">
<div id="div3">
<table class="div1" align="center">
	<tr align="center">
		<td>
		<input type="text" placeholder="请输入身份证号" name="kid" class="txt"></td>
		
	</tr>
	<tr align="center">
	<td><input type="submit" class="btn" name="lossok" value="确定" onclick="return check(lossform);"></td></tr>
</table>
</div>
		</form>

