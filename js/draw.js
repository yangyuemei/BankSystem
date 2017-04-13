/**
 * 
 */
function check(form){
	if(form.draw.value==""){
		alert("取款金额不能为空");
		form.draw.focus();
		return false;
	}
	if(isNaN(form.draw.value)||form.draw.value<=0||!(/^\d+$/.test(form.draw.value))){
		alert("请输入正确的数值,只允许输入整数!");
		form.draw.focus();
		form.draw.value="";
		return false;
	}
}
form.submit();