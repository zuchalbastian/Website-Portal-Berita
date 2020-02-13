<?php 
	session_start();
	include '../koneksi.php';
	if($_SESSION['ijin'] == 0){
		header('Location: index.php');
		$_SESSION['pesan']="Anda tidak punya hak masuk!!!";
	}else{
		
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Technology News</title>
	<link rel="shortcut icon" href="../logo/logo2.png">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">  
    <link href="../css/style2.css" rel="stylesheet">  
	<link href="../css/search.css" rel="stylesheet">
	<link href="../css/footer.css" rel="stylesheet">
	<link href="../css/clndr.css" rel="stylesheet">
	  
  </head>
  <style>
  
.main-content {
	  position: relative;
	  top: 108px;
}

.cbp-spmenu-push {
	  overflow-x: hidden;
	  position: relative;
	  font-family: 'Roboto Condensed', sans-serif;
}

.cbp-spmnenu-left{
		left: 0;
}
  
.cbp-spmenu{
		position: fixed;
}
  
.cbp-spmenu-vertical{
		width: 250px;
		height: 100%;
		top: 110px;
		z-index: 1000;
		background-color: #2c659e;
		padding: 2em 0;
}

i.nav_icon {
		margin-right: 0.4em;
		font-size: 2.5em;
}
  
#wrapper {
  width: 100%;
}
  
#page-wrapper {
  padding:3em 5em 2.5em 20em;
  background-color: #EEEEEF;
  min-height: 640px;
}

li,a{
	color: #fff;
	text-decoration: none;
	font-size: 1.03em
}

li,a:hover,
li,a:focus {
	  color: #C7C7C8;
	  //text-decoration: underline;
}
  
  
  </style>
  <body class="cbp-spmenu-push">
  
  <div class="main-content">
  <?php
  include("../index3.php");
  ?>
  

  <div class="navbar-collapse">
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmnenu-left" id="cbp-spmenu-s1">
		<ul class="nav in" id="sidemenu">
			<li>
				<a href="home.php?menu=dashboard">
					<i class="fa fa-home nav_icon"></i>
					Dashboard
				</a>
			</li>
			<li>
				<a href="home.php?menu=table">
					<i class="fa fa-table nav_icon"></i>
					Tables
				</a>
			</li>
			<li>
				<a href="home.php?menu=form">
					<i class="fa fa-archive nav_icon"></i>
					Create
				</a>
			</li>
			<li>
				<a href="p_logout.php">
					<i class="fa fa-sign-out nav_icon"></i>
					Logout
				</a>
			</li>
		
		</ul>
	</nav>
  </div>
  
	  <div id="page-wrapper">

		  <?php
			  $menu = $_GET['menu'];
			  $action = isset($_GET['action']);
			  if($menu=="dashboard"){
				  include "dashboard.php";
			  }else if($menu=="table"){
				  if($action==""){
					  include "table.php";
				  }else if($action=="edit"){
					  include "edit_berita.php";
				  }else if($action=="delete"){
					  include "delete_berita.php";
				  }
			  }else if($menu=="form"){
				  include "form.php";
			  }else{
				  include "dashboard.php";
			  }
		  ?>
		 
	  </div>
  
  <?php 
	  include("../footer.php");
  ?>
  
  </div>
	  <script src="js/jquery-1.11.1.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/underscore-min.js" type="text/javascript"></script>
	  <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
	  <script src="js/clndr.js" type="text/javascript"></script>
	  <script src="js/site.js" type="text/javascript"></script>
  </body>
</html>




<?php
}
?>