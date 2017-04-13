<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<script type="text/javascript" src="../js/tran.js"></script>
<link rel="stylesheet" type="text/css" href="../css/save.css">
<form class="form" action="tranmoney_ok.php" method="post" name="tranform"  >
<table class="div1" align="center">
	<tr align="center">
		<td><input type="text" placeholder="对方账号" name="cid" class="txt"></td>
	</tr>
	<tr align="center">
		<td><input type="text" placeholder="转账金额" name="tran" class="txt" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"></td>
	</tr>
	<tr align="center">
		<td><input type="submit" class="btn" name="tranok" value="确定" onclick="return check(tranform);"></td>
	</tr>
</table>
		</form>