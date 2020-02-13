<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
	  <link rel="shortcut icon" href="../logo/logo2.png">
	  <link href="../css/bootstrap.css" rel="stylesheet">
	  <link href="../css/font-awesome.min.css" rel="stylesheet">  
	  <link href="../css/search.css" rel="stylesheet">
  </head>
  <style>
	.menu-isi{
		position: relative;
		background-color: #EEEEEF;
		top: 108px;
	}
		
  </style>
  <body class="menu-isi">
  
	  <?php
		  include("../index3.php");
	  ?>
  
  <br> <br>
  
<div class="row">
	 <div class="col-md-4"></div>
	 <div class="col-md-4">
	 
	
	 
		<div class="panel-primary">
		   <div class="panel-heading">
		   <?php 
		   
				echo $_SESSION['pesan'];
		   ?>
			   <div class="panel-primary">
				   <div class="panel-heading">
					   <br>
					   <h2>Login Admin</h2>
					   <br>


			   <form class="form-horizontal" action="login_system.php" method="POST">
				   <div class="form-group">
					   <label for="inputEmail3" class="col-sm-2 control-label">User</label>
					   <div class="col-sm-10">
						   <input type="text" class="form-control" id="user" name="user" placeholder="Username">
					   </div>
				   </div>
				   <div class="form-group">
					   <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					   <div class="col-sm-10">
						   <input type="password" class="form-control" id="password" name="password" placeholder="Password">
					   </div>
				   </div>
				   <div class="form-group">
					   <div class="col-sm-offset-2 col-sm-10">
						   <button type="submit" class="btn btn-default" name="sign_in">Sign in</button>
					   </div>
				   </div>
			   </form>
					
					
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
</div>
	
	
	<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
