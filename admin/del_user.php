<?php 
include('koneksi.php');

$id = $_GET['id'];

$query = mysql_query("delete from pasien where id='$id'") or die(mysql_error());


if ($query) {
	header('location:dp.php?message=delete');
}
?>