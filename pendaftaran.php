<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fuzzy Logic</title>
<style type="text/css">
<!--
.style14 {	font-size: 24px;
	font-weight: bold;
}
.style13 {color: #008CBA; font-weight: bold; font-family: "Times New Roman"; font-size: 16px; }
.style4 {color: #000000}
-->
</style>
</head>

<body>
<table width="71%" align="center">
  <tr>
    <td><fieldset>
    <legend> </legend><img src="img/b.PNG" width="100%" height="121" />
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
          <form id="form1" name="form1" method="post" action="daftar_aksi.php">
            <span class="style14">FORM PENDAFTARAN PASIEN<br />
            </span>
            <table width="89%" align="center">
              <tr>
                <td height="51"><span class="style13">Username</span></td>
                <td>:</td>
                <td><table width="70%">
                  <tr>
                    <td></td>
                  </tr>
                    <tr>
                      <td><span class="form-group">
                        <input name="username" type="text" class="form-control" id="username" size="30" maxlength="30" placeholder="Username" required="" style="height:31px;border:#0000FF;border:groove;border:outset"/>
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
                        <input name="password" type="password" class="form-control" id="password" size="30" maxlength="30" placeholder="password" required="" style="height:31px;border:#0000FF;border:groove;border:outset" />
                      </span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td width="35%" height="51"><span class="style13">Nama Lengkap</span></td>
                <td width="1%">:</td>
                <td width="64%"><table width="70%">
                    <tr>
                      <td><span class="form-group">
                        <input name="nama" class="form-control" id="nama" size="30" maxlength="30" placeholder="Nama Lengkap" required="" style="height:31px;border:#0000FF;border:groove;border:outset" />
                      </span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="52"><span class="style13">Jenis Kelamin</span></td>
                <td>:</td>
                <td><table width="38%">
                    <tr>
                      <td><span class="form-group">
                        <select name="jk" class="form-control" id="jk" style="height:31px;border:#0000FF;border:groove;border:outset">
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="57"><span class="style13">Usia</span></td>
                <td>:</td>
                <td><table width="22%">
                    <tr>
                      <td><input name="usia" class="form-control" id="usia" size="3" maxlength="3" placeholder="usia" required="" style="height:31px;border:#0000FF;border:groove;border:outset"/>
                          <div align="center"></div>
                        <div align="center"></div></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="54"><span class="style13">No Telp/ Hanphone</span></td>
                <td>:</td>
                <td><table width="45%">
                    <tr>
                      <td><span class="form-group">
                        <input name="telp" class="form-control" id="telp" size="15" maxlength="12" placeholder="Nomor Hp/ Telp" required="" style="height:31px;border:#0000FF;border:groove;border:outset"/>
                      </span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="54"><span class="style13">Email</span></td>
                <td>:</td>
                <td><table width="45%">
                    <tr>
                      <td><span class="form-group">
                        <input name="email" class="form-control" id="email" placeholder="email" required=""style="height:31px;border:#0000FF;border:groove;border:outset" />
                      </span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td height="54"><span class="style13">Alamat</span></td>
                <td>:</td>
                <td><table width="45%">
                    <tr>
                      <td><span class="form-group">
                        <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" required="" style="height:31px;border:#0000FF;border:groove;border:outset"></textarea>
                      </span></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="24" colspan="3"><div align="center"><span class="inner-login style4"><strong>
                  <input type="submit" class="btn btn-block btn-primary" value="DAFTAR" style="height:41px;border:#0000FF;border:groove;border:outset;width:222px "/>
                </strong></span></div></td>
              </tr>
              <tr>
                <td></form></td>
                <td height="24" colspan="3">&nbsp;</td>
              </tr>
            </table>
            <span class="style14">            </span>
                                        </form>
          <p>&nbsp;</p>
          </div></td>
        <td width="22%"><img src="img/t.png" width="203" height="346" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
