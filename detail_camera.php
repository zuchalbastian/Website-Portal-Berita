<div class="row">
	<div class="col-md-1"></div>

	<div class="col-md-6">

<?php 
	require"koneksi.php";
	include "timeago.php";
	
	$id_berita = $_GET['id'];
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$query = mysqli_query ($dbConn, "SELECT * FROM isi_berita WHERE id_berita='$id_berita'");
	$data = mysqli_fetch_array($query);

?>
	
	<h2 class='font2'><?php echo $data['judul'];?></h2> By <?php echo $data['sumber'];?> <?php echo timeAgo($data['tanggal']);?> ago
	<br><br>
	
	<?php 
	if($data['gambar']!=''){
			echo "<img src='".$data['gambar']."' width='100%'>";
	}
	
	echo "<br><br>";
?>
<font align='justify'><?php echo $data['isi'];?></font>


	</div>
	<div class="col-md-3">
		<div class="panel-info">
			<img src="iklan/1.gif" width="270px" alt="middle">
			<br><br>
			<img src="iklan/2.gif" width="270px" alt="middle">
			<br><br>
			<img src="iklan/3.gif" width="270px" alt="middle">
		</div>
		
	</div>
</div>