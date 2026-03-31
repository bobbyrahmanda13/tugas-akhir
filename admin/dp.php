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
.style11 {color: #000000; }
.style12 {font-size: 12px}
.style13 {color: #000000; font-size: 12px; }
.style8 {	color: #FFE9D8;
	font-weight: bold;
}
.style14 {color: #666666}
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
          <p><strong>DAFTA PASIEN<br />
            </strong></p>
          <table width="99%" border="2">
            <tr>
              <td width="3%" bgcolor="#F1D38B"><div align="center" class="style8 style14">NO</div></td>
              <td width="10%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Username</div></td>
              <td width="9%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Password</div></td>
              <td width="15%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Nama</div></td>
              <td width="9%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Jenis Kelamin</div></td>
              <td width="5%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Usia</div></td>
              <td width="10%" bgcolor="#F1D38B"><div align="center" class="style8 style14">No HP</div></td>
              <td width="6%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Email</div></td>
              <td width="15%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Alamat</div></td>
              <td width="12%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Tanggal Pendaftaran</div></td>
              <td width="6%" bgcolor="#F1D38B"><div align="center" class="style8 style14">Aksi</div></td>
            </tr>
            <?php 
include('koneksi.php');
	$query = mysql_query("select * from pasien order by tanggal desc");
	$no = 1;
	while ($hasil = mysql_fetch_array($query)){
	?>
            <tr>
              <td bgcolor="#FFFFFF"><div align="center" class="style11 style12"><span class="style16"><?php echo "$no"; ?></span></div></td>
              <td bgcolor="#FFFFFF" class="table table-hover success"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[username]";?></font></div></td>
              <td bgcolor="#FFFFFF" class="table table-hover success"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[password]";?></font></div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[nama]";?></font></div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[jk]";?></font></div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[usia]";?></font></div></td>
              <td bgcolor="#FFFFFF" class="demo-table"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[telp]";?></font></div></td>
              <td bgcolor="#FFFFFF" class="demo-table"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[email]";?></font></div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[alamat]";?></font></div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style13"><font face="Times New Roman"><?php echo"$hasil[tanggal]";?></font></div></td>
              <td bgcolor="#FFFFFF"><div align="center" class="style12"><a href="del_user.php?id=<?php echo $hasil['id']; ?>">DEL</a></div></td>
            </tr>
            <?php 
		$no++;
	} 
	?>
          </table>
          <p><strong><br />
          </strong></p>
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