<?php
    define("PI",3.1415926);
    class Circle
    {
        public function zhouchang($radius)
        {
            echo "周长为：".$radius * 2 * PI;
            echo "<br>";
        }
        public function mianji($radius)
        {
            echo "面积为：".$radius ** 2 * PI;
            echo "<br>";
        }
    }
    $a = new Circle;
    $b = new Circle;
    $a->zhouchang(3);
    $a->mianji(3);
    $b->zhouchang(6);
    $b->mianji(6);
?>