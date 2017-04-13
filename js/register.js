/**
 * 
 */
//验证电话号码
function checktel(tel){
	var str=tel;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/(\d{3}-)?\d{8}|(\d{4}-)(\d{7})/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		
		return false;
	}
}
//验证身份证号码
function checkeNO(NO){
	var str=NO;
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/^\d{17}[\d|X]|^\d{15}$/; 
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}
//验证表单里的文本框
function check(form){
	if(form.uname.value==""){
		alert("用户名不能为空");
		form.uname.focus();
		return false;
	}
	if(form.uname.value.length>6){
		alert("用户名长度不能大于6位");
		form.uname.focus();
		return false;
	}
	if(form.upwd1.value==""){
		alert("密码不能为空");
		form.upwd1.focus();
		return false;
	}
	if(form.upwd2.value==""){
		alert("密码不能为空");
		form.upwd2.focus();
		return false;
	}
	else if(form.upwd1.value.length<4){
		alert("密码长度不能小于4个字符");
		form.upwd1.focus();
		form.upwd1.value=="";
		return false;
	}
	if(form.upwd1.value != form.upwd2.value){
		alert("两次输入的密码不一样，请重新输入");
		form.upwd1.focus();
		form.upwd1.value="";
		form.upwd2.value="";
		return false;
		
	}
	
	if(form.numcard.value==""){
		alert("请输入身份证号码!");
		form.numcard.focus();
		return false;
	}
	if(!checkeNO(form.numcard.value)){
		alert("您输入的身份证号码不正确!");
		form.numcard.focus();
		return false;
	}
	
	if(form.uemail.value==""){
		alert("邮箱不能为空");
		form.uemail.focus();
		return false;
	}
	var pattern = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;  
    if (!pattern.test(form.uemail.value)) {  
        alert("请输入正确的邮箱地址");  
        form.uemail.focus();  
        return false;  
    }  
	if(form.tel.value==""){
		alert("手机号码不能为空");
		form.tel.focus();
		return false;
	}
	if(form.tel.value.length != 11){
		alert("请输入11位的手机号码");
		form.tel.focus();
		return false;
	}
}
form.submit();