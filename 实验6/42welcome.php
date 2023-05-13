<?php
    session_start();
    if(isset($_SESSION["username"]))
    {
        echo "欢迎".$_SESSION["username"]." !<br>";
    }
    else
    {
        echo "请先登录！<br>";
    }
    echo "<a href = 41login.php>返回登陆页面</a><br>";
    //session_unset(); //若注释，则可免账户密码进入登陆页面，使用之前的账户名
?>