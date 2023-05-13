<?php
	$n = intval(fgets(STDIN));
	$arry = explode(" ", fgets(STDIN));
	for ($i = 0; $i<$n; $i++) {
        echo $arr[$i];
    	$arry[$i] = intval($arry[$i]);
        echo $arr[$i];
	}
	sort($arry);
	//print_r($arry);
	for($i = 0;$i<$n;$i++)
    {
        echo $arry[$i]." ";
    }
?>