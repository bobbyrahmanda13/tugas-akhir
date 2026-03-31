<?php 
include('koneksi.php');

$id = $_GET['id'];

$query = mysql_query("delete from defuzifikasi where id='$id'") or die(mysql_error());
$query = mysql_query("delete from kriteria where id='$id'") or die(mysql_error());


if ($query) {
	header('location:diag.php?message=delete');
}
?>