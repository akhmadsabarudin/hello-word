<?php
include"koneksi.php";
			
$id=$_POST[id];
$name=$_POST[username];
$telp=$_POST[tlp];
$email=$_POST[email];
$company=$_POST[company];
$tgl=date("y-m-d");
$hasil="Thaks for join";

function CekEmail($email)  {
	if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+
		(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
		{
			return TRUE;
		}
		else {
			return FALSE;
		}
}			
$from= "from: $email ";
$kirim=mail("akhmadsabarudin@ymail.com", $nama, $telp, $company, $from);

$simpan="INSERT INTO users VALUES('','$name','$telp','$email','$company','$tgl')";
$cek=mysql_query($simpan)or die(mysql_error());
if($cek)
include"index.php";
?>
