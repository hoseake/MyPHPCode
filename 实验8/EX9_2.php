<?php
$conn=mysqli_connect('localhost','root','') or die('连接失败');
mysqli_select_db($conn,'pxscj') or die('选择数据库失败');
mysqli_query($conn,"SET NAMES utf8");
$sql="select * from XSB where 性别=0";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<tr><td>学号</td><td>姓名</td><td>总学分</td></tr>";
while($row=mysqli_fetch_row($result))
{
	list($XH,$XM,$XB,$CSSJ,$ZY,$ZXF,$BZ)=$row;
	echo "<tr><td>$XH</td><td>$XM</td><td>$ZXF</td></tr>";
}
echo "</table>";
?>
