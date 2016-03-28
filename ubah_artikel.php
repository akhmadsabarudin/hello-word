<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
include"koneksi.php";
$id=$_GET[id];
$tampil="SELECT * FROM artikel WHERE id_artikel='$id'";
$qry=mysql_query($tampil)or die(mysql_error());
$data=mysql_fetch_array($qry);

?>
<form action="update_artikel.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="342" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td colspan="2"><div align="center"><strong>Ubah Artikel</strong></div></td>
    </tr>
    <tr> 
      <td>Keterangan</td>
      <td><input name="keterangan" type="text" id="keterangan" value="<? echo $data[keterangan]; ?>">
        <input name="id" type="hidden" id="id" value="<? echo $data[id_artikel]; ?>"></td>
    </tr>

    <tr> 
      <td>Gambar</td>
      <td><input name="gambar" type="file" id="gambar"></td>
    </tr>

    <tr> 
      <td><input name="kirim" type="submit" id="kirim" value="Kirim"></td>
      <td><input name="batal" type="reset" id="batal" value="Batal "></td>
    </tr>
  </table>
</form>
</body>
</html>
