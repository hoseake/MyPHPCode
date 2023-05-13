<form>
学号：<input name="stuNo" type="text">
<input name="提交" type="submit">
</form>
<?php
if(isset($_GET["stuNo"])){
    $stuNo=$_GET["stuNo"];
}
$conn=mysqli_connect('localhost','root','') or die('连接失败');
mysqli_select_db($conn,'pxscj') or die('选择数据库失败');
mysqli_query($conn,"SET NAMES utf8");
$sql="select * from XSB WHERE 学号 = '$stuNo';";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<tr><td>学号</td><td>姓名</td><td>性别</td><td>出生时间</td><td>专业</td><td>总学分</td><td>备注</td></tr>";
while($row=mysqli_fetch_row($result))
{
	list($XH,$XM,$XB,$CSSJ,$ZY,$ZXF,$BZ)=$row;
	echo "<tr><td>$XH</td><td>$XM</td><td>$XB</td><td>$CSSJ</td><td>$ZY</td><td>$ZXF</td><td>$BZ</td></tr>";
}
echo "</table>";
?>