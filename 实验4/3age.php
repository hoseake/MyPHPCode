<?php
    function getAge($birthday){
    //格式化出生时间年月日
    $birthday = strtotime($birthday);//转换成时间戳
    $byear=date('Y',$birthday);//时间戳提取年月日
    $bmonth=date('m',$birthday);
    $bday=date('d',$birthday);
 
    //格式化当前时间年月日
    date_default_timezone_set("Asia/Shanghai");
    $tyear=date('Y');
    $tmonth=date('m');
    $tday=date('d');
 
    //开始计算年龄
    $age=$tyear-$byear;
    if($bmonth>$tmonth || $bmonth==$tmonth && $bday>$tday){
        $age--;
    }
    return $age;
}

  //计算生肖
  function get_shengxiao($year){  
    $animals = array('子鼠','丑牛','寅虎','卯兔','辰龙','巳蛇','午马','未羊','申猴','酉鸡','戌狗','亥猪'); 
    $key = ($year - 1900) % 12;  
    return $animals[$key];
} 
echo "今年多少岁：".getAge(20010703);
echo "<br>";
echo "生肖是：".get_shengxiao(2001);
echo "<br>";
echo "生肖是：".get_shengxiao(2009);

?>