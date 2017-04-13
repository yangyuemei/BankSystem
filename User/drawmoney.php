<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<script type="text/javascript" src="../js/draw.js"></script>
<link rel="stylesheet" type="text/css" href="../css/save.css">
<form class="form" action="drawmoney_ok.php" method="post" name="drawform">
<table class="div1" align="center">
	<tr align="center">
		<td><input type="text" placeholder="取款金额" name="draw" class="txt"></td>
		
	</tr>
	<tr align="center">
	<td><input type="submit" class="btn" name="drawok" value="确定" onclick="return check(drawform);"></td></tr>
</table>
		</form>