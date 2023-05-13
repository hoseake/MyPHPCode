<?php
     $fd = fopen("php://stdin","r");
     while(fscanf($fd,"%d ",$a) == 1){
$x=1;
$y=1;
$res=0;
if($a==1||$a==2)
   $res=1;
for($i=3;$i<=$a;$i++)
{
    $res=($x+$y)%10007;
    $x=$y%10007;
    $y=$res%10007;
}
     }
     echo $res;
	fclose($fd);
?>
