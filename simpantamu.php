<?php
include"koneksi.php";
$id=$_POST[id];
$name=$_POST[nama];
$email=$_POST[email];
$pesan=$_POST[pesan];
$company=$_POST[company];
$tgl=date("y-m-d");
$hasil="has been sent succses";
$simpan="INSERT INTO tamu VALUES('','$name','$email','$pesan','$company','$tgl')";
$cek=mysql_query($simpan)or die(mysql_error());
if($cek)
include"contact.php";
?>
