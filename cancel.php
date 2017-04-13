<?php 
header("Content-Type: text/html; charset=UTF-8");//解决中文乱码
?>
<?php
/*
 * Created on 2016年3月31日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 session_start();
 session_destroy();
 header("location:./reg_login.php")
?>
