<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php

/*
 * Created on 2016年3月28日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/login1.js"></script>
<script type="text/javascript" src="js/register.js"></script>
<link href="css/login2.css" rel="stylesheet" type="text/css" />

<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>    
  
    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">
    
            
			<div class="login_form">
				<form action="login.php" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">帐号：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="user" name="user" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">密码：</label> 
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" id="pwd" name="pwd" class="inputstyle"/>
                </div>
                </div>
                
                
                <div class="pwdArea" id="pwdArea">
               <div  id="pArea" align="center">
                    
                    <input type="radio" name="sel" value="普通用户" checked="checked"/>普通用户
                    <input type="radio" name="sel" value="管理员"/>管理员
                </div>
                </div>
               
                <div style="padding-left:50px;margin-top:-30px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue" name="login" onclick="return checklogin(loginform);"/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--登录end-->
  </div>

  <!--注册-->
    <div class="qlogin" id="qlogin" style="display: none; ">
   
    <div class="web_login">
    <form id="regUser" accept-charset="utf-8"  action="register.php" method="post" name="regform">
	      <input type="hidden" name="to" value="reg"/>
		      		       <input type="hidden" name="did" value="0"/>
        <ul class="reg_form" id="reg-ul">
                <li>
                    <label for="user"  class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" name="uname" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                <label for="passwd" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="upwd1" name="upwd1" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                <label for="passwd2" class="input-tips2">确认密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="upwd2" name="upwd2" class="inputstyle2" />
                    </div>
                </li>
                <li>
                 <label for="qq" class="input-tips2">身份证号：</label>
                    <div class="inputOuter2">
                        <input type="text" name="numcard" class="inputstyle2"/>
                    </div>
                   
                </li>
                 <li>
                 <label for="qq" class="input-tips2">邮箱：</label>
                    <div class="inputOuter2">
                       
                        <input type="text" name="uemail" class="inputstyle2"/>
                    </div>
                   
                </li>
                <li>
                 <label class="input-tips2">手机号码：</label>
                    <div class="inputOuter2">
                       
                        <input type="text" name="tel" class="inputstyle2"/>
                    </div>
                </li>
                <li>
                    <div class="inputArea">
                        <input type="submit" name="reg"  style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册" onclick="return check(regform);"/> <a href="rule.php" class="zcxy">注册协议</a>
                    </div>
                </li><div class="cl"></div>
            </ul></form>
    </div>
    </div>
    <!--注册end-->
</div>
