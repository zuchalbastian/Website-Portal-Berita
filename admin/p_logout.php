<?php
session_start();
$_SESSION['ijin']=0;
$_SESSION['pesan']="Silahkan Login kembali!!!";

header("Location: index.php");
?>