<?php 
session_start();
	if (empty($_SESSION['useradmin']) AND empty ($_SESSION['passadmin'])){
	    
	}else{
	

	
 include "../koneksi.php";
	   $sql = mysql_query("select * from admin where username = '$_SESSION[useradmin]'");
	   $r = mysql_fetch_array($sql);
?>
<?php
include "koneksi.php";
//get the value from form update

	$username	= $_POST['username'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
//query for update data in database
 $query = "UPDATE admin SET username = '$username' ,password = '$password' ,nama = '$nama' " ;
 $hasil = mysql_query($query);
 //see the result
   if ($query) {
 		echo"<script language='javascript'>alert('Data Berhasil Dirubah:)')</script>";
  		echo"<script language='javascript'>window.location = 'rda.php'</script>";		
	}else{
	echo"gagal";
}
?>
<?php
}
?>