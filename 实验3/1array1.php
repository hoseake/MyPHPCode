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
    $nums1 = $nums;
    print_r($nums);
    echo "<br>";
    //PHP8不支持each()函数，PHP5支持，但又不支持中文路径，所以注释掉了
    // $sum = 0;
    // while(list($key,$value) = each($nums))
    // {
    //     $sum += $value; 
    // }
    // echo "数组之和为:".$sum."(while方法)";
    // echo "<br>";
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
    echo "<br>";
    rsort($nums);//降序排列数组
    print_r($nums);
    echo "<br>";
    foreach($nums1 as $value)
    {
        $result=array_pop($nums1);
        echo $result." ";
    }
?>