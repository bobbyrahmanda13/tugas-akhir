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
    <td><table width="99%" border="2">
      <tr>
        <td width="78%"><div align="center">
          <p><strong>SELAMAT DATANG</strong></p>
          <table width="100%">
            <tr >
              <td valign="top"><form id="form1" name="form1" method="post" action="aksi_konsul1.php" onSubmit="return validasiForm(this)">
                <table width="99%" border="1" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="26" height="40" valign="top"><div align="center"> <strong>No</strong></div></td>
                    <td width="238" valign="top"><strong>Gejala</strong></td>
                    <td width="152" valign="top"><div align="center"> <strong>Jawaban</strong></div></td>
                    <td width="86" valign="top"><div align="center"> <strong>Rentang Nilai</strong></div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>1</strong></div></td>
                    <td width="238" valign="top">Perubahan pada ukuran pinggul dan bentuknya</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="1" max="7" name="g1" id="g1" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset" required=""/>
                    </div></td>
                    <td width="86"><div align="center">1-7</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>2</strong></div></td>
                    <td width="238" valign="top">Tubuh penderita skoliosis mungkin miring ke satu    sisi</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="15" max="45" name="g2" id="g2" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">15-45</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>3</strong></div></td>
                    <td width="238" valign="top">Mengalami perubahan pada ukuran bahu</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="1" max="7" name="g3" id="g3" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">1-7</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>4</strong></div></td>
                    <td width="238" valign="top">Kesulitan bernafas</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="10" max="75" name="g4" id="g4" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">10-75</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>5</strong></div></td>
                    <td width="238" valign="top">Nyeri pada punggung</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="1" max="9" name="g5" id="g5" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">1-9</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>6</strong></div></td>
                    <td width="238" valign="top">Nyeri pada tulang </td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="1" max="9" name="g6" id="g6" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset" required=""/>
                    </div></td>
                    <td width="86"><div align="center">1-9</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>7</strong></div></td>
                    <td width="238" valign="top">Demam</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="30" max="40" name="g7" id="g7" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">30-40</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>8</strong></div></td>
                    <td width="238" valign="top">Pembengkakan pada area yang terinfeksi</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="1" max="7" name="g8" id="g8" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">1-7</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>9</strong></div></td>
                    <td width="238" valign="top">Pembengkakan kelenjar getah bening disekitar area    yang terinfeksi</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="1" max="7" name="g9" id="g9" style="width:100%;width:100%; height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">1-7</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>10</strong></div></td>
                    <td width="238" valign="top">Postur tubuh bungkuk</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="15" max="45" name="g10" id="g10"style="width:100%; height:31px;border:#0000FF;border:groove;border:outset" required=""/>
                    </div></td>
                    <td width="86"><div align="center">15-45</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>11</strong></div></td>
                    <td width="238" valign="top">Menurunnya tinggi badan</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="145" max="180" name="g11" id="g11" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset"required=""/>
                    </div></td>
                    <td width="86"><div align="center">145-180</div></td>
                  </tr>
                  <tr>
                    <td width="26" valign="top"><div align="center"><strong>12</strong></div></td>
                    <td width="238" valign="top">Keretakan tulang, sering mengalami cedera</td>
                    <td width="152" valign="top"><div align="center">
                        <input type="number" min="1" max="15" name="g12" id="g12" style="width:100%;height:31px;border:#0000FF;border:groove;border:outset" required=""/>
                    </div></td>
                    <td width="86"><div align="center">1-15</div></td>
                  </tr>
                </table>
                            
              </td>
            </tr>
          </table>
          <input type="submit" class="btn btn-block btn-primary" value="KONSULTASI" style="width:100%;height:41px;border:#0000FF;border:groove;border:outset;width:222px "/></form>
          &nbsp;</div></td>
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