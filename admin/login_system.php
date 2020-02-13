<?php
	Session_start();
	include '../koneksi.php';
	
	if(isset($_POST['sign_in'])){
	$user = $_POST['user'];
	$password = $_POST['password'];
	$dbConn = mysqli_connect("localhost", "root", "", "newspaper");
	$sql = mysqli_query($dbConn, "select * from user where username = '$user' && password = '$password'");

	//$result = mysqli_query($sql);
	$baris = mysqli_num_rows($sql);
	
	
	if($baris>=1){
		$_SESSION['ijin'] = 1;
		
		while($tampil = mysqli_fetch_array($result)){
			$user1 = $tampil['user'];
			$password1 = $tampil['password'];
		}
		
		$_SESSION['user'] = $user1;
		$_SESSION['password'] = $password1;

		//echo "berhasil login";
		header("Location: home.php");
		
	}else{
		$_SESSION['pesan']="Password atau user anda salah!!!";
		$_SESSION['ijin'] = 0;
		
		header('location:index.php');
	}
	}
?>
