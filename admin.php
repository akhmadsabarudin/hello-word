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
                var password=document.getElementById('password').value;
           
                if (username=="" || password==""){
                  window.alert("maaf yang belum terisi");
 return false;
                    

                
                return true;
             }
			 
                if (username.length!=5) {
                    alert("username harus 5 karakter");
                    return false;
                }
				 if (password.length!=5) {
                    alert("password harus 5 karakter");
                    return false;
                }
			              		    

            }

        </script>
</head>

<body>

<div id="header">
</div>
<div id="admin">
<br /><br /><br /><br /><br />
<form method="post" onsubmit="return Validasi();" action="cek_login.php">
  <table width="284" background="image/t.gif" align="center" class="kecil">
    <tr>
    <td colspan="2" align="center"><h2>LOGIN</h2></td>
    </tr>
    <tr>
    <td width="102">Username</td><td width="170"><input name="username" type="text" id="username" size="10"></td></tr>
  <tr><td>Password</td><td><input name="password" type="password" id="password" size="10"></td></tr>
  <tr><td></td><td><button style="background: url(image/t.gif); width:100px;">Login</button></td></tr>
</table>
</form>
<br /><br /><br /><br /><br />
</div>
<div id="d" align="center"><div style="padding: 240px 30px 30px 30px"  class="kecil">	Copyright &copy; 2012 by Akhmad Sabarudin. All Rights Reserved.<br>
</div>
</div>
</body>
</html>
