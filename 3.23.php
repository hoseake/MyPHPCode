<?php
    $arr1 = array(1,4,7,5,11);
    $arr2 = array(2,5,7,6,12);
    $arr3 = array(3,4,7,6,13);
    $result1 = array_diff($arr1,$arr2);//差集
    $result2 = array_merge($arr2,$arr3);//并集
    $result3 = array_intersect($arr1,$arr2,$arr3);//交集
    echo "arr1和arr2的差集是:";
    print_r($result1);
    echo "<br>";
    echo "arr2,arr3的并集是:";
    print_r($result2);
    echo "<br>";
    echo "arr1,arr2,arr3的交集是:";
    print_r($result3);
    echo "<br>";
    $array1=array("a"=>9, "c"=>6, "b"=>8, "d"=>5);
    $array2=array(1,9,7,6,20,11);
    $sum = 0;
    while(list($key,$value) = each($array2))
    {
        echo $value." ";
        $sum += $value; 
    }
    echo "数组之和为:".$sum;
    echo "<br>";
    $sum = 0;
    for($i = 0;$i<6;$i++)
    {
        echo $array2[$i]." ";
        $sum += $array2[$i];
    }
    echo "数组之和为:".$sum;
    echo "<br>";
    $sum = 0;
    foreach($array2 as $value)
    {
        echo $value." ";
        $sum += $value;
    }
    echo "数组之和为:".$sum;
    echo "<br>";
    sort($array1);
    print_r($array1);
    echo "<br>";
    rsort($array1);
    print_r($array1);
?>

