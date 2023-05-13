<form>
			<p>
				<span>请输入逗号分隔人名</span>
				<input type="text" name="nameStr" required="required"/>
                <span>请输入逗号分隔整数</span>
				<input type="text" name="numStr" required="required"/>
                <br>
                <input type="submit" value="提交"/> 
                <!-- 单表单可以用回车提交，多个表单要设置一个提交按钮 -->
            </p>
</form>
<?php
    $numStr = "";
    $nameStr = "";
    if(isset($_GET["nameStr"])&&isset($_GET["numStr"])){
         $nameStr = $_GET["nameStr"];
         $numStr = $_GET["numStr"];
         $names = explode(",",$nameStr);
         $nums = explode(",",$numStr);
     }
    //print_r($names);
    // echo "<br>";
    // print_r($nums);
    // echo "<br>";
    $name_num_array = array_combine($names,$nums);//联合数组
    $name_num_array1 = $name_num_array;
    print_r($name_num_array);
    echo "<br>";
    $sum = 0;
    foreach($name_num_array as $value)
    {
        $sum += $value;
    }
    echo "数组值之和为:".$sum;
    echo "<br>";
    asort($name_num_array);
    print_r($name_num_array);
    echo "<br>";
    krsort($name_num_array1);
    print_r($name_num_array1);
    echo "<br>";
    $name_num_array1_reverse = array_flip($name_num_array1);
    print_r($name_num_array1_reverse);
    echo "<br>";
    $array_merge = array_merge($names,$nums);
    print_r($array_merge);
?>