<?php
    define("PI",3.1415926);
    class Circle # 使用函数传参设置参数
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
    class Circle1 # 使用this指针设置参数
    {
        public $radius;
        public function zhouchang()
        {
            echo "周长为：".$this->radius * 2 * PI;
            echo "<br>";
        }
        public function mianji()
        {
            echo "面积为：".$this->radius ** 2 * PI;
            echo "<br>";
        }
    }
    $a = new Circle;
    $b = new Circle;
    $a->zhouchang(3);
    $a->mianji(3);
    $b->zhouchang(6);
    $b->mianji(6);
    echo "使用this指针*****************************************";
    echo "<br>";
    $a1 = new Circle1;
    $b1 = new Circle1;
    $a1->radius = 3;
    $b1->radius = 6;
    $a1->zhouchang();
    $a1->mianji();
    $b1->zhouchang();
    $b1->mianji();
?>