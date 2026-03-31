<?php
	include"koneksi.php";
	$sqladmin = mysql_query("select * from admin where username ='$_POST[username]' and password='$_POST[password]'");
	$ketemu = mysql_num_rows($sqladmin);
	$radmin = mysql_fetch_array($sqladmin);
	$nama=$radmin[nama];
		if($ketemu > 0){
		session_start();
		$_SESSION['useradmin']=$radmin['username'];
		$_SESSION['passadmin']=$radmin['password'];
		echo"<script language='javascript'>alert('Welcome $nama :)')</script>";
  		echo"<script language='javascript'>window.location = 'home.php'</script>";		
	}else{
		
echo"<script language='javascript'>alert('Username Atau Password Tidak Sesuai, Silahkan Ulangi !')</script>";
  		echo"<script language='javascript'>window.location = 'index.php'</script>";	}	
?>