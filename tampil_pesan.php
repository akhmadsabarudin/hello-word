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
<br /><br /><br />
 <table align="center"  background="image/t.gif" width="890"  class="kecil">
      <td colspan="7" align="center" id="tengah"><h1>Halaman Pesan</h1></td>
    </tr>
  <tr>
    <td width="101"><h3>Nama User</h3></td>
    <td width="106"><h3>Alamat Email</h3></td>
    <td width="145"><h3>Pesan</h3></td> 
    <td width="145"><h3>Nama Perusahaan</h3></td>
    <td width="146"><h3>Tanggal Menulis</h3></td>
    <td colspan="2" align="center"><h3>AKSI</h3></td>
    </tr>
  <?php
  include "koneksi.php";
  $sql_news="SELECT id,nama,email,pesan,company,tgl FROM tamu ORDER BY id";
  $qry_news=mysql_query($sql_news, $koneksi)or die("gagal menampilkan".mysql_error());
  while($data=mysql_fetch_array($qry_news)){
	  $tgl=substr($data['date'],8,2);
	  $bln=substr($data['date'],5,2);
	  $thn=substr($data['date'],0,4);
	  ?>
      <tr>
      <td><? echo $data[nama]; ?></td>
      <td><? echo $data[email]; ?></td>
	<td><? echo $data[pesan]; ?></td>
      <td> <? echo $data[company]; ?> </td>
      <td> <? echo $data[tgl]; ?></td>
      <td width="60" align="center"><a href="hapus_pesan.php?id=<? echo $data[id] ?>">hapus</a>
      <td width="54" align="center"><a href="ubah_pesan.php?id=<? echo $data[id] ?>">Ubah</a></td>
 </tr>
 <?php
  }
  ?>

</table>
<br /><br /><br />
</div>
</div>
<div id="d" align="center"><div style="padding: 240px 30px 30px 30px"  class="kecil">	Copyright &copy; 2012 by Akhmad Sabarudin. All Rights Reserved.<br>
</div>
 </div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>