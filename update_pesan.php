<?php
include"koneksi.php";
$id=$_POST[id];
$nama=$_POST[nama];
$pesan=$_POST[pesan];
$email=$_POST[email];
$company=$_POST[company];
$tgl=date("y-m-d");
$update="UPDATE tamu SET nama='$nama', pesan='$pesan', email='$email', company='$company', tgl='$tgl' WHERE id='$id'";
$qry=mysql_query($update)or die(mysql_error());
if($qry)
include"tampil_pesan.php";
?>
