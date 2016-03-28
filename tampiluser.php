<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="header" align="justify">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<center>
 <table align="center" background="image/11.gif" width="890">
    <td colspan="6" align="center" id="tengah"><h1>ADMIN  USER</h1></td>
    </tr>
  <tr>
    <td width="101">Nama User</td>
    <td width="106">Alamat Email</td>
    <td width="145">Nama Perusahan</td>
    <td width="146">Tanggal Bergabung</td>
    <td width="60">HAPUS</td>
    <td width="54">UBAH</td>
  </tr>
  <?php
  include "koneksi.php";
  $sql_news="SELECT id,username,email,company,tgl FROM users ORDER BY id";
  $qry_news=mysql_query($sql_news, $koneksi)or die("gagal menampilkan".mysql_error());
  while($data=mysql_fetch_array($qry_news)){
	  $tgl=substr($data['date'],8,2);
	  $bln=substr($data['date'],5,2);
	  $thn=substr($data['date'],0,4);
	  ?>
      <tr>
      <td><? echo $data[username]; ?></td>
	<td><? echo $data[email]; ?></td>
      <td> <? echo $data[company]; ?> </td>
      <td> <? echo $data[tgl]; ?></td>
      <td align="center"><a href="hapus.php?id=<? echo $data[id] ?>">hapus</a>
      <td align="center"><a href="ubah.php?id=<? echo 
$data[id] ?>">Ubah</a></td>
 </tr>
 <?php
  }
  ?>

</table>
 <div class="ui" id="d">
   <p>&nbsp;</p>
   <p>&nbsp;</p>
<p>&nbsp;</p>
 </div>
</center>

</body>
</html>