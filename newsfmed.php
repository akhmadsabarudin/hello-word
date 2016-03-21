<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include"inc.koneksi.php";
$idubah=$_GET['idubah'];
$sql_news="SELECT * FROM news WHERE id_news='$idubah'";
$qry_news=mysql_query($sql_news, $koneksi) or die ("gagal menampilkan".mysql_error());
$hsl_news=mysql_fetch_array($qry_news);
$data_idnews =$hsl_news['id_news'];
$data_judul  =$hsl_news['judul'];
$data_berita =$hsl_news['berita'];
$data_pengirim=$hsl_news['pengirim'];
$data_dibaca=$hsl_news['dibaca'];
$data_date =$hsl_news['date'];
$tgl= substr("$data_date",8,2);
$bln= substr("$data_date",5,2);
$thn= substr("$data_date",0,4);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="newsfmlnsim.php">
  <table width="500" border="1">
    <tr>
      <td colspan="2" bgcolor="#00CCFF"><b>FORM MASUKAN BERITA</b> </td>
    </tr>
    <tr>
      <td width="117">&nbsp;</td>
      <td width="321"><input name="id" type="hidden" id="id" value="<?php echo "$data_idnews"; ?>" /></td>
    </tr>
    <tr>
      <td>Judul Berita</td>
      <td><label for="judul"></label>
      <input name="judul" type="text" id="judul" value="<?php echo "$data_judul"; ?>" size="50" maxlength="100" /></td>
    </tr>
    <tr>
      <td>Isi Berita</td>
      <td><label for="berita"></label>
      <textarea name="berita" id="berita" cols="45" rows="5"><?php echo"$data_berita"; ?>
      </textarea></td>
    </tr>
    <tr>
      <td>Pengirim</td>
      <td><label for="pengirim"></label>
      <input name="pengirim" type="text" id="pengirim" value="<?php echo"$data_pengirim"; ?>" size="40" maxlength="60" /></td>
    </tr>
    <tr>
      <td>Rating baca</td>
      <td><label for="baca"></label>
      <input name="baca" type="text" id="baca" value="<?php echo"$data_dibaca"; ?>" />
      kali</td>
    </tr>
    <tr>
      <td>Tanggal Posting</td>
      <td><label for="tgl"></label>
      <input name="tgl" type="text" id="tgl" value="<?php echo"$tgl-$bln-$thn"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="ubah" id="ubah" value="ubah" />
      <input type="reset" name="gagal" id="gagal" value="gagal" /></td>
    </tr>
  </table>
</form>
</body>
</html>