<?php
	include '../koneksi.php';
	include '../timeago.php';
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$id_berita = $_GET['id'];
	$sql = mysqli_query ($dbConn, "select * from isi_berita where id_berita='$id_berita'");


	// include'../koneksi.php';
	// $id_berita = $_GET['id'];
	
	// mysqli_query("delete from isi_berita where id_berita = '$id_berita'") or die (mysqli_error());
	
	echo "Data sudah Di Hapus";
?>