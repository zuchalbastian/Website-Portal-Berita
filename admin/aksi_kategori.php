<?php
	include '../koneksi.php';
	include '../timeago.php';
	
	
	
	$id_kategori = $_POST['id_kategori'];
	$nama = $_POST['nama_kategori'];
	
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$sql = mysqli_query ($dbConn, "select * from kategori where nama_kategori='$nama'");

	// $sql=mysqli_query("select * from kategori where nama_kategori='$nama'");
	$hasil=mysqli_fetch_array($sql);
	
	if($nama != $hasil['nama_kategori']){
		$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
		$insert = mysqli_query($dbConn, "insert into kategori set id_kategori='$id_kategori',nama_kategori='$nama'");
		header ('Location:home.php?menu=table');
	}else{

?>
<script>
alert("data sudah ada");
top.location='home.php?menu=form';
</script>
<?php
	}
?>