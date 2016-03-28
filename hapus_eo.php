<?php 
include"koneksi.php";
$idhapus= $_GET['id'];
if(empty ($idhapus) ) {
	echo"Data yang di hapus belum ada";
}
else {
	$sql_hapus="DELETE FROM artikel WHERE id_artikel='$idhapus'";
	mysql_query($sql_hapus, $koneksi)
	or die ("Gagal Perintah Hapus".mysql_error());
	
	include"tampil_artikel.php";
	exit;
}