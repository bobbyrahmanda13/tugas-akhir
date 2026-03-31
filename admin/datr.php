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
          <p align="center"><strong>Relasi Gejala dan Penyakit</strong></p>
          <table border="1" cellspacing="0" cellpadding="0">
            <tr>
              <td width="47" valign="top"><div align="center"><strong>No</strong> </div></td>
              <td width="104" valign="top"><div align="center"><strong>Kode Gejala</strong></div></td>
              <td width="104" valign="top"><div align="center"><strong>P1</strong></div></td>
              <td width="104" valign="top"><div align="center"><strong>P2</strong></div></td>
              <td width="104" valign="top"><div align="center"><strong>P3</strong></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">1</div></td>
              <td width="104" valign="top"><div align="center">G001</div></td>
              <td width="104" valign="top"><div align="center">*</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">2</div></td>
              <td width="104" valign="top"><div align="center">G002</div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">3</div></td>
              <td width="104" valign="top"><div align="center">G003</div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">4</div></td>
              <td width="104" valign="top"><div align="center">G004</div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">5</div></td>
              <td width="104" valign="top"><div align="center">G005</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">6</div></td>
              <td width="104" valign="top"><div align="center">G006</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">7</div></td>
              <td width="104" valign="top"><div align="center">G007</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">8</div></td>
              <td width="104" valign="top"><div align="center">G008</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">9</div></td>
              <td width="104" valign="top"><div align="center">G009</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
              <td width="104" valign="top"><div align="center"></div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">10</div></td>
              <td width="104" valign="top"><div align="center">G010</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">11</div></td>
              <td width="104" valign="top"><div align="center">G011</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
            </tr>
            <tr>
              <td width="47" valign="top"><div align="center">12</div></td>
              <td width="104" valign="top"><div align="center">G012</div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center"></div></td>
              <td width="104" valign="top"><div align="center">* </div></td>
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