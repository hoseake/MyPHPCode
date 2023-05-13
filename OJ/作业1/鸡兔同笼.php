<?php
    $fd = fopen("php://stdin","r");//OJ的输入
    while(fscanf($fd,"%d %d",$head,$foot) == 2){
    }
	for($chicken = 0;$chicken <= $head;$chicken++)
    {
        for($rabbit = 0;$rabbit <= $head;$rabbit++)
        {
            if(($rabbit+$chicken==$head)&&(2*$chicken+4*$rabbit==$foot))
		        {
		            echo $chicken;
		            echo $rabbit;
		            break;
		        }
        }
    }
    ?>