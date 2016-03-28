<?php
$koneksi=mysql_connect("localhost","root","")or die (mysql_error());
$cek=mysql_select_db("event", $koneksi)or die(mysql_error());
if($cek)
echo"";
else
echo"data gagal";
?>


