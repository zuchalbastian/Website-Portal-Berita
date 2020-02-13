<?php 
	include '../koneksi.php';
	include '../timeago.php';
?>

<table class="table table-hover">
<h3>Data Berita</h3>
	<thead>
		<td>#</td>
		<td>ID Berita</td>
		<td>ID Kategori</td>
		<td>Judul</td>
		<td>Sumber</td>
		<td>Tanggal</td>
		<td>Waktu</td>
		<td>Gambar</td>
		<td>Isi</td>
		<td>Manage</td>
	</thead>
	
	<?php 
		$noinfo = 0;

		$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
		$sql = mysqli_query ($dbConn, "select * from isi_berita order by id_berita DESC");
	
		while ($data = mysqli_fetch_array($sql)){
	
		// $query = "select * from isi_berita order by id_berita DESC";
		// $result = mysqli_query($query);
		// while($data=mysqli_fetch_array($result)){
			$noinfo++;

			
	?> 
	
		<tr>
			<td><?php echo($noinfo);?></td>
			<td><?php echo($data['id_berita']);?></td>
			<td><?php echo($data['id_kategori']);?></td>
			<td><?php echo($data['judul']);?></td>
			<td><?php echo($data['sumber']);?></td>
			<td><?php echo($data['tanggal']);?></td>
			<td><?php echo($data['waktu']);?></td>
			<td><img width='200px' height='200px' src='../<?php echo($data['gambar']);?>'></td>
			<td><?php echo($data['isi']);?></td>
			<td><a href="?menu=table&action=edit&id=<?php echo $data['id_berita']; ?>" class="btn btn-info btn-xs">Edit</a>  
				<a onclick="return confirm('Yakin ingin menghapus data ?')" href="?menu=table&action=delete&id=<?php echo $data['id_berita']; ?>" class="btn btn-info btn-xs">Delete</a>
			</td>
		</tr>
	<?php } ?>
					
</table>

<table class="table table-hover">
<h3>Data Kategori</h3>
	<thead>
		<td>#</td>
		<td>ID Kategri</td>
		<td>Nama Kategori</td>
	</thead>
	
	<?php 
		$noinfo = 0;
		
		$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
		$sql = mysqli_query ($dbConn, "select * from kategori order by id_kategori DESC");

		// $query = "select * from kategori order by id_kategori DESC";
		// $result = mysqli_query($query);
		while($data=mysqli_fetch_array($sql)){
			$noinfo++;
	?> 
	
		<tr>
			<td><?php echo($noinfo);?></td>
			<td><?php echo($data['id_kategori']);?></td>
			<td><?php echo($data['nama_kategori']);?></td>
			<td><a class="btn btn-info btn-xs">Edit</a> | <a class="btn btn-info btn-xs">Delete</a></td>
		</tr>
	<?php } ?>
</table>


<table class="table table-hover">
<h3>Data User</h3>
	<thead>
		<td>#</td>
		<td>ID User</td>
		<td>Username</td>
		<td>Password</td>
		<td>Hak Akses</td>
	</thead>
	
	<?php 
		$noinfo = 0;
	
		$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
		$sql = mysqli_query ($dbConn, "select * from user order by id_user DESC");

		// $query = "select * from user order by id_user DESC";
		// $result = mysqli_query($query);
		while($data=mysqli_fetch_array($sql)){
			$noinfo++;
	?> 
	
		<tr>
			<td><?php echo($noinfo);?></td>
			<td><?php echo($data['id_user']);?></td>
			<td><?php echo($data['username']);?></td>
			<td><?php echo($data['password']);?></td>
			<td><?php echo($data['hak_akses']);?></td>
			<td><a class="btn btn-info btn-xs">Edit</a> | <a href="delete_user" class="btn btn-info btn-xs">Delete</a></td>
		</tr>
	<?php } ?>
</table>
