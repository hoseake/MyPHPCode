<?php
$conn=mysqli_connect('localhost','root','') or die('连接失败');
mysqli_select_db($conn,'pxscj') or die('选择数据库失败');
mysqli_query($conn,"SET NAMES utf8");
$sql="select * from XSB";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<tr><td>学号</td><td>姓名</td><td>性别</td><td>专业</td></tr>";
while($row=mysqli_fetch_row($result))
{
	list($XH,$XM,$XB,$CSSJ,$ZY,$ZXF,$BZ)=$row;
	echo "<tr><td>$XH</td><td>$XM</td><td>$XB</td><td>$ZY</td></tr>";
}
echo "</table>";
?>