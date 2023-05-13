<?php
    $sum = 0;
    for($x = 1;$x <= 10;$x++)
    {
        $muti = 1;
        for($y = 1;$y <= $x;$y++)
        {
            $muti *= $y;
        }
        $sum += $muti;
    }
		echo $sum;
    ?>