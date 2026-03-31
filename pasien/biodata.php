<?php 
session_start();
	if (empty($_SESSION['userpasien']) AND empty ($_SESSION['passpasien'])){
	    
	}else{
	

	
 include "koneksi.php";
	   $sql = mysql_query("select * from pasien where username = '$_SESSION[userpasien]'");
	   $r = mysql_fetch_array($sql);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fuzzy Logic</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
body {
	background-image: url();
}
-->
</style>
</head>

<body>
<table width="71%" align="center" background="../img/1.jpg">
  <tr><?php 
include('koneksi.php');
	$query = mysql_query("select * from pasien where username = '$_SESSION[userpasien]'");
	$hasil = mysql_fetch_array($query);
	
	?> 
    <td><fieldset>
    <legend> </legend><img src="../img/b.PNG" width="100%" height="121" />
    </fieldset>    </td>
  </tr>
  <tr>
    <td><div align="center">
      <fieldset><?php include("menu.htm"); ?>
      </fieldset>
    </div></td>
  </tr>
  <tr>
    <td><table width="100%" border="2">
      <tr>
        <td width="78%"><div align="center">
          <p><strong>SELAMAT DATANG</strong></p>
          <table width="100%">
            <tr>
              <td width="35%" valign="top"><p align="center" class="style1"><img src="../img/d.png" width="224" height="237" /></p>                </td>
              <td width="65%" valign="top"><table width="100%">
                <tr>
                  <td colspan="3"><div align="center"><span class="style2">BIODATA ANDA</span></div></td>
                  </tr>
                <tr>
                  <td width="196">Username</td>
                  <td width="38">&nbsp;</td>
                  <td width="195"><?php echo "$hasil[username]";?></td>
                  </tr>
                <tr>
                  <td>Password</td>
                  <td>&nbsp;</td>
                  <td><?php echo "$hasil[password]";?></td>
                  </tr>
                <tr>
                  <td>Nama</td>
                  <td>&nbsp;</td>
                  <td width="195"><?php echo "$hasil[nama]";?></td>
                  </tr>
                <tr>
                  <td>JK</td>
                  <td>&nbsp;</td>
                  <td><?php echo "$hasil[jk]";?></td>
                  </tr>
                <tr>
                  <td>Usia</td>
                  <td>&nbsp;</td>
                  <td><?php echo "$hasil[usia]";?></td>
                  </tr>
                <tr>
                  <td>Telp</td>
                  <td>&nbsp;</td>
                  <td><?php echo "$hasil[telp]";?></td>
                  </tr>
                <tr>
                  <td>Email</td>
                  <td>&nbsp;</td>
                  <td><?php echo "$hasil[email]";?></td>
                  </tr>
                <tr>
                  <td>Alamat</td>
                  <td>&nbsp;</td>
                  <td><?php echo "$hasil[alamat]";?></td>
                  </tr>
                <tr>
                  <td>Tanggal Mendaftar</td>
                  <td>&nbsp;</td>
                  <td><?php echo "$hasil[tanggal]";?></td>
                  </tr>
              </table>              
                </td>
            </tr>
          </table>
          <p align="justify">&nbsp;</p>
        </div></td>
        <td width="22%"><img src="../img/t.png" width="203" height="346" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
	}
?>