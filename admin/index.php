<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Designhut.com</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	
</head>

<body>
		<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<div class="container-fluid" style="";>
		<header style="">
			<div class="header_area full_width">
				<nav class="menu">
					<h1 class="text-center" style="color:#fff;">Online Shopping Management</h1> 
					
				</nav>
			</div>
		</header>
		
	</div> <!-- container fluid end -->

	<br>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Admin Login</h2>
					
				    
				<!-- </article>
			</section> -->
		<div class="col-md-12">
			<div class="col-md-4" style="padding-left:45px;">
					
			</div>
			<div class="col-md-4" style="box-shadow: 2px 0px 2px 1px grey;padding: 15px;">
				<form method="post">
						
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="text" class="form-control" id="exampleInputEmail" placeholder="username" name="username" required="required">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword" placeholder="password" name="password" required="required">
					  </div>

					  <button type="submit" class="btn btn-default" name="submit" style="float: right;width:80px;height:35px;">Login</button> <br> <br>

					  

					  			<!-- login validation -->
					<?php 
							$_SESSION['admin']="";
							include("config.php"); 		
							if (isset($_POST["submit"])) {

								$sql= "SELECT * FROM users WHERE username= '" . $_POST["username"]."' AND password = '" . $_POST["password"]."' ";
								
								$result = $conn->query($sql);
											if ($result->num_rows > 0) {
													$_SESSION["username"]= $_POST["username"];
													$_SESSION['admin']= "yes";
												    echo "<script>location.replace('home.php');</script>";
														
												} else {
												    echo "<span style='color:red;'>Check username or password</span>";
												}
								$conn->close();		
							}
							
		 			?>
		<!-- login validation End-->
					  
				</form><br>
			</div>
		
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	







				