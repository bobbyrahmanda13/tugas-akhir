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
.style8 {	color: #FFE9D8;
	font-weight: bold;
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
          <p><strong>HASIL DIAGNOSA PASIEN</strong></p>
          <table width="99%">
            <tr>
              <td width="7%" bgcolor="#8A4C25"><div align="center" class="style8">NO</div></td>
              <td width="15%" bgcolor="#8A4C25"><div align="center" class="style8">Username</div></td>
              <td width="22%" bgcolor="#8A4C25"><div align="center" class="style8">Diagnosa</div></td>
              <td width="22%" bgcolor="#8A4C25"><div align="center" class="style8">Nilai</div></td>
              <td width="22%" bgcolor="#8A4C25"><div align="center" class="style8">Hapus</div></td>
            </tr>
            <?php 
include('koneksi.php');
	$query = mysql_query("select * from defuzifikasi order by id desc");
	$no = 1;
	while ($hasil = mysql_fetch_array($query)){
	?>
            <tr>
              <td valign="top" bgcolor="#FFE9D8"><div align="center" class="style11"><span class="style16"><? echo "$no"; ?></span></div></td>
              <td valign="top" bgcolor="#FFE9D8" class="table table-hover success"><div align="center" class="style11"><font size="3" face="Times New Roman"><?php echo"$hasil[username]";?></font></div></td>
              <td valign="top" bgcolor="#FFE9D8"><div align="center"><font size="3" face="Times New Roman"><?php echo"$hasil[diagnosa]";?> <?php echo"$hasil[jenis]";?></font></div></td>
              <td valign="top" bgcolor="#FFE9D8"><div align="center"><font size="3" face="Times New Roman"><?php echo"$hasil[nilai]";?></font></div></td>
              <td valign="top" bgcolor="#FFE9D8"><div align="center"><a href="del_p.php?id=<?php echo $hasil['id']; ?>">Hapus</a></div></td>
            </tr>
            <?php 
		$no++;
	} 
	?>
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