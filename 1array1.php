<form>
			<p>
				<span>请输入逗号分隔整数</span>
				<input type="text" name="numStr" required="required"/>
			</p>
</form>
<?php
    $numStr = "";
    if(isset($_GET["numStr"])){
        $numStr = $_GET["numStr"];
    }
    $nums = explode(",",$numStr);
    print_r($nums);
    echo "<br>";
    $sum = 0;
    while(list($key,$value) = each($nums))
    {
        $sum += $value; 
    }
    echo "数组之和为:".$sum."(while方法)";
    echo "<br>";
    $sum = 0;
    for($i = 0;$i<5;$i++)
    {
        $sum += $nums[$i];
    }
    echo "数组之和为:".$sum."(for方法)";
    echo "<br>";
    $sum = 0;
    foreach($nums as $value)
    {
        $sum += $value;
    }
    echo "数组之和为:".$sum ."(foreach方法)";
?>