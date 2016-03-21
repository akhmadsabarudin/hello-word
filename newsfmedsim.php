<?php
include "inc.koneksi.php";
$id=$_POST['id'];
$judul=$_POST['judul'];
$berita=$_POST['berita'];
$pengirim=$_POST['pengirim'];

if(empty ($id) ){
	echo"Kode id yang di ubah kosong";
}
else if(empty ($judul) ){
	echo"data judul masih kosong";
}
else if(empty ($berita) ) {
	echo"data berita masih kosong";
}
else if(empty ($pengirim) ) {
	echo"data pengirim masih kosong";
}
else {
	$sql_ubah="UPDATE news SET
	judul  ='$judul'
	berita='$berita'
	pengirim='$pengirim'
	date='".date('y-m-d')."'
	WHERE id_news='$id'";
	mysql_query($sql_ubah, $koneksi)
	or die ("Perubahan Data Gagal".mysql_error());
	
	echo"Data berhasil Diubah";
	include"newstampil.php";
	exit;
}
?>