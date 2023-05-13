<?php
    error_reporting(E_ERROR); // 屏蔽错误和警告信息
    ini_set("display_errors","Off");
    date_default_timezone_set("Asia/Shanghai");
    $now = time();
    echo "当前时间戳为：".$now;
    echo "<br>";
    $dir = mkdir("dir4",$recursive = TRUE);
    if($dir = TRUE)
    {
        echo "“dir4”目录创建成功";
        echo "<br>";
    }
    $myfile = fopen("4score.csv", "r") or die("Unable to open file!");
    //echo fread($myfile,filesize("4score.csv"));
    $lineNumber = 1;
    $array1 = array();
    $array_English = array();
    $array_math = array();
    $goodNumEnglish = 0;
    $goodNUmMath = 0;
    $sumEnglish = 0;
    $sumMath = 0;
    while (($raw_string = fgets($myfile)) !== false)//将csv文件按行读取成一维数组存入二维数组
    {
        $row = str_getcsv($raw_string);
        // print_r($row);
        // echo "<br>";
        array_push($array1,$row);
        $lineNumber++;
    }
    $TotalNum = count($array1) - 7;//计算人数
    //echo $TotalNum;
    //var_dump($array1);
    for($i = 1;$i <= 5;$i++)
    {
        array_push($array_English,$array1[$i][1]);//存入英语成绩
        array_push($array_math,$array1[$i][2]);//存入数学成绩
        $sumEnglish += $array1[$i][1];
        $sumMath += $array1[$i][2];
        if($array1[$i][1] >= 60)
        {
            $goodNumEnglish += 1;
        }
        if($array1[$i][2] >= 60)
        {
            $goodNUmMath += 1;
        }

    }
    // var_dump($array_English);
    // var_dump($array_math);
    $goodRateEnglish = ($goodNumEnglish/$TotalNum);
    $goodRateMath = ($goodNUmMath/$TotalNum);
    $avgEnglish = $sumEnglish/$TotalNum;
    $avgMath = $sumMath/$TotalNum;
    sort($array_English);
    sort($array_math);
    $maxEnglish = array_pop($array_English);
    $maxMath = array_pop($array_math);
    rsort($array_English);
    rsort($array_math);
    $minEnglish = array_pop($array_English);
    $minMath = array_pop($array_math);
    $array2 = $array1;
    for($i = 0;$i <= count($array2);$i++)
    {
        if($array2[$i][0] == "TotalNum")
        {
            $array2[$i][1] = $array2[$i][2] = $TotalNum;
        }
        if($array2[$i][0] == "goodNum")
        {
            $array2[$i][1] = $goodNumEnglish;
            $array2[$i][2] = $goodNUmMath;
        }
        if($array2[$i][0] == "goodRate")
        {
            $array2[$i][1] = $goodRateEnglish;
            $array2[$i][2] = $goodRateMath;
        }
        if($array2[$i][0] == "Ave")
        {
            $array2[$i][1] = $avgEnglish;
            $array2[$i][2] = $avgMath;
        }
        if($array2[$i][0] == "Max")
        {
            $array2[$i][1] = $maxEnglish;
            $array2[$i][2] = $maxMath;
        }
        if($array2[$i][0] == "Min")
        {
            $array2[$i][1] = $minEnglish;
            $array2[$i][2] = $minMath;
        }
    }
    //var_dump($array2);

    $file = fopen('dir4/4score2.csv','w') or die("Unable to write file!");
    foreach($array2 as $value)
    {
        fputcsv($file,$value);
    }
    if(fclose($file))
    {
        echo "4score2.csv文件写入完成<br>";
    }
    fclose($myfile);
    //打印文件夹下的文件
    echo "“dir4”文件夹下的文件：<br>";
    $dirHandle = opendir("dir4/");  
    while (($filename = readdir($dirHandle)) !== false)
    {  
        if ($filename != "." && $filename != "..")
        { 
            echo $filename."<br>";
        }  
    }   
    closedir($dirHandle); 
    $myfile = fopen("dir4/4score2.csv", "r") or die("Unable to open file!");
    $array3 = array();
    while (($raw_string = fgets($myfile)) !== false)//将csv文件按行读取成一维数组存入二维数组
    {
        $row = str_getcsv($raw_string);
        // print_r($row);
        // echo "<br>";
        array_push($array3,$row);
        $lineNumber++;
    }
    echo "dir4/4score2.csv最后几行文件内容如下：<br>";
    for($i = 6;$i <= count($array3);$i++)
    {
        for($j = 0;$j <= count($array3[$i]);$j++)
        {
            print_r($array3[$i][$j]." ");
        }
        echo "<br>";
    }
    fclose($myfile);
?>