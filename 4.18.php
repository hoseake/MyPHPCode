<?php
    //通过地址栏直接输入ab的值 XXX.php?a=2&b=2
    $a = $_GET["a"];
    $b = $_GET["b"];
    echo "长方形周长为".(($a+$b)*2)."<br>";
    echo "长方形面积为".$a*$b."<br>";
?>