<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php
/*
 * Created on 2016年4月1日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

?>
<script type="text/javascript">
function check(form){
	if(form.pwd.value==""){
		alert("请输入原密码");
		form.pwd.focus();
		return false;
	}
	if(form.pwd1.value==""){
		alert("请输入新密码");
		form.pwd1.focus();
		return false;
	}
	else if(form.pwd1.value.length<4){
		alert("密码长度不能小于4个字符");
		form.pwd1.focus();
		form.pwd1.value=="";
		return false;
	}
	if(form.pwd1.value != form.pwd2.value){
		alert("两次输入的密码不一样，请重新输入");
		form.pwd1.focus();
		form.pwd1.value="";
		form.pwd2.value="";
		return false;
		
	}
	
}
form.submit();
</script>
<link rel="stylesheet" type="text/css" href="../css/save.css">
<form class="form" action="modify_check_ok.php" method="post" name="modifyform">
<table class="div1" align="center">
	<tr align="center">
		<td>
		<input type="text" placeholder="当前密码" name="pwd" class="txt" value=""/>
		
		</td>
		
	</tr>
	<tr align="center">
		<td>
		<input type="password" placeholder="新密码" name="pwd1" class="txt"></td>
		
	</tr>
	<tr align="center">
		<td>
		<input type="password" placeholder="确认新密码" name="pwd2" class="txt"></td>
		
	</tr>
	<tr align="center">
	<td><input type="submit" class="btn" name="modify" value="修改" onclick="return check(modifyform);">
	<input type="reset" class="btn" name="reset" value="重置"></td></tr>
</table>
		</form>