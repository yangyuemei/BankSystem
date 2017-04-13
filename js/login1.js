/**
 * 
 */
function checklogin(form1){
	if(form1.user.value==""){
		alert("用户名不能为空");
		form1.user.focus();
		return false;
	}
	if(form1.pwd.value==""){
		alert("密码不能为空");
		form1.pwd.focus();
		return false;
	}
}
form1.submit();