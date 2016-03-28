<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../web sekolah/image/style.css" rel="stylesheet" type="text/css" />
</head>
        <script type="text/javascript">
            function Validasi(){

                var angka = "0123456789";
                var x = 0;
                var username=document.getElementById('username').value;
                var email=document.getElementById('email').value;
                var tlp=document.getElementById('tlp').value;
				var company=document.getElementById('company').value;
                if (username=="" || email=="" || tlp=="" || company ==""){
                  alert("Ada form yang belum terisi");

             }
			              

                if ((email.indexOf('@',0)==-1) || (email.indexOf('.',0)==-1)){
				alert("Email Kurang Tepat");

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

<body>
 <form method="post" onsubmit="return Validasi();" action="../event/simpanuser.php">
                    <table align="center">
                          <tr>
                            <td align="left"><p><b>Nama</b></p></td>
                            <td><p><b>:</b></p></td>
                            <td align="left"><input name="username" type="text" id="username" size="30"></td>

                        </tr>
                        <tr>
                            <td align="left"><p><b>Email</b></p></td>
                            <td><p><b>:</b></p></td>
                            <td align="left"><input name="email" type="text" id="email" size="30"></td>

                        </tr>

                        <tr>
                            <td align="left"><p><b>No Telp</b></p></td>
                            <td><p><b>:</b></p></td>
                            <td align="left"><input name="tlp" type="text" id="tlp"></td>

                        </tr>
                        <tr>
                            <td align="left"><p><b>Company</b></p></td>
                            <td><p><b>:</b></p></td>
                            <td align="left"><input name="company" type="text" id="company"></td>

                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="submit" value="Kirim"></td>
     </tr>
                </table>
                       
                </form>
</body>
</html>	
session_start();
	    if($_POST){
 $error = array();
	        if(empty($name)){
	      $error['username'] = 'Nama tidak boleh kosong';
	        }
	    if(empty($email)){
	      $error['email'] = 'Email tidak boleh kosong';
	    }
	    if(empty($telp)){
	      $error['tlp'] = 'no telp tidak boleh kosong';
	    }
	    if(empty($company)){
	      $error['company'] = 'nama perusahaan tidak boleh kosong';
	    }
	    	    if(empty($error)){
	            //prosess data
	        }else{
	        $_SESSION['error'] = $error;
	        $_SESSION['post'] = $_POST;
	        header("location: index.php");
	    }
	    }