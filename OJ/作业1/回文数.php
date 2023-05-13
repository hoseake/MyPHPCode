<?php
    for($i = 1000;$i <= 9999;$i++)
    {
        $frontStr = substr("$i",0,2); //0是开始位，是下标，2是长度，非下标
        $behindStr = strrev(substr("$i",2,2));
        if($frontStr == $behindStr)
        {
            echo "$i";
            echo "<br>";
        }
    }
    ?>