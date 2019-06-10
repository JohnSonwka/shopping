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
	$book_id = isset($_GET['book_id'])?$_GET['book_id']:"";
	
 ?>
					


					<!--Deleting from database -->
						<?php include("config.php"); ?>
						<?php 
							// if (isset($_POST["submit"])) {
								$sql = "DELETE FROM booking WHERE book_id = $book_id";
								if ($conn->query($sql)===TRUE) {
									echo "<script>location.replace('viewOrder.php');</script>";
								} else {
									echo "<script>alert('Error deleting file!');</script>";
									
								}
								$conn->close();

							// } 
							
						 ?>

					<!-- Deleting from database End-->



		
		
	