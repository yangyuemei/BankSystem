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
?>
<script type="text/javascript">
function checkmess(form){
	if(form.mess.value.length < 10){
	alert("字数控制在10~200字之间");
	form.mess.focus();
	return false;
	}
}
form.submit();
</script>
<script type="text/javascript" src="../js/save.js"></script>
<link rel="stylesheet" type="text/css" href="../css/save.css">
<form class="form" action="message_ok.php" method="post" name="messform">
<div id="div3">
<div align="center" class="div2"></div>
<table class="div1" align="center">
<tr align="center">
<td><label class="div2">请留下你的宝贵意见或建议</label></td></tr>
	<tr align="center">
	
		<td>
		<textarea name="mess" placeholder="留言内容" rows="30" cols="10" style="overflow-y:hidden;height:20px;" 
onpropertychange="this.style.height=this.scrollHeight+'px'"
oninput="this.style.height=this.scrollHeight+'px'" class="txt1">

</textarea></td>
		
	</tr>
	<tr align="center">
	<td><input type="submit" class="btn" name="ok" value="确定" onclick="return checkmess(messform);"></td></tr>
</table>
</div>
</form>
