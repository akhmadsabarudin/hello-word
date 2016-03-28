<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php session_start(); ?>

   
<div id="header">
</div>
<div class="menu"> 
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="homeadmin.php">Admin</a>    </li>
    <li><a href="tampil_user.php">User</a></li>
    <li><a href="tampil_pesan.php">Pesan</a>    </li>
    <li><a href="log_out.php">Logout</a></li>
  </ul>
</div>
<div id="admin">
<br /><br /><br /><br /><br /><br /><br /><br />
  <table width="397" border="0" align="center"  background="image/t.gif" class="kecil">
  <tr>
    <td align="center"><h1> Selamat Datang</h1></td>
  </tr>
  <tr>
    <td><?php include"input_artikel.php"; ?>
</td>
    </tr>
</table>
<br /><br /><br />
</div>
<div id="d" align="center"><div style="padding: 240px 30px 30px 30px"  class="kecil">	Copyright &copy; 2012 by Akhmad Sabarudin. All Rights Reserved.<br>
</div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>