<!-- booking confirmation -->
				<?php
						include('config.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO booking (code,price,size,name,address,contact)
							VALUES ('" . $_POST["code"] . "','" . $_POST["price"] . "','" . $_POST["size"] . "','" . $_POST["name"] . "', '" . $_POST["address"] . "','" . $_POST["contact"] . "')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your Order has heen Accepted!');</script>";
							} else {
							    echo "<script>alert('Sorry, Try again later')<script>";
							}

							$conn->close();
						}
				?> 
			<!-- booking confirmation -->