<?php
error_reporting(0);
/*
 * Created on 2016年3月27日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 
 
 
 /*if($conn){
 	echo "数据源连接成功<br>";
 }*/
//$conn=mysql_connect("localhost","root","") or die("数据库连接出错".mysql_error());
 //$db_select=mysql_select_db("db_bank",$conn);
 //mysql_query("set names utf8",$conn);
 /*if($db_select){
 	echo "数据选择成功<br>";
 }*/
$conn=mysql_connect("112.213.124.91","a0826104846","6a3f1747") ;
$select=mysql_select_db("a0826104846",$conn);
mysql_query("set names utf8");
 
?>
