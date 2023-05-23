<?php
$XH=$_GET['XH'];									//取得XH的值
$KCM=$_GET['KCM'];									//取得KCM的值
header('Content-Type:text/html;charset=utf8');	//发送header，将编码设为utf8
$conn=mysqli_connect("localhost","root","");			//连接MySQL服务器
mysqli_select_db($conn,"PXSCJ");						//选择PXSCJ数据库
mysqli_query($conn,"SET NAMES utf8");					//将字符集设为utf8
//查询成绩的SQL语句
$sql="select 成绩 from CJB where 学号='$XH' and 课程号=(select 课程号 from KCB where 课程名='$KCM')";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row)
	echo $row['成绩'];								//输出课程成绩
else
	echo "无此成绩";
?>
