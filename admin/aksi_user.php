<?php
	include '../koneksi.php';
	include '../timeago.php';
	
	
	
	$id_user = $_POST['id_user'];
	$user = $_POST['username'];
	$password = $_POST['password'];
	$hak_akses = $_POST['hak_akses'];
	
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$sql = mysqli_query ($dbConn, "select * from user where username='$user'");

	// $sql=mysqli_query("select * from user where username='$user'");
	$hasil=mysqli_fetch_array($sql);
	
	if($user != $hasil['username']){
		$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
		$insert=mysqli_query($dbConn, "insert into user set id_user='$id_user',username='$user',password='$password',hak_akses='$hak_akses'");
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