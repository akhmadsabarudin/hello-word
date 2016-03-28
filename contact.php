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
                var nama=document.getElementById('nama').value;
                var email=document.getElementById('email').value;
                var pesan=document.getElementById('pesan').value;
				var company=document.getElementById('company').value;
                if (nama=="" || email=="" || pesan=="" || company ==""){
                  window.alert("Ada form yang belum terisi");
 return false;
                    

                
                return true;
             }
			              

                       if ((email.indexOf('@',0)==-1) || (email.indexOf('.',0)==-1)){
				  window.alert("Email Kurang Tepat");

				 return false;
                    

                
                return true; }

				    

        

            }

        </script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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
</head>

<body onload="MM_preloadImages('image/gambar/home-07.png','image/gambar/abt-07.png','image/gambar/cover-07.png','image/gambar/port-07.png','image/gambar/tac-07.png')">
<div class="satu" id="satu">
  
</div>
<div id="dua">
  <div style="padding: 240px 30px 30px 30px">
    <table width="200" border="0" align="center">
      <tr>
        <td><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','image/gambar/home-07.png',1)"><img src="image/gambar/hme-07.png" alt="" name="home" width="100" height="80" border="0" id="home" /></a></td>
        <td><a href="about.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('about','','image/gambar/abt-07.png',1)"><img src="image/gambar/about-07.png" alt="" name="about" width="100" height="80" border="0" id="about" /></a></td>
        <td><a href="coverage.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('coverage','','image/gambar/cover-07.png',1)"><img src="image/gambar/verage-07-07.png" alt="" name="coverage" width="100" height="80" border="0" id="coverage" /></a></td>
        <td><a href="portfolio.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('portfolio','','image/gambar/port-07.png',1)"><img src="image/gambar/folio-07.png" alt="" name="portfolio" width="100" height="80" border="0" id="portfolio" /></a></td>
        <td><a href="contact.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contact','','image/gambar/tac-07.png',1)"><img src="image/gambar/contact-07-07.png" alt="" name="contact" width="100" height="80" border="0" id="contact" /></a></td>
      </tr>
    </table>
  </div>
  
</div> 
<div id="tiga">
  <table width="100" border="0" align="center"  class="font">
    <tr>
      <td width="80"><form id="form1" name="form1" method="post" onsubmit="return Validasi();" action="simpantamu.php" >
        <table width="200" border="0" align="center" >
          <tr>
            <td colspan="2" align="center"><h3><u>Contact Us</u></h3></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input name="nama" type="text"  id="nama"  size="15" /></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input name="email" type="text" id="email"   size="15"/></td>
          </tr>
          <tr>
            <td>Pesan</td>
            <td><textarea id="pesan"   name="pesan"  cols="30" rows="3"></textarea></td>
          </tr>
          <tr>
            <td>Company</td>
            <td><input name="company" type="text" id="company"  size="15" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><button style="background: url(image/b.gif); width:100px" class="font">Sent</button></td>
          </tr>
        </table>
      </form></td>
    </tr>
  </table>
</div>
<div id="empat" class="font">
<table width="313" height="63" border="0" align="center" class="font">
<tr>
 <td width="147"><h3><?php echo"$hasil"; ?> </h3></td>
    </tr>
    <tr>
      <td><p><strong>OUR  CONTACT</strong></p>
        <ul type="disc"><li>Jl. H. Kodja IV no 14 c Beji-Kukusan</li>
          <li><u>obiexj@yahoo.co.id</u></li>
          <li><u>akhmadsabarudin@ymail.com</u></li>
          <li>0878-7795-4761</li>
          <a href="http://www.facebook.com/obiex.jdonk"><img src="image/gambar/facebook-icon.png" width="50" height="30" /></a><a href="http://twitiq.com/obiexjdonk"><img src="image/gambar/twt.png" width="50" height="30" /></a>
        </ul></td></tr>
</table>
</div>
<div id="lima" align="center"><div style="padding: 240px 30px 30px 30px" class="font">	Copyright &copy; 2012 by Akhmad Sabarudin. All Rights Reserved.<br>
</div>
</div>
</html>
