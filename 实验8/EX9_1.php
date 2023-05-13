<?php
$conn=mysqli_connect('localhost','root','');
if($conn)
	echo "连接成功";
else
	echo "连接失败";
?>
