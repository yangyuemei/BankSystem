/**
 * 
 */
function check(form){
	if(form.save.value==""){
		alert("存款金额不能为空");
		form.save.focus();
		return false;
	}
	if(form.save.value<0){
		alert("存款金额要大于零");
		form.save.focus();
		return false;
	}
	if(isNaN(form.save.value)||form.save.value<=0||!(/^\d+$/.test(form.save.value))){
		alert("请输入正确的数值,只允许输入整数!");
		form.save.focus();
		form.save.value="";
		return false;
	}
}
form.submit();

