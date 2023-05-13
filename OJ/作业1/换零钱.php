<?php
    for($yuan1 = 1;$yuan1 <= 200;$yuan1++)
    {
        for($yuan5 = 1;$yuan5 <= 40;$yuan5++)
        {
            if($yuan1*1 + $yuan1*10*2 + $yuan5*5 == 200)
            {
                echo $yuan1 + $yuan1*10 + $yuan5;
            }
        }
    }
?>