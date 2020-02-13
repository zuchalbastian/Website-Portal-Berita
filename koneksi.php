<?php
	$server="localhost";
	$user="root";
	$password="";
	
	$nmdatabase="newspaper";
	$connection=mysqli_connect($server,$user,$password) or die 
	("ada yang salah :$php_errormsg");
	if(!$connection){
		die ('tak konek'.mysqli_error());
	}
	
	$db_select=mysqli_select_db($connection,$nmdatabase) or die 
	("terjadi kesalahan:".mysqli_error());
	
	/*
	if($db){
		echo "berhasil";
	}else{
		echo "koneksi database gagal";
	}*/




?>
