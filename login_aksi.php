<?php
	include"koneksi.php";
	$sqlpasien = mysql_query("select * from pasien where username ='$_POST[username]' and password='$_POST[password]'");
	$ketemu = mysql_num_rows($sqlpasien);
	$rpasien = mysql_fetch_array($sqlpasien);
	$nama=$rpasien[nama];
		if($ketemu > 0){
		session_start();
		$_SESSION['userpasien']=$rpasien['username'];
		$_SESSION['passpasien']=$rpasien['password'];
		echo"<script language='javascript'>alert('Welcome $nama, silahkan melakukan konsultasi :)')</script>";
  		echo"<script language='javascript'>window.location = 'pasien/home.php'</script>";		
	}else{
		
echo"<script language='javascript'>alert('Username Atau Password Tidak Sesuai, Silahkan Ulangi !')</script>";
  		echo"<script language='javascript'>window.location = 'login.php'</script>";	}	
?>