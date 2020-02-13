<style>
tr{
		padding-top: 20px;
		padding-bottom: 20px;
}
</style>
<br/>
<?php 
	include '../koneksi.php';
	include '../timeago.php';
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$id_berita = $_GET['id'];
	$sql = mysqli_query ($dbConn, "select * from isi_berita where id_berita='$id_berita'");
	$data = mysqli_fetch_array($sql)

	// require"../koneksi.php";
	// $id_berita = $_GET['id'];
	// $query = mysql_query("SELECT * FROM isi_berita WHERE id_berita='$id_berita'");
	// $data = mysql_fetch_array($query);
?>

<?php 
	if(isset($_POST['editberita'])){
			require "../koneksi.php";
			$namafile_tmp = $_FILES['gambar']['tmp_name'];
			if($namafile_tmp){
					$namafile = $_FILES['gambar']['name'];
					copy($namafile_tmp,"../img/{$namafile}");
					unlink($namafile_tmp);
			}
			
			$judul = addslashes($_POST['judul']);
			$sumber = addslashes($_POST['sumber']);
			$isi = addslashes($_POST['isi']);
			$kategori = $_POST['kategori'];
			if($namafile_tmp){
					mysql_query(" UPDATE isi_berita set judul='$judul',sumber='$sumber',isi='$isi',id_kategori='$kategori',gambar='$namafile' WHERE id_berita='".$_GET['id']."' ");
			}else{
					mysql_query(" UPDATE isi_berita set judul='$judul',sumber='$sumber',isi='$isi',id_kategori='$kategori' WHERE id_berita='".$_GET['id']."' ");
			}
			echo "Berita Berhasil Di Edit";
	}
?>
<form method="POST" action="" enctype="multipart/form-data">
	<h3 align="center">Edit Berita</h3>
	<br>
			<table>
				<tr>
					<td>Judul</td>
					<td>
						<div class="col-md-12">
							<input type="text" class="form-control" name="judul" value="<?php echo $data['judul'];?>" required />
						</div>
					</td>
				</tr>
				<tr>
					<td>Sumber</td>
					<td>
						<div class="col-md-12">
							<input type="text" class="form-control" name="sumber" value="<?php echo $data['sumber'];?>" required />
						</div>
					</td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td>
						<div class="col-md-12">
							<input type="file" name="gambar" />
						</div>
					</td>
				</tr>
				<tr>
					<td>Isi</td>
					<td>
						<div class="col-md-12">
							<textarea type="file" class="form-control" name="isi" required><?php echo $data['isi']; ?></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td>
						<div class="col-md-12">
							<select class="form-control" name="kategori">
								<option value='kategori_berita'>-</option>
								<?php 
									$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
									$sql = mysqli_query ($dbConn, "select * from kategori");

									while($kategori=mysqli_fetch_array($sql)){
										echo "<option value='$kategori[id_kategori]'>$kategori[nama_kategori]</option>";
									}
								?>
							</select>
						</div>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						&nbsp;&nbsp;<input type="submit" name="editberita" value="OK" />
					</td>
				</tr>
			</table>
</form>

