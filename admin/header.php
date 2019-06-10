<?php 
	session_start();  
?>
<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""){
	header("location:index.php");
}
?>
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
					<span style="font-size:14px;float:right;margin-right:35px;margin-top:10px;color:#fff;"><a href="../index.php" target="_blank">Visit Site</a></span>
					<a href="http://portfolio.developerazad.com" target="_blank"><img src="images/itsme.jpg" alt="itsme-azad" style="width:100px;height: 90px;border-radius:50%;float:right;margin-right: 40px;"></a>
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="viewOrder.php">View Order</a></li>
						<li><a href="viewFeedback.php">View Feedback</a></li>
						<li><a href="logout.php">logout</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
	</div> <!-- container fluid end -->

	<br>