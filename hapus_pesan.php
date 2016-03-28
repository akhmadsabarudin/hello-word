<?php 
include"koneksi.php";
$idhapus= $_GET['id'];
if(empty ($idhapus) ) {
	echo"Data yang di hapus belum ada";
}
else {
	$sql_hapus="DELETE FROM tamu WHERE id='$idhapus'";
	mysql_query($sql_hapus, $koneksi)
	or die ("Gagal Perintah Hapus".mysql_error());
	
	include"tampil_pesan.php";
	exit;
}
?>