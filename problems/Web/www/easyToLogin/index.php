<?php
if(isset($_POST['user'])&&isset($_POST['password'])){ //获取登陆信息
	if($_POST['user']=='nuistest'&&$_POST['password']=='nuistest'){
	setcookie("user", "bnVpc3Rlc3Q=", time()+300);
	print <<<html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Easy to Login</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:230px; height:auto; overflow:hidden;">
<div style="border-bottom:1px solid #b2b2b2; padding:0 0 10px 0; font-size: 24px;">Login is Easy for You</div><br>
当前登陆用户：nuistest<br>
所有用户： admin、nuistest<br>
flag：亲爱的Nuister，您的账户权限不足，请尝试使用更高权限的账号登录。<br><br>
<form action="index.php" method="post">
Username: <input type="text" name="user" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
Password: <input type="text" name="password" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
<input type="submit" value="登陆" style="border:none; width:80px; height:30px; line-height:30px; text-align:center; margin:10px 0; cursor:pointer;" >
</form>
</div>
</body>
<html>


html;
	exit();
	}else{
	print <<<html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Easy to Login</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:230px; height:auto; overflow:hidden;">
<div style="border-bottom:1px solid #b2b2b2; padding:0 0 10px 0; font-size: 24px;">Login is Easy for You</div><br>
登录数据错误！！！QAQ，请重试。<br>
所有用户： admin、nuistest<br>
<form action="index.php" method="post">
Username: <input type="text" name="user" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
Password: <input type="text" name="password" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
<input type="submit" value="登陆" style="border:none; width:80px; height:30px; line-height:30px; text-align:center; margin:10px 0; cursor:pointer;" >
</form>
</div>
</body>
<html>


html;
	exit();
	}
}
if(isset($_COOKIE["user"])){	//管理员
	if($_COOKIE["user"]=="YWRtaW4="){
		print <<<html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Easy to Login</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:200px; height:auto;">
当前登陆用户：admin<br><br>
dGhlIGZsYWcgaXMgZmxhZ3toa2pHR0pnZ0dHSmdnaGpIR0Zqa2poR0Z9<br>
</div>
</body>
<html>


html;

	}else{	//非管理员
		print <<<html
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Easy to Login</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:230px; height:auto; overflow:hidden;">
<div style="border-bottom:1px solid #b2b2b2; padding:0 0 10px 0; font-size: 24px;">Login is Easy for You</div><br>
当前登陆用户：{$_COOKIE["user"]}<br>
所有用户： admin、nuistest<br>
试用账号：nuistest<br>
试用密码：nuistest<br>
flag：亲爱的Nuister，您的账户权限不足，请尝试使用更高权限的账号登录。<br><br>
<form action="index.php" method="post">
Username: <input type="text" name="user" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
Password: <input type="text" name="password" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
<input type="submit" value="登陆" style="border:none; width:80px; height:30px; line-height:30px; text-align:center; margin:10px 0; cursor:pointer;" >
</form>
</div>
</body>
<html>

html;
	}
	
}else{	//未登陆
	print <<<html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Easy to Login</title>
<style>
body{ font-family: "Microsoft Yahei","Trebuchet MS",  Helvetica, sans-serif;  margin:0; padding:0; line-height:24px;  background:#fff;}

.clear{ clear:both; margin:0; padding:0; height:0; border:0; line-height:0; font-size:0;}

ul,ol,input,select,dl,dt,dd,div,table,tr,td{ margin:0; padding:0;}

ul{ list-style:none;}

input,select{ vertical-align:middle;}

img{ vertical-align:top; border:none;}

a{ text-decoration:none;  cursor:pointer; color:#000;  }

h1,h2,h3,h4,h5,h6{ margin:0; padding:0; font-size:12px; font-weight:normal;}

</style>

</head>
<body>
<div style="margin:200px auto; padding:10px; border:7px double #B2B2B2; width:230px; height:auto; overflow:hidden;">
<div style="border-bottom:1px solid #b2b2b2; padding:0 0 10px 0; font-size: 24px;">Login is Easy for You</div><br>
各位亲爱滴Nuister，flag就在网站后台，登陆后就能看到，嘻嘻。<br><br>
所有用户： admin、nuistest<br>
试用账号：nuistest<br>
试用密码：nuistest<br><br>
<form action="index.php" method="post">
Username: <input type="text" name="user" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
Password: <input type="text" name="password" style="width:200px; height:30px; line-height:30px; margin:5px 0;"><br>
<input type="submit" value="登陆" style="border:none; width:80px; height:30px; line-height:30px; text-align:center; margin:10px 0; cursor:pointer;" >
</form>
</div>
</body>
<html>


html;
}
?>