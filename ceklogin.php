<?php
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
