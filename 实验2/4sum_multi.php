<form>
    <input type="number" name="n" required="required" placeholder="输入n的值"/>
</form>
<?php
    if(isset($_GET["n"]) && $_GET["n"]>1)
    {
        $n = $_GET["n"];
    }
    else
    {
        echo "输入有误";
        exit();
    }
    $sum = 0;
    $product = 1;
    for($i=1;$i<=$n;$i++)
    {
        $sum += $i;
        $product *= $i;
    }
    function sumCal($n)
    {
        if($n<=0)
            return 0;
        return $n + sumCal($n-1);
    }
    function productCal($n)
    {
        if($n<=1)
            return 1;
        return $n * productCal($n-1);
    }
    echo "1+2+3+…+n的值为：".$sum ."（非递归算法）<br>";
    echo "1*2*3*…*n的值为：".$product ."（非递归算法）<br>";
    echo "1+2+3+…+n的值为：".sumCal($n) ."（递归算法）<br>";
    echo "1*2*3*…*n的值为：".productCal($n) ."（递归算法）<br>";
?>