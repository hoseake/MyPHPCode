<!DOCTYPE html>
<html>
<head>
	<title>标记应用</title>
	<style type="text/css">
	p{
		text-align:center;
		font-family:"黑体";
		font-size:24px;		
	}
	</style>
</head>
<body>
	<p>HTML5页面</p>
	<?php
		$str1="PHP变量1";			//在弹出框中显示
		$str2="PHP变量2";			//在文本框中显示
		echo "<script>";
		echo "alert('".$str1."');";	//在JavaScript中使用$str1变量
		echo "</script>";
	?>
	<input type="text" id="tx" size=20><br/> <!--修改行-->
	<input type="button" name="bt" value="单击" onclick="tx.value='<?php echo $str2;?>'">
</body>
</html>