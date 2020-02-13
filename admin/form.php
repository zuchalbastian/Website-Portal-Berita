<?php 
	include '../koneksi.php';
	include '../timeago.php';
?>


<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="simpan_berita.php" name="isi_berita">
	<h3 align="center">Input Berita</h3>
	<br>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">ID Berita</label>
					  <div class="col-sm-6">
					  <input type="text" name="id_berita" value="<?php 
					
					
					

					$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
					$sql = mysqli_query ($dbConn, "select * from isi_berita order by id_berita desc");

					// $query = "select * from isi_berita order by id_berita desc";
					// $result = mysqli_query($query);
					
					// $row=mysqli_fetch_array($result);
					while ($data = mysqli_fetch_array($sql)){
						$id = 0;
						$id = $data['id_berita'] + 1;
					  
						echo (''.$id);
						  
						  
						  
					  ?>" readonly="readonly" />
					  </div>	  
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Kategori</label>
					  <div class="col-sm-6">
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
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Judul</label>
					  <div class="col-sm-6">
						  <input type="text" class="form-control" name="judul" placeholder="Tittle" required>
					  </div>
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Sumber</label>
					  <div class="col-sm-6">
						  <input type="text" class="form-control" name="sumber" placeholder="Sumber" required>
					  </div>
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Tanggal</label>
					  <div class="col-sm-6">
						  <input type="text" class="form-control" name="tanggal" value="<?php echo date('d-m-Y');?>"  readonly="readonly" />
					  </div>
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Deskripsi</label>
					  <div class="col-sm-6">
						  <textarea type="text" class="form-control" name="deskripsi" placeholder="Description" required></textarea>
					  </div>
				  </div> 
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Gambar</label>
					  <div class="col-sm-6">
							  <input type="file" name="gambar" >
					  </div>
				  </div>
				  <br>
				  
				  <div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" name="post_berita" class="btn btn-default">Post</button>
					  </div>
				  </div>		  
</form>
<?php } ?>


<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="aksi_kategori.php" name="kategori">
	<h3 align="center">Input Kategori</h3>
	<br>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">ID Kategori</label>
					  <div class="col-sm-6">
					  <input type="text" name="id_kategori" value="<?php 
					
					$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
					$sql = mysqli_query ($dbConn, "select * from kategori order by id_kategori desc");

					// $query = "select * from kategori order by id_kategori desc";
					// $result = mysqli_query($query);
					
					$row=mysqli_fetch_array($sql);
					
					$id = $row['id_kategori'] + 1;
					  
						  echo (''.$id);
 
					  ?>" readonly="readonly" />
					  </div>	  
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Nama</label>
					  <div class="col-sm-6">
						  <input type="text" class="form-control" name="nama_kategori" placeholder="Jenis Kategori" required>
					  </div>
				  </div>
				  <br>
				  
				  <div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" name="post_kategori" class="btn btn-default">Post</button>
					  </div>
				  </div>  
</form>




<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="aksi_user.php" name="user">
	<h3 align="center">Input User</h3>
	<br>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">ID User</label>
					  <div class="col-sm-6">
					  <input type="text" name="id_user" value="<?php 
					
					$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
					$sql = mysqli_query ($dbConn, "select * from user order by id_user desc");

					// $query = "select * from user order by id_user desc";
					// $result = mysql_query($query);
					
					$row=mysqli_fetch_array($sql);
					
					$id = $row['id_user'] + 1;
					  
						  echo (''.$id);
 
					  ?>" readonly="readonly" />
					  </div>	  
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Username</label>
					  <div class="col-sm-6">
						  <input type="text" class="form-control" name="username" placeholder="Username" required>
					  </div>
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Password</label>
					  <div class="col-sm-6">
						  <input type="password" class="form-control" name="password" placeholder="Password" required>
					  </div>
				  </div>
				  <div class="form-group">
					  <label class="col-sm-3 control-label">Hak Akses</label>
					  <div class="col-sm-6">
					  <select class="form-control" name="hak_akses">
						  <option value='hak_akses_berita'>-</option>
						  <?php 
						  $dbConn = mysqli_connect("localhost", "root", "", "newspaper");
						  $sql = mysqli_query ($dbConn, "select * from hak_akses");

						  while($hak_akses=mysqli_fetch_array($sql)){
							  echo "<option value='$hak_akses[id_hak_akses]'>$hak_akses[nama_hak_akses]</option>";
						  }
						  ?>
					  </select>
					  </div>
				 </div>
				  <br>
				  
				  <div class="form-group">
					  <div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" name="post_user" class="btn btn-default">Post</button>
					  </div>
				  </div>		  
</form>