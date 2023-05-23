<?php
$ZY=$_GET['ZY'];
header('Content-Type:text/html;charset=gb2312');//发送header，将编码设为gb2312
$conn=mysql_connect("localhost","root","");		//连接MySQL服务器
mysql_select_db("PXSCJ",$conn);					//选择PXSCJ数据库
mysql_query("SET NAMES gb2312");				//将字符集设为gb2312
$sql="select 学号 from XSB where 专业='$ZY'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
	echo $row['学号']."<br/>";					//输出该专业的所有学号
}
?>
