<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>AJAX Example</title>
<script>
//AJAX初始化函数
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
function cj_query()
{
	XMLHttp=GetXmlHttpObject();				//初始化一个XMLHttpRequest对象
	//得到学号和课程名文本框中输入的值
	var XH=document.getElementById("XH").value;
	var KCM=document.getElementById("KCM").value;
	var url="EX11_1_process.php";			//服务器端在EX11_1_process.php中处理
	url=url+"?XH="+XH+"&KCM="+KCM; 			//url地址，以GET方式传递
	url=url+"&sid="+Math.random();  		//添加一个随机数，以防服务器使用缓存的文件
	XMLHttp.open("GET",url, true);    		//以GET方式通过给定的url打开XMLHTTP对象
	XMLHttp.send(null);       				//向服务器发送HTTP请求，请求内容为空
	XMLHttp.onreadystatechange = function()	//定义响应处理函数
		{
			if (XMLHttp.readyState==4&&XMLHttp.status==200) 
			{ 	
				//如果请求成功则在CJ文本框中显示EX9_1_process.php传回的信息
				document.getElementById("CJ").value=XMLHttp.responseText;
			}    
		}
}
</script>
</head>
<body>
<form action="">
学号：<input type="text" id="XH" size="12">
课程名：<input type="text" id="KCM" size="12">
<input type="button" value="查询" onclick="cj_query();"><br>
成绩：<input type="text" id="CJ" size="12">
</form>
</body>
</html>
