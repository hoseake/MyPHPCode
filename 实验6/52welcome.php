<?php
    if(isset($_COOKIE["username"]))
    {
        echo "欢迎".$_COOKIE["username"]." !<br>";
    }
    else
    {
        echo "请先登录！<br>";
    }
    echo "<a href = 51login.php>返回登陆页面</a><br>";
?>