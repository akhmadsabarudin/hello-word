<?php
include"koneksi.php";
$id=$_POST[id];
$nama=$_POST[username];
$tlp=$_POST[tlp];
$email=$_POST[email];
$company=$_POST[company];
$tgl=date("y-m-d");
$update="UPDATE users SET username='$nama', tlp='$tlp', email='$email', company='$company', tgl='$tgl' WHERE id='$id'";
$qry=mysql_query($update)or die(mysql_error());
if($qry)
include"tampil_user.php";
else
echo"data gagal dihapus";
?>
