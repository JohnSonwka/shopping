<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Easy shopping/Feedback</h2>
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
								$sql = "SELECT * FROM feedback";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
									echo "<table border='2' align='center' class='table table-hover'>
												<tr>
													<th>SL</th>
													<th>Name</th>
													<th>E-mail</th>
													<th>Feedback</th>
												</tr>";
										while($row = $result->fetch_assoc()){
													echo "<tr>";
													echo "<td>".$row['feed_id']."</td>";
													echo "<td>".$row['name']."</td>";
													echo "<td>".$row['email']."</td>";
													echo "<td>".$row['feedback']."</td>";
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







				