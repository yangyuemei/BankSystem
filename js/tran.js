/**
 * 
 */
function check(form){
	if(form.cid.value==""){
		alert("对方账号不能为空");
		form.cid.focus();
		return false;
	}
	if(form.tran.value==""){
		alert("转账金额要大于0");
		form.tran.focus();
		return false;
	}
	
}
form.submit();