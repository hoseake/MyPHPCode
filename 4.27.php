<?php
$conn=mysqli_connect('localhost','root','');
if($conn)
	echo "连接成功<br>";
else
	echo "连接失败<br>";
mysqli_select_db($conn,'xkgl');
$sql = "select * from grade;";
$mysql_result = mysqli_query($conn,$sql);
//var_dump(mysqli_fetch_row($mysql_result));
while($row = mysqli_fetch_object($mysql_result))
{
    echo $row->CourseID." | ".$row->StudentID." | ".$row->Semester." | ".$row->SchoolYear." | ".$row->Grade."<br>";
}

mysqli_close($conn);
?>
