<?php 
include"koneksi.php";
$keterangan=$_POST[keterangan];
$gambar=$_FILES[gambar][name];
$simpan="INSERT INTO artikel VALUES('','$keterangan','$gambar')";
copy($_FILES[gambar][tmp_name],"job/".$gambar);
$sql=mysql_query($simpan)or die(mysql_error());
if($sql)
include"tampil_artikel.php";
else
echo"gagal tersimpan";
?>
