<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>AJAX Example2</title>
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
//单击【查询】按钮触发run()函数
function run()
{
	XMLHttp=GetXmlHttpObject();
	var XH=document.getElementById("XH").value;		//得到“学号”文本框中输入的值
	var XM=document.getElementById("XM").value;		//得到“姓名”文本框中输入的值
	var url="EX11_2_process.php";					//服务器端在EX11_2_process.php中处理
	var poststr="XH="+XH+"&XM="+XM; 				//url地址，以POST方式传递
	XMLHttp.open("POST",url,true);    				//以POST方式打开XMLHTTP对象	
	XMLHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");	//设置头信息
	XMLHttp.send(poststr);       					//向服务器发送HTTP请求
	XMLHttp.onreadystatechange = function()			//定义响应处理函数
		{
			if (XMLHttp.readyState==4&&XMLHttp.status==200) 
			{ 	
				//如果“学号”文本框内容为空则提示“学号未填”
				if(XH=="")					
				{
					window.alert("学号未填");
				}
				else
				{
					//如果接收到的字符串为“1”表示学号已存在
					if(XMLHttp.responseText=="1")	
					{
						//设置id为“txthimt”的标记要显示的信息
						document.getElementById("txthint").innerHTML="学号已存在";
					}
					//如果接收到的字符串为“0”表示学号不存在
					else if(XMLHttp.responseText=="0")						
					{
						document.getElementById("txthint").innerHTML="学号未被使用";
					}
				}
			}
		}
}
</script>
</head>
<body>
<form>
<table bgcolor="#CCCCCC" width="280" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>
	<td width="90">学号:</td>
	<td>
		<input type="text" name="XH" size="15">
		<input type="button" name="select" value="检测" onclick="run();">
	</td>
</tr>
<tr>
	<td bgcolor="#CCCCCC" width="90">姓名:</td>
	<td><input name="XM" type="text" size="15"></td>
</tr>
<tr>
	<td>性别:</td>
	<td>
		<input type="radio" name="XB" value="1">男
		<input type="radio" name="XB" value="0">女
	</td>
</tr>
<tr>
	<td align="center" colspan="2">
		<input type="submit" name="cmdINSERT" value="添加">
	</td>
</tr>
</table>
</form>
<!-- 设置id为"txthint"的div标记，用于显示返回信息 -->
<font color="red"><div id="txthint" align="center"></div></font>
</body>
</html>
