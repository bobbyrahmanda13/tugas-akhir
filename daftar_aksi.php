<?php
include('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$usia = $_POST['usia'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$tanggal=date("Y/m/d h:i:s");
$cek_username=mysql_num_rows(mysql_query ("SELECT username FROM pasien WHERE username='$_POST[username]'"));
// Kalau username sudah ada yang pakai
if ($cek_username > 0){

echo"<a href=pendaftaran.php>Username sudah diguankan. Ulangi lagi</a>";

}else{
$query = mysql_query("insert into pasien values('','$username','$password','$nama','$jk','$usia','$telp','$email','$alamat','$tanggal')") or die(mysql_error());

}

if ($query) {
	header('location:login.php?message=success');
	
}
?>
