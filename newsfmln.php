<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
      <td width="321">&nbsp;</td>
    </tr>
    <tr>
      <td>Judul Berita</td>
      <td><label for="judul"></label>
      <input name="judul" type="text" id="judul" size="50" maxlength="100" /></td>
    </tr>
    <tr>
      <td>Isi Berita</td>
      <td><label for="berita"></label>
      <textarea name="berita" id="berita" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Pengirim</td>
      <td><label for="pengirim"></label>
      <input name="pengirim" type="text" id="pengirim" size="40" maxlength="60" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="simpan" id="simpan" value="simpan" />
      <input type="reset" name="gagal" id="gagal" value="gagal" /></td>
    </tr>
  </table>
</form>
</body>
</html>