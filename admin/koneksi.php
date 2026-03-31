<?php
 
    $server = 'localhost'; //nama lokalhost
    $username = 'root'; // nama user
    $password = ''; //password
    $dbase = 'bobby_tulang'; // nama databse
 
    // query untuk koneksi ke database
    $koneksi=mysql_connect($server, $username, $password) or die (mysql_error());
 
    //query untuk koneksi ke database
    mysql_select_db($dbase) or die (mysql_error());
	?>