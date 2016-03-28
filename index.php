<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function Validasi(){

                var angka = "0123456789";
                var x = 0;
                var username=document.getElementById('username').value;
                var email=document.getElementById('email').value;
                var tlp=document.getElementById('tlp').value;
				var company=document.getElementById('company').value;
                if (username=="" || email=="" || tlp=="" || company ==""){
                  window.alert("Ada form yang belum terisi");
 return false;
                    

                
                return true;
             
			 }
			      
	

                if ((email.indexOf('@',0)==-1) || (email.indexOf('.',0)==-1)){
				  window.alert("Email Kurang Tepat");

				 return false;
                    
                return true; }     
				                if (tlp.length!=12) {
                    alert("no telepon harus 12 karakter");
                    return false;
                }

                for (var i=0; i < tlp.length; i++) {
					digita = "" + tlp.substring(i, i+1);
          	if (angka.indexOf(digita) == "-1") {
                        window.alert("Karakter pada No Telepon yang dimasukkan salah (harus angka semua)");
                        return false;
                    }

                }
                return true;

            }

        </script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<style type="text/css">
body {
	background-image: url(image/gambar/t.gif);
}
</style>
</head>
<body onload="MM_preloadImages('image/gambar/home-07.png','image/gambar/abt-07.png','image/gambar/cover-07.png','image/gambar/port-07.png','image/gambar/tac-07.png')">
<div class="satu" id="satu">
  
</div>
<div id="dua"><div style="padding: 240px 30px 30px 30px">
<table width="200" border="0" align="center">
  <tr>
    <td><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','image/gambar/home-07.png',1)"><img src="image/gambar/hme-07.png" name="home" width="100" height="80" border="0" id="home" /></a></td>
    <td><a href="about.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('about','','image/gambar/abt-07.png',1)"><img src="image/gambar/about-07.png" name="about" width="100" height="80" border="0" id="about" /></a></td>
    <td><a href="coverage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('coverage','','image/gambar/cover-07.png',1)"><img src="image/gambar/verage-07-07.png" name="coverage" width="100" height="80" border="0" id="coverage" /></a></td>
    <td><a href="portfolio.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('portfolio','','image/gambar/port-07.png',1)"><img src="image/gambar/folio-07.png" name="portfolio" width="100" height="80" border="0" id="portfolio" /></a></td>
    <td><a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','image/gambar/tac-07.png',1)"><img src="image/gambar/contact-07-07.png" name="contact" width="100" height="80" border="0" id="contact" /></a></td>
  </tr>
</table>
</div>
</div> 
<div id="tiga">
  <div style="padding:20px 20px 20px 20px">
    <table width="663" border="0" align="center">
      <tr>
        <td width="3265" height="193" class="kecil"><h3>
          <p class="mbarfont">Misi</p>
        </h3>
          <p> Menciptakan Event yang kreatif dengan smart budget 
            Focus pada kepentingan klien dalam menyampaikan 
            Keunggulannya pada konsumen dan calon konsumen .
            Mengutamakan kualitas dan pelayanan sejak persiapan 
            Hingga pasca event. </p>
          <h3>
            <p class="font">Visi</p>
          </h3>
          <p> Menjadi jembatan Promosi diantara kosumen dan perusahaan, 
            Melalui event yang berkualitas.</p>
          
          
        <p>&nbsp; </p></td>
      </tr>
    </table>
  </div>
</div>
<div id="empat">
<br />	
	
<table width="672" border="0" align="center">
<tr>
  <td width="200"><form id="form1" name="form1" method="post"onsubmit="return Validasi();" action="simpanuser.php" >
    <table width="672" border="0" align="center"   class="font">
      <tr>
        <td width="200"><table width="200" border="0" align="center" >
          <tr>
            <td colspan="2" align="center"><h3><u>Daftar</u></h3></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input name="username" type="text" id="username" size="15" class="kecil"/></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="email" type="text" id="email" size="15" class="kecil"/></td>
          </tr>
          <tr>
            <td>no telp</td>
            <td><input name="tlp" type="text" id="tlp" size="15" class="kecil" /></td>
          </tr>
          <tr>
            <td>Company</td>
            <td><input name="company" type="text" id="company" size="15"  class="kecil"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><button style="background: url(image/b.gif); width:100px;" class="font">Daftar</button></td>
          </tr>
        </table></td>
        <td width="200" class="font"><?php echo"$hasil"; ?></td>
        <td width="138"><img src="image/gambar/Partnership.jpg" alt="" width="220" height="146" /></td>
      </tr>
    </table>
  </form></td>
</tr>
</table>
</div>
<div id="lima" align="center"><div style="padding: 240px 30px 30px 30px" class="font">	Copyright &copy; 2012 by Akhmad Sabarudin. All Rights Reserved.<br>
</div>
</div>

</body>
</html>
