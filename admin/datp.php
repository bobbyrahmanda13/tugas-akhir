<?php 
session_start();
	if (empty($_SESSION['useradmin']) AND empty ($_SESSION['passadmin'])){
	    
	}else{
	

	
 include "../koneksi.php";
	   $sql = mysql_query("select * from admin where username = '$_SESSION[useradmin]'");
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
<table width="91%" align="center">
  <tr>
    <td height="176"><fieldset>
    <legend> </legend><img src="../img/b.PNG" width="100%" height="100%" />
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
        <td width="78%" valign="top"><div align="center">
          <p><strong>SELAMAT DATANG</strong></p>
          <p align="center"><strong>Data Penyakit</strong></p>
          <table border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="38" valign="top">                <div align="center"><strong>No</strong> </div></td>
              <td width="123" valign="top"><div align="center"><strong>Kode Penyakit</strong></div></td>
              <td width="246" valign="top"><div align="center"><strong>Jenis Penyakit</strong></div></td>
            </tr>
            <tr>
              <td width="38" valign="top"><p align="center">1</p></td>
              <td width="123" valign="top"><p align="center">P01</p></td>
              <td width="246" valign="top"><p align="center">Skoliosis</p></td>
            </tr>
            <tr>
              <td width="38" valign="top"><p align="center">2</p></td>
              <td width="123" valign="top"><p align="center">P02</p></td>
              <td width="246" valign="top"><p align="center">Osteomyelitis</p></td>
            </tr>
            <tr>
              <td width="38" valign="top"><p align="center">3</p></td>
              <td width="123" valign="top"><p align="center">P03</p></td>
              <td width="246" valign="top"><p align="center">Osteoporosis</p></td>
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