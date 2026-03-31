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
.style13 {color: #008CBA; font-weight: bold; font-family: "Times New Roman"; font-size: 16px; }
.style14 {	font-size: 24px;
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
          <p><strong>RUBAH DATA ADMIN</strong></p>
          </div></td>
      </tr><?php 
include('koneksi.php');
	$query = mysql_query("select * from admin ");
	$no = 1;
	$hasil = mysql_fetch_array($query);
	?>
      <tr>
        <td width="78%" valign="top"><div align="center">
          <p><strong></strong></p>
                  <table width="100%" border="2" align="right">
                    <tr>
                      <td width="78%"><div align="center" class="style14">FORM RUBAH DATA ADMIN </div>
                          <form action="rda_aksi.php" method="post">
                            <table width="89%" align="center" >
                        </form></td>
                    </tr>
                    <tr>
                      <td width="35%" height="51"><span class="style13">Username</span></td>
                      <td width="1%">:</td>
                      <td width="64%"><table width="70%">
                          <tr>
                            <td><span class="form-group">
                              <input name="username" type="text" class="form-control" id="username" value="<?php echo"$hasil[username]";?>" size="30" maxlength="30" placeholder="Username" required="" />
                            </span></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="51"><span class="style13">Nama</span></td>
                      <td>:</td>
                      <td><table width="70%">
                          <tr>
                            <td><span class="form-group">
                              <input name="nama" type="text" class="form-control" id="nama" value="<?php echo"$hasil[nama]";?>" size="30" maxlength="30" placeholder="Nama" required="" />
                            </span></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="51"><span class="style13">Password</span></td>
                      <td>:</td>
                      <td><table width="70%">
                          <tr>
                            <td><span class="form-group">
                              <input name="password" type="password" class="form-control" id="password" value="<?php echo"$hasil[password]";?>" size="30" maxlength="30" placeholder="Password" required="" />
                            </span></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td height="24">&nbsp;</td>
                      <td height="24">&nbsp;</td>
                      <td height="24"><table width="70%">
                          <tr>
                            <td><strong>
                              <input type="submit" class="btn btn-block btn-primary" value="UPDATE" />
                            </strong></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                  <p align="justify">&nbsp;</p>
        </div></td><td width="22%"><img src="../img/t.png" width="203" height="346" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
	}
?>