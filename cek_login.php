<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
session_start();

include"koneksi.php";
$username=$_POST[username];
$password=$_POST[password];
$login="SELECT * FROM admin WHERE username='$username' and password='$password'";
$cek=mysql_query($login)or die(mysql_error());
if(mysql_fetch_array($cek))
{
	session_start();
	session_register("namauser");
	session_register("passuser");
	$_SESSION[namauser]=$data[username];
	$_SESSION[passuser]=$data[password];
echo"<meta http-equiv='refresh' content='0;url=homeadmin.php'>";
}
else
{
echo"<script>";
echo"window.alert('login gagal! Username dan Password Salah');";
echo"</script>";
include"admin.php";
}
?>
</body>
</html>