<?php
$conn=mysqli_connect('localhost','root','');
if($conn)
	echo "连接成功<br>";
else
	echo "连接失败<br>";
mysqli_query($conn,"set names utf8");//设置数据库编码 
mysqli_select_db($conn,'PXSCJ');
$sql = "select * from kcb;";
$mysql_result = mysqli_query($conn,$sql);

while ($row=mysqli_fetch_row($mysql_result))
{
    // printf ("%s | %s",$row[0],$row[1]);
    // echo "<br>";
    echo "<table border = '1'><tbody><td>".$row[0];
    echo "</td><td>"."<a href = 5.9.php?action=select&CourseName=$row[1]>".$row[1].'</a>'; //多个参数使用&号连接
    echo "</td></tbody></table>";
}

function SelectCourseNo($conn,$CourseName){
    mysqli_query($conn,"set names utf8");
    mysqli_select_db($conn,'pxscj');
    $sql = "select 课程号 from kcb where 课程名 = '$CourseName';";
    $mysql_result = mysqli_query($conn,$sql);
    $result = mysqli_fetch_row($mysql_result);
    echo "班级号为：".$result[0];
}
if(isset($_GET["action"])&&isset($_GET["CourseName"])){
    $action=$_GET["action"];
    $CourseName=$_GET["CourseName"];
}
// $CourseName = "计算机基础";
if($action = "select")
{
    SelectCourseNo($conn,$CourseName);
}
mysqli_close($conn);
?>
