<?php 
	session_start();  
?>
<?php 
if($_SESSION['admin'] == "" || $_SESSION['username'] == ""){
	header("location:index.php");
}
?>


<!-- retrive data from database to update for a specific user -->

<?php 
	$cat_id = isset($_GET['cat_id'])?$_GET['cat_id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM categories WHERE cat_id = $cat_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('home.php');</script>";
								} else {
									echo "<script>alert('Error deleting file!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	