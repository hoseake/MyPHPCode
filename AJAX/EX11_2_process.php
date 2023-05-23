<?php
$XH=$_POST['XH'];
$XM=$_POST['XM'];
header('Content-Type:text/html;charset=gb2312');			//发送header，将编码设为gb2312
$conn=mysql_connect("localhost","root","");					//连接MySQL服务器
mysql_select_db("PXSCJ",$conn);								//选择PXSCJ数据库
mysql_query("SET NAMES gb2312");							//将字符集设为gb2312
$sql="select * from XSB where 学号='$XH'";					//查询语句
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if($row)
	echo "1";
else
	echo "0";
?>
