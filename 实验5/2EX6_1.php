<!DOCTYPE html>
<html>
<head>
	<title>学生管理类</title>
</head>
<body>
<form method="post">
	学号：<input type="text" name="number"><br/>
	姓名：<input type="text" name="name"><br/>
	性别：<input type="radio" name="sex" value="男" checked="checked">男
	<input type="radio" name="sex" value="女">女<br/>
    学生干部：<input type="radio" name="leader" value="是">是
    <input type="radio" name="leader" value="否" checked="checked">否<br/>
    学生干部岗位名称：<input type="text" name="jobname"><br/>
	<input type="submit" name="ok" value="显示">
</form>
</body>
</html>
<?php
class student
{
	private $number;
	private $name;
	private $sex;
    function __construct($XH,$XM,$XB)
    {
        $this->number=$XH;
		$this->name=$XM;
		$this->sex=$XB;
    }
	function show()
	{
		echo "学号：".$this->number."<br/>";
		echo "姓名：".$this->name."<br/>";
		echo "性别：".$this->sex."<br/>";
	}
}

if(isset($_POST['ok']))
{
	$XH=$_POST['number'];
	$XM=$_POST['name'];
	$XB=$_POST['sex'];
	$stu=new student($XH,$XM,$XB);
	$stu->show();
}
if(isset($_POST['ok'])&&($_POST['leader'] == '是'))
{
    class studentLeader extends student
    {
        private $leaderJobName;
        function __construct($XH,$XM,$XB,$jobname)
        {
            student::__construct($XH,$XM,$XB);//调用父类构造函数，参数列表与父类相同
            $this->leaderJobName = $jobname;
        }
        function show()
	    {
            echo "学生干部岗位名称：".$this->leaderJobName."<br>";
	    }
    }
    $studentLeader = new studentLeader($XH,$XM,$XB,$_POST['jobname']);
    $studentLeader->show();
}
?>
