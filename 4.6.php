<form>
			<p>
				<span>输入出生日期</span>
				<input type="text" name="ymd" required="required"/>
            </p>
</form>
<?php
    //显示距离出生已经过去了多少天
    date_default_timezone_set("Asia/Shanghai");
    if(isset($_GET['ymd']))
    {
        $ymd = $_GET['ymd'];
    }
    $birthTime = strtotime($ymd);
    $todayTime = strtotime(date('ymd'));
    $day=($todayTime-$birthTime)/(24*3600);
    echo "已经过去了".(int)$day."天";
?>