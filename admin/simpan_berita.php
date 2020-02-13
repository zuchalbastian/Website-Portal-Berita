<?php 
	include '../koneksi.php';
	include '../timeago.php';

	$id_berita = $_POST['id_berita'];
	$kategori = $_POST['kategori'];
	$judul = $_POST['judul'];
	$sumber = $_POST['sumber'];
	$tgl = date ('Y-m-d');
	$des = $_POST['deskripsi'];

	$img = $_FILES['gambar']['name'];
	$gbr = "../img/".$img;

	$gbr2 = "img/".$img;
	
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$sql = mysqli_query ($dbConn, "select * from isi_berita where judul='$judul'");

	$hasil=mysqli_fetch_array($sql);
	
	if($judul != $hasil['judul']){
		$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
		$insert = mysqli_query($dbConn, "insert into isi_berita set id_berita='$id_berita',id_kategori='$kategori',judul='$judul',sumber='$sumber',tanggal='$tgl',waktu=now(),gambar='$gbr2',isi='$des'");
		header ('Location:home.php?menu=table');
		// var_dump($_POST);
		// echo json_encode("insert into isi_berita set id_berita='$id_berita',id_kategori='$kategori',judul='$judul',sumber='$sumber',tanggal='$tgl',waktu=now(),gambar='$gbr2',isi='$des'");
		// die();
	}else{

	// $query= "insert into newspaper.isi_berita(id_berita,id_kategori,judul,sumber,tanggal,waktu,gambar,isi) values ('$id_berita','$kategori','$judul','$sumber','$tgl',now(),'$gbr2','$des')";
	// $sql=mysqli_query($query);
		
	move_uploaded_file($_FILES['gambar']['tmp_name'],$gbr);
	
	}
?>
