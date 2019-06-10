<?php include_once('header.php'); ?>
	
	
	<div class="container-fluid">	
		
		<div class="mainContent" id="package">
			<!-- <section style="padding:0px;">
				<article> -->
					<h2 class="text-center">Easy shopping/Place Order</h2>
					<?php include('search.php'); ?>
				    
				<!-- </article>
			</section> -->
		<div class="col-md-12">
			<div class="col-md-3" style="padding-left: 45px;">
					<?php include_once('all_cat.php'); ?>
			</div>
			
			
				
					 	<!-- fil up form -->
				<div class="col-md-2"></div>
				
				<div class="col-md-5" style="box-shadow: 2px 1px 2px 1px grey;">
				<form action="" method="post" id="" enctype="multipart/form-data">
						
						<h3 class="text-center">Your Precious Feedback</h3>
					 

					  <div class="form-group">
					    <label for="exampleInputName">Name</label>
					    <input type="text" class="form-control" id="exampleInputPassword"  name="name"  required>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">E-mail</label>
					    <input type="email" class="form-control" id="exampleInputEmail"  name="email" required>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputFeedback">Feedback</label> <br>
					   <!--  <input type="text" class="form-control" id="exampleInputEmail" name="contact" required> -->
					   <textarea name="feedback" id="" cols="60" rows="4" style="width:546px!important;"></textarea>
					  </div>

					  <button type="submit" class="btn btn-default" name="submit" style="float: right;width:105px;height:35px;">Send us</button> <br> <br>

					 <!--  iserting feedback -->
					 <?php 
					 		if (isset($_POST['submit'])) {
					 			include('config.php');
					 			$sql = "INSERT INTO feedback (name,email,feedback)
										VALUES ('".$_POST["name"]."', '".$_POST["email"]."','".$_POST["feedback"] ."')";

										if ($conn->query($sql) === TRUE) {
										    echo "<script>alert('Thanks For Your Feedback!');</script>";
										} else {
										    echo "<script>alert('Sorry! Couldn't be accepted);<script>";
										}
					 		}

					  ?>
					 <!--  iserting feedback -->
					  
				</form><br>
					 	<!-- fil up form -->
				</div> <!-- col-md-5 -->
				<div class="col-md-2"></div>
		</div><!-- col-md-12 -->
		</div> <!-- mainContent -->
	</div> <!-- container-fluid -->

	<?php include_once('footer.php'); ?>







				