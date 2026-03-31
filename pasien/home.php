<?php 
session_start();
	if (empty($_SESSION['userpasien']) AND empty ($_SESSION['passpasien'])){
	    
	}else{
	

	
 include "../koneksi.php";
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
-->
</style>
</head>

<body>
<table width="71%" align="center">
  <tr>
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
              <td valign="top"><p align="center" class="style1"><img src="../img/d.png" width="224" height="237" /></p>                </td>
              <td valign="top"><p align="center" class="style1">Ini merupakan halaman home user</p>
                <p align="center" class="style1">silahkan melaukan konsultasi</p>
                <p align="center" class="style1">semoga sistem ini mampu menjawab keluhan anda</p></td>
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