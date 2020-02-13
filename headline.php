
<div class = "row">
	
<?php

include "koneksi.php";
include 'timeago.php';

$table = ['isi_berita'];
$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
$sql=mysqli_query ($dbConn, "select * from isi_berita order by id_berita DESC LIMIT 6");
$garis=0;

while($data = mysqli_fetch_array($sql)){
		$garis++;
		
?>	

		<div class="col-md-4">
			<table>
			<tr>
				<div class="thumbnail" valign='left'>
					<img src='<?php echo $data['gambar'];?>'/>
					<div class="caption">
						<?php
							echo "<h3 class='font2'><i>$data[judul]</h3></i>";
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
							echo "<br>";
							echo "<br><a href='index.php?menu=detail_headline&id=$data[id_berita]' class='btn btn-primary btn-sm'>Read More</a>";
						?>
					</div>
				</div>
			</tr>	
			<tr></tr>
			</table>
		</div>
<?php		

	if($garis%3==0){
		echo("</div><div class='row'>");
		
	}
		
}


?>

</div>