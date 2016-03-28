<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
</div>
<?php
include"koneksi.php";
$id=$_GET[id];
$ubah="SELECT * FROM users WHERE id='$id'";
$qry=mysql_query($ubah)or die(mysql_error());
$data=mysql_fetch_array($qry);;
?>
<div id="admin">
<br />
<br />
<br />
<form id="form1" name="form1" method="post" action="update.php">
  <table  align="center"  background="image/t.gif" width="264" border="0">
  <tr>
  <td colspan="2" align="center"><h1>Update</h1> </td>
  </tr>
      <tr>
        <td width="79">Nama </td>
        <td width="175"><label for="username"></label>
        <input name="username" type="text" id="username" value="<?php echo $data[username]; ?>" /></tld>
        <input name="id" type="hidden" id="id" value="<? echo $data[id]; ?>" />
    </tr>
      <tr>
        <td>Email</td>
        <td><input name="email" type="text" id="email" value="<? echo $data[email]; ?>"/></td>
      </tr>
      <tr>
        <td>Telp</td>
        <td><input name="tlp" type="tlp" id="tlp" value="<? echo $data[tlp]; ?>"/></td>
      </tr>
      <tr>
        <td>company</td>
        <td><input name="company" type="text" id="company" value="<? echo $data[company]; ?>" /></td>
      </tr>
      <tr>  
<td colspan="2" align="center"><button style="background: url(image/t.gif); width:100px;"><h4>Ubah</h4></button></td>
</tr>
    </table>
</form>
<br />
<br />
<br />
</div>
<div id="d">
</div>
</body>
</html>