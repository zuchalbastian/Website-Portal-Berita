<div class="row">

<?php 
	include 'koneksi.php';
	include 'timeago.php';
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$sql = mysqli_query ($dbConn, "select * from isi_berita where id_kategori=2 order by id_berita DESC");
	
	while ($data = mysqli_fetch_array($sql)){
?>

		<div class="col-md-10">
			<div class = "col-md-8">
			<br>
				<div class = "panel panel-primary">
					<!--<div class="panel panel-heading">	
					</div>-->
					
					<div class="panel panel-body">
					
						<table>
							<tr>
								<td width='41%'><img src='<?php echo $data['gambar'];?>' width='200px' height='150px'/></td>
								<td width='54%' valign='top' class="font">
									<?php
										echo "<h4 class='font2'><i>$data[judul]</h4></i>";
										echo "By ";
										echo $data['sumber'];
										echo " ";
										
										echo timeAgo($data['tanggal']);
										echo " ago ";
										
										echo "<br>";
										echo "<font valign='justify'>";
										$sub_data=substr($data['isi'],0,100);
										echo ($sub_data . "....");
										echo "</font>";
									?>
								</td>
							</tr>
							<tr>
								<td></td>
								<td align='right'>
									<?php
										echo "<br><a href='index.php?menu=detail_handphone&id=$data[id_berita]' class='btn btn-primary btn-sm'>Read More</a>";
									?>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		
<?php

	}
?>

</div>