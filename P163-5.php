<?php
    function pt($name,$edg,$gender)
    {
        echo "<table border=2><tr><td>姓名</td><td>$name</td></tr>
              <tr><td>年龄</td><td>$edg</td></tr>
              <tr><td>性别</td><td>$gender</td></tr></table>";
    }
    pt("张三",10,"男")
?>