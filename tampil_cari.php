<style>
	a{
	color: #337ab7;
	text-decoration: none;
	margin-top: 0.1em;
	}

	a:hover,
	a:focus {
	color: #C7C7C8;
	//text-decoration: underline;
	}
</style>

<?php
	include 'koneksi.php';
	include 'timeago.php';
	
	$cari = $_POST['cari'];
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$sql = mysqli_query($dbConn, "select * from isi_berita where judul like '%$cari%' or isi like '%$cari%' order by id_berita DESC");
?>

	<div class='panel panel-primary'>
		<div class='panel panel-heading'>
			Mencari : <?php echo $cari; ?>
		</div>
	</div>
	
	<br><hr>

	<?php
	if(mysqli_num_rows($sql)==0){
			echo "Data Tidak Ada";
	}else{
			while($tampil=mysqli_fetch_array($sql)){
				
	?>
			
			
			<?php
				echo "<p class='font'>";
				echo $tampil['judul']."<br>";
				echo "</p>";
				
				//echo $tampil['tanggal']."<br>";
				echo timeAgo($tampil['tanggal']);
				echo " ago ";
				echo "<br>";
				
				$data = substr($tampil['isi'],0,100);
				echo "$data";
				echo "<br>";
				echo "<a href='index.php?menu=detail_cari&id=$tampil[id_berita]'>Detail</a><br><hr>"; ?>					
					
					
<?php 
			}
	}
	
 ?>