<?php
    $array1 = array('red'=>'红','orange'=>'橙','yellow'=>'黄','green'=>'绿','bule'=>'蓝','indigo'=>'靛','purple'=>'紫');
    $array2 = array('red','orange','yellow','green','bule','indigo','purple');
     print_r($array1);
     echo "<br>";
     print_r($array2);
     echo "<br>";
     $array3 = array_flip($array1);
     print_r($array3);
     echo "<br>";
     print_r($array3['绿']);
     echo "<br>";
    ?>