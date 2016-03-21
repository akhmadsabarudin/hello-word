<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td {
	color:#9393FF;
}
</style>
</head>

<body>
  <table width="500" border="0" cellspacing="1" cellpadding="4">
    <tr>
    <td height="33" bgcolor="#999933">
    <font size="5">HOT NEWS</td>
    </tr>
    <tr>
      <td height="120" bgcolor="#CCCCCC">
     <?php
	 include"inc.koneksi.php";
	 $sql_news= "SELECT * from news ORDER BY date DESC limit 10";
	 $qry_news=mysql_query($sql_news) or die ("gagal query tampil");
	 while($data_news=mysql_fetch_array($qry_news)){
		 $berita=$data_news['berita'];
		 $cuplikan= substr($berita,0,strpos($berita, chr(10)));
		 $tgl=substr($data_news['date'],8,2);
		 $bln=substr($data_news['date'],5,2);
		 $thn=substr($data_news['date'],0,4);
		 ?>

         <br><b><font size="4">
         [<a href="news_detail.php?idshow=<? echo $data_news['id_news']; ?>">
         <?php echo $data_news['judul']; ?></a> ]</font></b><br>
         <?php echo $cuplikan; ?>
         posted by:<b><?php echo $data_news['pengirim'];?></b>
         tanggal:<b><?php echo $tgl."-".$blm."-".$thn; ?></b>
         Dibaca:<b><?php echo $data_news['dibaca']; ?></b>
         kali<br>
         <?php
	 }
	 ?> 
   </td>
    </tr>
  </table>
  <a href="newsfmln.php">Input Berita Terkini</a>>
   
</body>
</html>