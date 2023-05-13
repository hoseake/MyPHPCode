<!DOCTYPE html>
<!-- HTML5表单 -->
<form method="post" action="" enctype="multipart/form-data">
	<h2>文件上传</h2>
	<input type="file" name="picture"><br/>
	<input type="submit" name="submit" value="提交">
</form>
<!--PHP代码部分-->
<?php
	if(isset($_POST['submit']))
	{
		$filename=$_FILES['picture']['name'];				//获取上传文件的名称
		$type=$_FILES['picture']['type'];					//获取上传文件的类型
		$upfile="dir4/4fish.jpg";					//上传后文件所在的路径和文件名
		$small_upfile="dir4/4fish_small.jpg";		//上传后缩略图所在的路径和文件名
		if(!$filename)										//判断文件是否存在
		{
			echo "<script>alert('文件不存在！') </script>";
		}
		//else if($type!='image.jpg')						//判断文件是否为jpg格式
		//{
			//echo "<script>alert('文件格式不正确！') </script>";
		//}
		else
		{
			//复制上传文件并将文件保存为$upfile
			move_uploaded_file($_FILES['picture']['tmp_name'],$upfile);
			$dst_w=150;										//设定缩略图的宽
			$dst_h=150;										//设定缩略图的高
			$src_image=imagecreatefromjpeg($upfile);		//读取上传后的文件并创建图像
			$src_w=imagesx($src_image);						//获得图像的宽
			$src_h=imagesy($src_image);						//获得图像的高
			$dst_image=imagecreatetruecolor($dst_w,$dst_h);	//创建新图像
			//将图像$src_image重新定义大小并写入新的图像$dst_image中
			imagecopyresized($dst_image,$src_image,0,0,0,0,$dst_w,$dst_h,$src_w,$src_h);
			imagejpeg($dst_image,$small_upfile);			//将新图像保存为$small_upfile
			echo "文件上传成功，缩略图如下：<br/>";
			echo "<img src=$small_upfile>";					//显示图像
			imagedestroy($src_image);
			imagedestroy($dst_image);
		}
	}
?>
