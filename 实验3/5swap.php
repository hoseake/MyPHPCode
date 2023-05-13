<?php
    function swap($a,$b)//普通参数传递，只有函数内的参数变化
    {
        $temp=$a;
        $a=$b;
        $b=$temp;
    }
    $a=1;$b=0;
    echo "a b交换之前的值为：".$a." ".$b."，";
    swap($a,$b);
    echo "a b交换之后的值为：".$a." ".$b;
    echo "<br>";
    
    function swap_s(&$a,&$b)//引用参数传递，函数内部参数变化将引起外部参数变化
    {
        $temp=$a;
        $a=$b;
        $b=$temp;
        $c=array($a,$b);
        return $c;
    }
    $a=1;$b=0;
    echo "a b交换之前的值为：".$a." ".$b."，";
    $arry=swap_s($a,$b);
    echo "a b交换之后的值为：".$a." ".$b;
    echo "<br>";
    print_r($arry);
?>