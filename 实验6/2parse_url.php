<?php
header("Content-Type:text/html;charset=utf-8");

$url1 = "https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=0&rsv_idx=1&tn=baidu&wd=PHP&rsv_pq=f3a5b445000044ab&rsv_t=b6069cTBtt6yxjj%2BrLU8hl%2BGk9ekgbFVYLIi5XZuaxt10xRMkke2uVx0cVE&rqlang=cn&rsv_enter=1&rsv_sug3=4&rsv_sug1=3&rsv_sug7=100&rsv_sug2=0&inputT=2190&rsv_sug4=3123";
//echo "<br />print parse_url(ur1):<br />";
$arr2 = parse_url($url1);
//print_r($arr2);
echo "<br />该URL中的主机名是:".$arr2["host"];
echo "<br />百度搜索内容如下:".$arr2["query"];
$arr3 = explode("&",$arr2["query"]);
//print_r(preg_grep("/wd/", $arr3));
echo "<br />wd的值为".substr(preg_grep("/wd/", $arr3)[5],3);
?>
