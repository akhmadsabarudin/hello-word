<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "inc.koneksi.php";
$idshow=$_GET['idshow'];
$sql_baca="UPDATE news SET dibaca=dibaca + 1 WHERE id_news='$idshow'";
mysql_query($sql_baca);
$sql_news= "SELECT * FROM news WHERE id_news='$idshow'";
$qry_news= mysql_query($sql_news);
$data_news=mysql_fetch_array($qry_news);
$data_judul=$data_news['judul'];
$data_berita=$data_news['berita'];
$data_pengirim=$data_news['pengirim'];
$data_date=$data_news['date'];
$data_dibaca=$data_news['dibaca'];
$tgl_ind=substr($data_date,8,2)."-".
substr($data_date,5,2)."-".
substr($data_date,0,4);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table width="95%" border="0" cellpadding="4" cellspacing="1"
bgcolor="#669999">
<tr> 
<td height="33" bgcolor="#996633">
<font size="5">Hot News</font></td>
</tr>
<tr>
<td height="120" bgcolor="ffffff"><br>
<h2>[ <? echo $data_judul; ?> ]</h2>
<?php echo $data_berita; ?> <br><br>
Posted by: <b><?php echo $data_pengirim; ?></b>
Tanggal:<b><?php echo $tgl_ind; ?></b>
Dibaca:<b><?php echo $data_dibaca; ?></b>kali<br>
</td>
</tr>
</table>
<a href="newstampil.php">Update Berita Saya</a>
</body>
</html>