<form>
    <input type="text" name="username" required="required" placeholder="输入账户名"/><br>
    <input type="password" name="psw" required="required" placeholder="输入密码"/><br>
    <input type="submit" value="登录"/><br>
</form>
<?php
    session_start();
    if(isset($_GET["username"]) && isset($_GET["psw"])){
        if(($_GET["username"] == "user555" || $_GET["username"] == "user123") && $_GET["psw"] == "123")
        {
            $_SESSION["username"] = $_GET["username"];
            $_SESSION["psw"] = $_GET["psw"];
            // echo '<input type="button" name="bt" value="跳转" onclick=window.location="42welcome.php">';
            header("Location:42welcome.php");//页面自动跳转
        }
        else
        {
            echo "<script>alert('账户或密码错误，请重新输入！')</script><br>";
        }
    }
    echo "<a href = 42welcome.php>欢迎页面</a><br>";
?>