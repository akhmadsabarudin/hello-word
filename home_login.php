<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?
if(isset($_SESSION['username']))
{
$nb_new_pm = mysql_fetch_array(mysql_query('select count(*) as nb_new_pm from users where ((user1="'.$_SESSION['userid'].'" and user1read="no") or (user2="'.$_SESSION['userid'].'" and user2read="no")) and id2="1"'));
$nb_new_pm = $nb_new_pm['nb_new_pm'];
}
?>
<?php
$req = mysql_query('select id, username, email from users');
while($dnn = mysql_fetch_array($req))
{
?>
	<tr>
    	<td><?php echo $dnn['id']; ?></td>
 
    	<td><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php
}
?>
<div id="header" align="center">
<br >
<br >
<br ></div>
<center>
<h1> Selamat Datang </h1>
<table width="263" border="1" align="center">
<tr>
<td width="88"> Login Hari Ini</td>
<td width="86"><? echo date("d m y");?></td>
</tr>
<tr>
<td>login Sebagai</td>
<td><? echo $_SESSION[namauser]; ?></td>
</tr>
<tr>
<td colspan="2">
<form id="form1" name="form1" method="post" action="logout.php">
<input type="submit" name="submit" value="logout"/></form>
</td>
</tr>
</table></center>
<div id="bawah" align="center"> </div>
</body>
</html>