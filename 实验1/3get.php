<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <tittle>Get表单</tittle>
    <br />
</head>

<body>
        <form>
                <p>
                    <span>输入a的值</span>
                    <input type="text" name="a" required="required"/>
                </p>
                <p>
                    <span>输入b的值</span>
                    <input type="text" name="b" required="required"/>
                </p>
                <p>
                    <input type="submit" value="提交"/>
                </p>
        </form>
        <?php
            if(isset($_GET["a"]))
            {
                echo "a = ".$_GET["a"];
                echo "<br/>";
            }
            else
            {
                echo "表单未提交";
            }
            if(isset($_GET["a"]))
            {
                echo "b = ".$_GET["b"];
                echo "<br/>";
            }
            else
            {
                echo "表单未提交";
            }
            if(isset($_GET["a"]))
            {
                echo "a + b = ".$_GET["a"] + $_GET["b"];
                echo "<br/>";
            }
            else
            {
                echo "表单未提交";
            }
            
            if(isset($_GET["a"]))
            {
                echo "a - b = ".$_GET["a"] - $_GET["b"];
                echo "<br/>";
            }
            else
            {
                echo "表单未提交";
            }
            
            if(isset($_GET["a"]))
            {
                echo "a * b = ".$_GET["a"] * $_GET["b"];
                echo "<br/>";
            }
            else
            {
                echo "表单未提交";
            }
            
            if(isset($_GET["a"]))
            {
                echo "a / b = ".$_GET["a"] / $_GET["b"];
                echo "<br/>";
            }
            else
            {
                echo "表单未提交";
            }
            
        ?>
    </body>

</html>