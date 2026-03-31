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
        <td width="78%" valign="top"><div align="center">
          <p><strong>SELAMAT DATANG, INI ADALAH HALAMAN RIWAYAT KONSULTASI ANDA</strong></p>
          <table width="95%" border="2">
            <tr>
              <td width="13%" bgcolor="#F1D38B"><div align="center"><strong>NO</strong></div></td>
              <td width="28%" bgcolor="#F1D38B"><div align="center"><strong>Diagnosis</strong></div></td>
              <td width="14%" bgcolor="#F1D38B"><div align="center"><strong>Nilai</strong></div></td>
              <td width="23%" bgcolor="#F1D38B"><div align="center"><strong>Tanggal</strong></div></td>
              </tr><?php 
	include('koneksi.php');
	$query = mysql_query("select * from defuzifikasi natural join kriteria where username = '$_SESSION[userpasien]' order by id desc");
	$no = 1;
	while ($hasil = mysql_fetch_array($query)){
	?>
            <tr>
              <td valign="top"><div align="center"><strong><?php echo"$no"; ?></strong></div></td>
              <td valign="top"><div align="center"><?php echo "$hasil[diagnosa]";?>  <?php echo "$hasil[jenis]";?></div></td>
              <td valign="top"><div align="center"><?php echo "$hasil[nilai]";?></div></td>
              <td valign="top"><div align="center"><?php echo "$hasil[tanggal]";?></div></td>
              </tr><?php 
		$no++;
	} 
	?>
          </table>
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