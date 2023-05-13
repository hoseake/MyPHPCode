<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <tittle>2023年3月9日</tittle>
        <br/>
    </head>
    <body>
        <a href = "https://www.baidu.com">百度一下</a>
        <br/>
        <table border = "1">
            <thead>
               <th>学号</th>
               <th>姓名</th>
               <th>班级</th>
               <tr>
            </thead>
            <tbody>
                <td>001</td><td>张三</td><td>网工20201</td><tr>
                <td>008</td><td>李四</td><td>网工20202</td><tr> 
            </tbody>
        </table>
        <form>
			<p>
				<span>姓名 ：</span>
				<input type="text" name="name" required="required"/>
			</p>
			<p>
				<span>电话 ：</span>
				<input type="tel" name="telephone" required="required"/>
			</p>
			<p>
				<input type="submit" value="提交"/>
			</p>
		</form>
        <?php
            if(isset($_GET["name"]))
            {
                echo "欢迎".$_GET["name"];
            }
            else
            {
                echo "表单未提交";
            }
        ?>
        <br/>
        <?php
            if(isset($_GET["telephone"]))
            {
                echo "您的电话号码：".$_GET["telephone"];
            }
        ?>
    </body>
</html>
