<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <tittle>Post表单</tittle>
    <br />
</head>

<body>
        <form method="post"> <!--默认为get方式-->
                <p>
                    <span>姓名</span>
                    <input type="text" name="name" required="required"/>
                </p>
                <p>
                    <span>学号</span>
                    <input type="text" name="id" required="required"/>
                </p>
                <p>
                    <span>密码</span>
                    <input type="password" name="psw" required="required"/>
                </p>
                <p>
                    <input type="submit" value="提交"/>
                </p>
        </form>
        <?php
            if(isset($_POST["name"]) && isset($_POST["id"]) && isset($_POST["psw"]))
            {
                echo "登录信息<br>";
                echo "姓名:".$_POST["name"]."<br>";
                echo "学号:".$_POST["id"]."<br>";
                echo "密码:".$_POST["psw"]."<br>";
            }
            else
            {
                echo "表单未提交";
            }
        ?>
    </body>

</html>