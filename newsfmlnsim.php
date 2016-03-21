<?php
include "inc.koneksi.php";

$judul=$_POST['judul'];
$berita=$_POST['berita'];
$pengirim=$_POST['pengirim'];

if(empty ($judul) ){
	echo"data judul masih kosong";
}
else if(empty ($berita) ) {
	echo"data berita masih kosong";
}
else if(empty ($pengirim) ) {
	echo"data pengirim masih kosong";
}
else {
	$sql_simpan="INSERT INTO news (id_news,judul,berita,pengirim,dibaca,date)
	VALUES (' ','$judul','$berita','$pengirim','0','".date('y-m-d')."')";
	mysql_query($sql_simpan, $koneksi)
	or die("Memasukan Berita Gagal".mysql_error());
	
	echo"Data berhasil disimpan";
	include "newstampil.php";
}
?>
	