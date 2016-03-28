<? 
include"koneksi.php";
$id=$_POST[id];
$keterangan=$_POST[keterangan];
$gambar=$_FILES[gambar][name];

if(empty($gambar))
$ubah="UPDATE artikel SET keterangan='$keterangan',  gambar='$gambar' WHERE id_artikel='$id'";
else
$ubah="UPDATE artikel SET keterangan='$keterangan',  gambar='$gambar' WHERE id_artikel='$id'";
copy($_FILES[gambar][tmp_name],"job/".$gambar);
$update=mysql_query($ubah)or die(mysql_error());
if($update)
include"tampil_artikel.php";
else
echo"data gagal";
?>
 