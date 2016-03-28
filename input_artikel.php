<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form action="simpan_artikel.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="342" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td colspan="2"><div align="center"><strong>Input Artikel</strong></div></td>
    </tr>

    <tr> 
      <td>Keterangan</td>
      <td><label for="keterangan"></label>
      <textarea name="keterangan" id="keterangan" cols="30" rows="3"></textarea></td>
    </tr>
    <tr> 
      <td>Gambar</td>
      <td><input name="gambar" type="file" id="gambar"></td>
    </tr>


    <tr> 
      <td>&nbsp;</td>
      <td><input name="kirim" type="submit" id="kirim" value="Kirim">
      <input name="batal" type="reset" id="batal" value="Batal "></td>
    </tr>
  </table>
</form>
</body>
</html>
