<?php 
include"inc.koneksi.php";
$idhapus= $_GET['idhapus'];
if(empty ($idhapus) ) {
	echo"Data yang di hapus belum ada";
}
else {
	$sql_hapus="DELETE FROM news WHERE id_news='$idhapus'";
	mysql_query($sql_hapus, $koneksi)
	or die ("Gagal Perintah Hapus".mysql_error());
	echo "Penghapusan data berhasil";
	
	include"newstampil.php";
	exit;
}
?>