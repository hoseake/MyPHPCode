<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>AJAX Example3</title>
<script>
//初始化函数
function GetXmlHttpObject()
{
	var XMLHttp=null;
	try
 	{
		XMLHttp=new XMLHttpRequest();
 	}
	catch (e)
 	{
 		try
  		{
 			XMLHttp=new ActiveXObject("Msxml2.XMLHTTP");
 		}
		catch (e)
 		{
  			XMLHttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
 	}
	return XMLHttp;
}
//选择列表框中选项时触发redirec()函数
function redirec()
{
	XMLHttp=GetXmlHttpObject();
	var ZY=document.getElementById("s").value;		
	var url="EX11_3_process.php";				//服务器端在EX11_3_process.php中处理
	url=url+"?ZY="+ZY; 							//url地址，以GET方式传递
	url=url+"&sid="+Math.random();  			//添加一个随机数，以防服务器使用缓存的文件
	XMLHttp.open("GET",url,true);    			//通过GET方式打开XMLHTTP对象
	XMLHttp.send(null);       					//向服务器发送HTTP请求，请求内容为空
	XMLHttp.onreadystatechange = function()		//定义响应处理函数
		{
			if (XMLHttp.readyState==4&&XMLHttp.status==200)
			{ 	
				//在"txthint"上显示返回信息
				document.getElementById("txthint").innerHTML=XMLHttp.responseText;
			}
		}
}
</script>
</head>
<body>
<form name="frm">
<select name="s" onChange="redirec()">
	<option selected>请选择</option>
	<?php
	$conn=mysql_connect("localhost","root","");		//连接MySQL服务器
	mysql_select_db("PXSCJ",$conn);					//选择PXSCJ数据库
	mysql_query("SET NAMES gb2312");				//将字符集设为gb2312
	$sql="select distinct 专业 from XSB";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		$ZY=$row['专业'];
		echo "<option value='$ZY'>$ZY</option>";
	}
	?>
</select>
</form>
<!-- 设置id为"txthint"的div标记，用于显示返回信息 -->
<div id="txthint"></div>
</body>
</html>
