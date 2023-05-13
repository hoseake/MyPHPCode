<?php

/**
 * @author phpadmin
 * @copyright 2023
 */
    include "4form_check.htm";						
	$username=$_POST['username'];
	$pwd=$_POST['PWD'];
	$phone=$_POST['PHONE'];
	$Email=$_POST['EMAIL'];
    $ID=$_POST['ID'];
	$checksuername=preg_match('/^\w{1,10}$/',$username);		
	$checkpwd=preg_match('/^\d{6,12}$/',$pwd);		
	$checkphone=preg_match('/^1\d{10}$/',$phone);		
	$checkEmail=preg_match('/^[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$Email);
    $checkID=preg_match('/^1\d{17}$/',$ID);
	if($checksuername&&$checkpwd&&$checkphone&&$checkEmail&&$checkID)
		echo "注册成功！";
	else
		echo "注册失败，格式不对";


?>