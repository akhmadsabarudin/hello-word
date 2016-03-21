<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="500" border="1">
  <tr>
    <td colspan="4">ADMIN NEWS [BERITA ONLINE]</td>
  </tr>
  <tr>
    <td>TGL POSTING</td>
    <td>JUDUL BERITA</td>
    <td>HAPUS</td>
    <td>UBAH</td>
  </tr>
  <?php
  include "inc.koneksi.php";
  $sql_news="SELECT id_news,judul,date FROM news ORDER BY id_news";
  $qry_news=mysql_query($sql_news, $koneksi)or die("gagal menampilkan".mysql_error());
  while($hsl_news=mysql_fetch_array($qry_news)){
	  $tgl=substr($hsl_news['date'],8,2);
	  $bln=substr($hsl_news['date'],5,2);
	  $thn=substr($hsl_news['date'],0,4);
	  ?>
      <tr>
      <td> <? echo "$tgl-$bln-$thn"; ?> </td>
      <td> <? echo "$hsl_news[judul]"; ?></td>
      <td align="center"><a href="newshapus.php?idhapus=<?php echo"$hsl_news[id_news]"; ?>" target="_self">Hapus</a></td>
      <td align="center"><a href="newsfmed.php?idubah=<?php echo"$hsl_news[id_news]"; ?>" target="_self">Ubah</a></td>
 </tr>
 <?php
  }
  ?>
</table>
  <a href="news.php">Lihat Berita</a>
</body>
</html>