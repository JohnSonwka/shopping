<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Easy shopping/Order</h2>
					<?php include('search.php'); ?>
				    
				<!-- </article>
			</section> -->
		<div class="col-md-12">
			<div class="col-md-4" style="padding-left:45px;">
					<?php include_once('all_cat.php'); ?>
			</div>
			<div class="col-md-6" style="box-shadow: 2px 0px 2px 1px grey;padding: 15px;">
				<form action="" method="post" id="" enctype="multipart/form-data">
						
					  <!-- View Order from database -->
						<?php include("config.php"); ?>
						<?php 
								$sql = "SELECT * FROM booking";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									echo "<table border='2' align='center' class='table table-hover'>
												<tr>
													<th>SL</th>
													<th>Name</th>
													<th>Contact</th>
													<th>Address</th>
													<th>Code</th>
													<th>Price</th>
													<th>Size</th>
													<th>Delete</th>
												</tr>";
										while($row = $result->fetch_assoc()){
													echo "<tr>";
													echo "<td>".$row['book_id']."</td>";
													echo "<td>".$row['name']."</td>";
													echo "<td>".$row['contact']."</td>";
													echo "<td>".$row['address']."</td>";
													echo "<td>".$row['code']."</td>";
													echo "<td>".$row['price']."</td>";
													echo "<td>".$row['size']."</td>";
											?>
													<td><a href="delOrder.php?book_id=<?php echo $row['book_id']?>">Delete</a></td>
											<?php
													echo "</tr>";
										}
									echo "</table>";
								} else {
									echo("No Data were Found!");
								}
								
								$conn->close();

							
							
						 ?>

					<!-- Selecting from database  End-->

					  

					  
				</form><br>
			</div>
			<div class="col-md-2"></div>
		
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				