<?php
    $str1="我是”成都东软学院”的学生”张三”";
    $str2="我是“成都东软学院”的学生“张三”";
    $str3="我是(成都东软学院)的学生(张三)";
    echo "str1的长度是".strlen($str1);
    echo "<br>";
    echo "str2的长度是".strlen($str2);
    echo "<br>";
    echo "str3的长度是".strlen($str3);
    echo "<br>";
    $times = 2;//替换次数
    $newStr2 = str_replace("“","<",$str2,$times);
    $newStr2 = str_replace("”",">",$newStr2,$times);
    echo $newStr2;
    echo "<br>";
    $newStr3 = str_replace("(","<",$str3,$times);
    $newStr3 = str_replace(")",">",$newStr3,$times);
    echo $newStr3;
?>