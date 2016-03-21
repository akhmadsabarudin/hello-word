<? 
$koneksi=mysql_connect("localhost","root","password")or die(mysql_error());
$sql=mysql_select_db("elepant_cmsdb", $koneksi)or die(mysql_error());
if($sql)
echo"koneksi database berhasil";
else
echo"koneksi database gagal";
?> 
