<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Technology News</title>
	<link rel="shortcut icon" href="logo/logo2.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
  </head>
  <style>
	.bg{
		background-color:#fff;
		width: 100%;
	}
	.font{
	  font-family: DIN-Bold;
	  font-size: 1.2em ;
	}
	.font2{
	  font-family: DIN;
	}
	
  </style>

<body class="bg">

  <?php
  include("index2.php");
  include("nav.php");
  ?>
	
  <div class="row margin">
  
	<div class="col-md-1"></div>
	
		<div class="col-md-10">
		  
			  <?php
			  $menu = $_GET['menu'];
			  if($menu=="home"){
					include "headline.php";
			  }else if($menu=="detail_headline"){
					include "detail_headline.php";
			  }else if($menu=="profil"){
					include "profil.php";
			  }else if($menu=="laptop"){
					include "laptop.php";
			  }else if($menu=="detail_laptop"){
					include "detail_laptop.php";
			  }else if($menu=="handphone"){
					include "handphone.php";
			  }else if($menu=="detail_handphone"){
					include "detail_handphone.php";
			  }else if($menu=="more"){
					include "more.php";
			  }else if($menu=="detail_more"){
					include "detail_more.php";
			  }else if($menu=="camera"){
					include "camera.php";
			  }else if($menu=="detail_camera"){
					include "detail_camera.php";  
			  }else if($menu=="tampil_cari"){
					include "tampil_cari.php";
			  }else if($menu=="detail_cari"){
					include "detail_cari.php";
			  }else{
					include "headline.php";
			  }
				  
			  ?>
				
		</div>
	
	<div class="col-md-1"></div>
  </div>	
	
	<?php 
		include("footer.php");
	?>
	
	  <script src="js/jquery-1.11.1.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
</body>
</html>



